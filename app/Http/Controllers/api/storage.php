<?php

namespace App\Http\Controllers\api;

use Log;
use App\Mail\Shared;
use App\Models\appUsers;
use App\Models\notify;
use App\Models\appSettings;
use App\Models\cloudstorage;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class storage extends Controller
{
     /////////
    
    public function getFilesByFolderIdF(Request $req, $folderid)
    { 
        try {
            if (empty($folderid)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Folder ID is required',
                ], 400);
            }
            $user = $req->user();
            $storage = cloudstorage::
                // where('uid', $user->id)->
               
                where('id', $folderid) 
                ->first();
            
            if (!$storage) {
                return response()->json([
                    'success' => false,
                    'message' => 'No files',
                ], 404);
            }
            
            return response()->json([
                'success' => true,
                'files' => $storage,
            ], 200);
    
        } catch (\Exception $e) {
            Log::error('App Folder Files get failed error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
                'message' => 'App Folder Files get failed',
            ], 500);
        }
    }

     
     public function getstorage(Request $req)
     {
         try {
            $user = $req->user();
            $storage = cloudstorage::where('uid', $user->id)->get();
 
            return response()->json([
                'success' => true,
                'storage' => $storage,
            ], 201);
         } catch (\Exception $e) {
             Log::error('App storage get failed error: ' . $e->getMessage());
             return response()->json([
                 'success' => false,
                 'error' => $e->getMessage(),
                 'message' => 'App storage get failed',
             ], 500);
         }
     }
     
      public function getSharedFolderF(Request $req)
     {
         try {
            $user = $req->user();
                    $storage = cloudstorage::whereJsonContains('shared', (string)$user->id)->get();
            // $storage = cloudstorage::where('uid', $user->id)->get();
 
            return response()->json([
                'success' => true,
                'storage' => $storage,
            ], 201);
         } catch (\Exception $e) {
             Log::error('App storage get failed error: ' . $e->getMessage());
             return response()->json([
                 'success' => false,
                 'error' => $e->getMessage(),
                 'message' => 'App storage get failed',
             ], 500);
         }
     }
     
     public function delfolder(Request $req)
     {
        $validator = Validator::make($req->all(), [
            'folderid' => 'required|string|max:255',
        ]);


        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->messages()
            ], 422);
        }
        
         try {
            $storage = cloudstorage::where('id', $req->folderid)->first();

            if ($storage) {
                
                 $user = $req->user();
                 $notify = notify::create([
                  'uid' => $user->id,
                  'title' => "Folder deleted", 
                  'desc' => "🚮 ".$storage->folderName.": Folder is deleted successfully", 
                 ]);
                 
                $storage->delete();
                return response()->json([
                    'success' => true,
                    'message' => "Folder deleted successfully.",
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => "Folder not found.",
                ], 404);
            }
            
         } catch (\Exception $e) {
             Log::error('folder deleted failed error: ' . $e->getMessage());
             return response()->json([
                 'success' => false,
                 'error' => $e->getMessage(),
                 'message' => 'fodler deleted failed',
             ], 500);
         }
     }
     public function renamefolder(Request $req)
     {
        $validator = Validator::make($req->all(), [
            'folderid' => 'required|string|max:255',
            'newName' => 'required|string|max:255',
        ]);


        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->messages()
            ], 422);
        }
        
         try {
            $storage = cloudstorage::where('id', $req->folderid)->first();

            if ($storage) {
                
                $user = $req->user();
                $notify = notify::create([
                  'uid' => $user->id,
                  'title' => "Folder Renamed", 
                  'desc' => "🗂 ".$storage->folderName.": Folder Renamed To".$req->newName, 
                 ]);
                 
                 
                $storage->folderName = $req->newName;
                $storage->save();
                return response()->json([
                    'success' => true,
                    'message' => "Folder renamed successfully.",
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => "Folder not found.",
                ], 404);
            }
            
         } catch (\Exception $e) {
             Log::error('fodler rename failed error: ' . $e->getMessage());
             return response()->json([
                 'success' => false,
                 'error' => $e->getMessage(),
                 'message' => 'Folder rename failed',
             ], 500);
         }
     }

    //  'uid',
    //     'folderId',
    //     'folderName',
    //     'usedsize',
    //     'items',
    //     'shared',
     
      ///// make folder
      public function makefolder(Request $req)
      {
          $validator = Validator::make($req->all(), [
              'folderName' => 'required|string|max:255', 
              'totalsize' => 'required|string|max:255', 
              'subscriptionno' => 'required|string|max:255', 
          ]);
          
          if ($validator->fails()) {
              return response()->json([
                  'success' => false,
                  'message' => 'folder created failed',
                  'errors' => $validator->messages()
              ], 422);
          }
  
          try {
              $user = $req->user();
              $folder = cloudstorage::create([
                  'uid' => $user->id,
                  'folderId' => Str::random(4) . Str::random(4, '0123456789'),
                  'folderName' => $req->folderName, 
                //   'totalsize' => is_numeric($req->totalsize) ? (int) $req->totalsize : 0,
                //   'subscription' => is_numeric($req->subscriptionno) ? (int) $req->subscriptionno : 0,

                  'totalsize' => (int) $req->totalsize * 1024, // in mb from app sized converted
                  'subscription' => (int) $req->subscriptionno, 
                  'usedsize' => 0,
                  "shared" => [],
                  "items" => [],
              ]);
              
                $notify = notify::create([
                  'uid' => $user->id,
                  'title' => "Folder Created", 
                  'desc' => "📂 ".$req->folderName.": Folder Created successfully", 
                 ]);
                 
              return response()->json([
                  'success' => true,
                  'message' => 'Folder Created',
                  'folder' => $folder,
              ], 201);
              
          } catch (\Exception $e) {
              Log::error('folder created error: ' . $e->getMessage());
              return response()->json([
                  'success' => false,
                  'error' => $e->getMessage(),
                  'message' => 'folder created failed',
              ], 500);
          }
      }



      ///////
      
    // public function uploadfiles(Request $req)
    // {
    //     try {
    //         $validator = Validator::make($req->all(), [
    //             'folderid' => 'sometimes|required|string|max:255',
    //             'files' => 'nullable|array',
    //         ]);

    //         if ($validator->fails()) {
    //             return response()->json([
    //                 'success' => false,
    //                 'message' => 'Validation failed',
    //                 'errors' => $validator->messages()
    //             ], 422);
    //         }
           

    //       $storage = cloudstorage::where('id', $req->folderid)->first();
    //       if ($storage) {
               
    //           $totalSize = 0;
    //             foreach (array_merge($storage->items, $items) as $item) {
    //                 $filePath = storage_path('media/' . $item);
    //                 if (file_exists($filePath)) {
    //                     $totalSize += ceil(filesize($filePath) / (1024 * 1024)); // Convert bytes to megabytes
    //                 }
    //             }
                
    //             if ((int) $req->folderid == 1 && $totalSize >= $storage->totalsize) {
    //                 return response()->json([
    //                     'success' => false,
    //                     'message' => 'Storage is full',
    //                 ], 400);
    //             }
                
    //             ///////// if space is available.   
    //             // them move files
    //             $items = [];
    //             $totalSize = 0;
    //             if ($req->hasFile('files')) {
    
    //                 foreach($req->file('files') as $img){
    //                     $fileType = $img->getMimeType();
    //                     $imgname = time() + rand(0, 9999) . '.' . $img->getClientOriginalExtension();
                        
    //                     if (strpos($fileType, 'image') !== false) {
    //                         $img->move(storage_path('media/files'), $imgname);
    //                         $finalimgPath = 'files/'.$imgname;
    //                     } elseif (strpos($fileType, 'video') !== false) {
    //                         $img->move(storage_path('media/videos'), $imgname);
    //                         $finalimgPath = 'videos/'.$imgname;
    //                     } else {
    //                         $img->move(storage_path('media/files'), $imgname);
    //                         $finalimgPath = 'files/'.$imgname;
    //                     }
    //                     array_push($items, $finalimgPath);
    //                 }
    //             }
                
    //             //////// after move files update the paths
    //             $check = $storage->update([
    //                 'items' => array_merge($storage->items, $items),
    //                 'usedsize' => $totalSize,
    //             ]);
               
    //           return response()->json([
    //               'success' => true,
    //               'message' => 'Files Uploaded',
    //               'files' => $check,
    //           ], 200);    
    //       } else {
    //           return response()->json([
    //               'success' => false,
    //               'message' => "storage not found.",
    //           ], 404);
    //       }

    //     } catch (\Exception $e) {
    //         Log::error('Order Created error: ' . $e->getMessage());
    //         return response()->json([
    //             'success' => false,
    //             'error' => $e->getMessage(),
    //             'message' => 'Files Uploaded Error',
    //         ], 500);
    //     }
    // }
    
    public function uploadfiles(Request $req)
{
    try {
        $validator = Validator::make($req->all(), [
            'folderid' => 'sometimes|required|string|max:255',
            'files' => 'nullable|array',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->messages()
            ], 422);
        }

        $storage = cloudstorage::where('id', $req->folderid)->first();
        if ($storage) {
            // Calculate total size of existing files in MB
            $totalSize = 0;
            foreach ($storage->items as $item) {
                $filePath = storage_path('media/' . $item);
                if (file_exists($filePath)) {
                    $totalSize += ceil(filesize($filePath) / (1024 * 1024)); // Convert bytes to megabytes
                }
            }

            // Calculate the required space for new files in MB
            $requiredSpace = 0;
            if ($req->hasFile('files')) {
                foreach ($req->file('files') as $img) {
                    $requiredSpace += ceil($img->getSize() / (1024 * 1024)); // Convert bytes to megabytes
                }
            }

            // Check if the total size of files exceeds available space
            if (($totalSize + $requiredSpace) > $storage->totalsize) {
                return response()->json([
                    'success' => false,
                    'message' => 'Storage is full',
                ], 400);
            }

            // Move files if space is available
            $items = [];
            if ($req->hasFile('files')) {
                foreach ($req->file('files') as $img) {
                    $fileType = $img->getMimeType();
                    $imgname = time() + rand(0, 9999) . '.' . $img->getClientOriginalExtension();

                    if (strpos($fileType, 'image') !== false) {
                        $img->move(storage_path('media/files'), $imgname);
                        $finalimgPath = 'files/' . $imgname;
                    } elseif (strpos($fileType, 'video') !== false) {
                        $img->move(storage_path('media/videos'), $imgname);
                        $finalimgPath = 'videos/' . $imgname;
                    } else {
                        $img->move(storage_path('media/files'), $imgname);
                        $finalimgPath = 'files/' . $imgname;
                    }

                    array_push($items, $finalimgPath);
                }
            }

            // Update storage information
            $check = $storage->update([
                'items' => array_merge($storage->items, $items),
                'usedsize' => $totalSize + $requiredSpace,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Files Uploaded',
                'files' => $check,
            ], 200);    
        } else {
            return response()->json([
                'success' => false,
                'message' => "Storage not found.",
            ], 404);
        }

    } catch (\Exception $e) {
        Log::error('Upload files error: ' . $e->getMessage());
        return response()->json([
            'success' => false,
            'error' => $e->getMessage(),
            'message' => 'Files Upload Error',
        ], 500);
    }
}

    
//     public function deletefile(Request $req)
// {
//     try {
//         $validator = Validator::make($req->all(), [
//             'folderid' => 'required|string|max:255',
//             'filename' => 'required|string|max:255',
//         ]);

//         if ($validator->fails()) {
//             return response()->json([
//                 'success' => false,
//                 'message' => 'Validation failed',
//                 'errors' => $validator->messages()
//             ], 422);
//         }

//         $storage = cloudstorage::where('id', $req->folderid)->first();
//         if ($storage) {
//             $items = $storage->items; // Assuming `items` is a JSON field
//             if (in_array($req->filename, $items)) {
//                 // Remove the file and reset keys
//                 $itemslist = array_values(array_diff($items, [$req->filename]));

//                 $totalSize = 0;
//                 foreach ($itemslist as $item) {
//                     $filePath = storage_path('media/' . $item);
//                     if (file_exists($filePath)) {
//                         $totalSize += ceil(filesize($filePath) / (1024 * 1024)); // Convert bytes to megabytes
//                     }
//                 }

//                 $storage->update([
//                     'items' => $itemslist, // Reset keys and save
//                     'usedsize' => $totalSize,
//                 ]);

//                 $filePath = storage_path('media/files/' . $req->filename);
//                 if (file_exists($filePath)) {
//                     unlink($filePath);
//                 }

//                 return response()->json([
//                     'success' => true,
//                     'message' => 'File deleted',
//                     'files' => $itemslist,
//                 ], 200);
//             } else {
//                 return response()->json([
//                     'success' => false,
//                     'message' => "File not found.",
//                 ], 404);
//             }
//         } else {
//             return response()->json([
//                 'success' => false,
//                 'message' => "Storage not found.",
//             ], 404);
//         }
//     } catch (\Exception $e) {
//         Log::error('Files Uploaded error: ' . $e->getMessage());
//         return response()->json([
//             'success' => false,
//             'error' => $e->getMessage(),
//             'message' => 'Files Uploaded Error',
//         ], 500);
//     }
// }

    ////////

public function deletefile(Request $req)
{
    try {
        $validator = Validator::make($req->all(), [
            'folderid' => 'required|string|max:255',
            'filename' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->messages()
            ], 422);
        }

        $storage = cloudstorage::where('id', $req->folderid)->first();
        if ($storage) {
            $items = $storage->items; // Assuming `items` is a JSON field
            if (in_array($req->filename, $items)) {
                // Remove the file and reset keys
                $itemslist = array_values(array_diff($items, [$req->filename]));

                // Recalculate total size after file deletion
                $totalSize = 0;
                foreach ($itemslist as $item) {
                    $filePath = storage_path('media/' . $item);
                    if (file_exists($filePath)) {
                        $totalSize += ceil(filesize($filePath) / (1024 * 1024)); // Convert bytes to megabytes
                    }
                }

                // Update storage with new items list and used size
                $storage->update([
                    'items' => $itemslist, // Reset keys and save
                    'usedsize' => $totalSize, // Update the used size after deletion
                ]);

                // Delete the actual file from the filesystem
                $filePath = storage_path('media/files/' . $req->filename);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }

                return response()->json([
                    'success' => true,
                    'message' => 'File deleted successfully.',
                    'files' => $itemslist,
                    'totalSize' => $totalSize, // Optionally return the updated size
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => "File not found.",
                ], 404);
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => "Storage not found.",
            ], 404);
        }
    } catch (\Exception $e) {
        Log::error('File deletion error: ' . $e->getMessage());
        return response()->json([
            'success' => false,
            'error' => $e->getMessage(),
            'message' => 'An error occurred while deleting the file.',
        ], 500);
    }
}



 ////////
    public function sharefolder(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'shareid' => 'required|string|max:255',
            // 'uid' => 'required|string|max:255',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Folder Accessed failed',
                'errors' => $validator->messages()
            ], 422);
        }
        
        $user = $req->user();
        if(!appUsers::where('id', $user->id)->exists()){
            return response()->json([
                'success' => false,
                'message' => 'User not found',
            ], 404);
        }

        try {
            $storage = cloudstorage::where('folderId', $req->shareid)->first();
            if ($storage) {
                $shared = array_values($storage->shared ?? []);
                if (!in_array($user->id, $shared)) {
                    $shared[] = (string)$user->id;
                    $check = $storage->update([
                        'shared' => $shared,
                    ]);
                } else {
                    return response()->json([
                        'success' => true,
                        'message' => ' Already Folder Participents',
                        'folder' => $storage,
                    ], 200); 
                }
                
                
                    try {
                        
                         $usr = appUsers::find($storage->uid);
                         $notify = notify::create([
                              'uid' => $usr->id,
                              'title' => "New Participents", 
                              'desc' => "🤝 New Participents with ".$storage->folderName, 
                        ]);
                    
                        $appSettings = appSettings::first();
                        Mail::to($usr->email)->send(new Shared('New Participents', $appSettings, $usr->name,$storage->folderName));
                    } catch (\Exception $e) {
                        Log::error('Sending Emails and Notifications error: ' . $e->getMessage());
                    }
                    
                return response()->json([
                    'success' => true,
                    'message' => 'Folder Accessed',
                    'folder' => $storage,
                ], 200);    
            } else {
                return response()->json([
                    'success' => false,
                    'message' => "Incorrect Invitation Code",
                ], 404);
            }
            
        } catch (\Exception $e) {
            Log::error('Folder Accessed error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
                'message' => 'Incorrect Invitation Code.',
            ], 500);
        }
    }

    public function removeaccessfolder(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'shareid' => 'required|string|max:255',
            'uid' => 'required|string|max:255',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Excluded Folder failed',
                'errors' => $validator->messages()
            ], 422);
        }

        if(!appUsers::where('id', $req->uid)->exists()){
            return response()->json([
                'success' => false,
                'message' => 'User not found',
            ], 404);
        }

        try {
            $storage = cloudstorage::where('folderId', $req->shareid)->first();
            if ($storage) {
                $shared = $storage->shared;
                if (in_array($req->uid, $shared)) {
                    $shared = array_diff($shared, [$req->uid]);
                    $check = $storage->update([
                        'shared' => $shared,
                    ]);
                    return response()->json([
                        'success' => true,
                        'message' => 'Access removed',
                    ], 200);
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'User Have Not Accessed',
                    ], 404);
                }
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Folder not found.',
                ], 404);
            }
            
        } catch (\Exception $e) {
            Log::error('Excluded Folder error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
                'message' => 'Excluded Folder failed',
            ], 500);
        }
    }


    
}