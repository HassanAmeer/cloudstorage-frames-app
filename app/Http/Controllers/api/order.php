<?php

namespace App\Http\Controllers\api;

use Log;
use App\Models\orders;
use App\Models\TransactionHistory;
use App\Models\notify;
use App\Models\appSettings;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Mail\CreateOrder;
use Illuminate\Support\Facades\Mail;



class order extends Controller
{
     /////////
     public function order(Request $req)
     {
         try {
            // Retrieve the authenticated user
            $user = $req->user();
            $orders = orders::where('uid', $user->id)->get();
 
            return response()->json([
                'success' => true,
                'orders' => $orders,
            ], 201);
         } catch (\Exception $e) {
             Log::error('App orders get failed error: ' . $e->getMessage());
             return response()->json([
                 'success' => false,
                 'error' => $e->getMessage(),
                 'message' => 'App orders get failed',
             ], 500);
         }
     }

     
      ///// make order
    
    public function makeorder(Request $req)
    {
        try {
            $user = $req->user();
            // $notify = notify::where('uid', $user->id)->get();

            $validator = Validator::make($req->all(), [
                // 'uid' => 'sometimes|required|string|max:255',
                // 'status' => 'sometimes|required|string|max:255',
                'images' => 'nullable|array',
                // 'images.*' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'slides' => 'nullable|array',
                // 'slides.*' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'frames' => 'nullable|array',
                // 'frames.*' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
                // 'price' => 'required|string|max:255',
                // 'isPay' => 'required|boolean',
                // 'trId' => 'sometimes|required|string|max:255',
                'desc' => 'nullable|string',
            ]);

         
            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $validator->messages()
                ], 422);
            }
            
            // because iamges path coming only
            // $images = [];
            $slides = [];
            // frames have ids list
            // $frames = [];

            // if ($req->hasFile('images')) {
            //     foreach($req->file('images') as $img){
            //         $fileType = $img->getMimeType();
            //         if (strpos($fileType, 'image') !== false) {
            //             $imgname = time() . '.' . $img->getClientOriginalExtension();
            //             $img->move(storage_path('media/files'), $imgname);
            //             $finalimgPath = 'files/'.$imgname;
            //             array_push($images, $finalimgPath);
            //         } elseif (strpos($fileType, 'video') !== false) {
            //             $imgname = time() . '.' . $img->getClientOriginalExtension();
            //             $img->move(storage_path('media/videos'), $imgname);
            //             $finalimgPath = 'videos/'.$imgname;
            //             array_push($images, $finalimgPath);
            //         } else {
            //             $imgname = time() . '.' . $img->getClientOriginalExtension();
            //             $img->move(storage_path('media/files'), $imgname);
            //             $finalimgPath = 'files/'.$imgname;
            //             array_push($images, $finalimgPath);
            //         }
            //     }
            // }

            if ($req->hasFile('slides')) {
                foreach($req->file('slides') as $slide){
                    $slidename = time() + random_int(0,20000).'.' . $slide->getClientOriginalExtension();
                    $fileType = $slide->getMimeType();
                    if (strpos($fileType, 'image') !== false) {
                        $slide->move(storage_path('media/files'), $slidename);
                        $finalslidePath = 'files/'.$slidename;
                        array_push($slides, $finalslidePath);
                    } elseif (strpos($fileType, 'video') !== false) {
                        $slide->move(storage_path('media/videos'), $slidename);
                        $finalslidePath = 'videos/'.$slidename;
                        array_push($slides, $finalslidePath);
                    } else {
                        $slide->move(storage_path('media/others'), $slidename);
                        $finalslidePath = 'others/'.$slidename;
                        array_push($slides, $finalslidePath);
                    }
                }
            }

            // if ($req->hasFile('frames')) {
            //     foreach($req->file('frames') as $frame){
            //         $framename = time() . '.' . $frame->getClientOriginalExtension();
            //         $frame->move(storage_path('media/files'), $framename);
            //         $finalframePath = 'files/'.$framename;
            //         array_push($frames, $finalframePath);
            //     }
            // }

           $check = orders::create([
                'uid' => $user->id,
                // 'status' => $req->status,
                'images' => $req->images ?? [],
                'frames' =>  $req->frames ?? [],
                'slides' => $slides, 
                // 'price' => $req->price,
                // 'isPay' => $req->isPay,
                // 'trId' => $req->trId,
                'desc' => $req->desc
            ]);
            
             
            
                try {
                    $notify = notify::create([
                          'uid' => $user->id,
                          'title' => "Order Created", 
                          'desc' => "🛍️ Order id:".$check->id,
                    ]);
                    
                    $appSettings = appSettings::first();
                    Mail::to($user->email)->send(new CreateOrder('Order Created', $appSettings,$check->id,$req->desc));
                } catch (\Exception $e) {
                    Log::error('Seending Emails and Notifications error: ' . $e->getMessage());
                }
        
            return response()->json([
                'success' => true,
                'message' => 'Order Created successfully',
                'order' => $check,
            ], 200);

        } catch (\Exception $e) {
            Log::error('Order Created error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
                'message' => 'Order Created failed',
            ], 500);
        }
    }


    ////////
  public function makeTransactionHistoryF(Request $req)
      {
          $validator = Validator::make($req->all(), [
            //   'status' => 'required|string|max:255',
            //   'plantype' => 'required|string|max:255',
              'payfor' => 'required|string|max:255',
              'folderstorage' => 'sometimes|nullable|string|max:255',
              'foldername' => 'sometimes|nullable|string|max:255',
              'frameids' => 'nullable|array',
              'price' => 'required|string|max:255',
              'trid' => 'required|string|max:255',
          ]);
          
          if ($validator->fails()) {
              return response()->json([
                  'success' => false,
                  'message' => 'Transaction failed',
                  'errors' => $validator->messages()
              ], 422);
          }
  
          try {
              $user = $req->user();
              $tr = TransactionHistory::create([
                  'uid' => $user->id,
                  'payfor' => (int) $req->payfor,
                  'plantype' => (int) $req->plantype ?? 1,
                  'folderstorage' => !empty($req->folderstorage) ? (int) $req->folderstorage : 0,

                  'foldername' => $req->foldername ?? '',
                  'frameid' => $req->frameids ?? [],
                  'price' => $req->price,
                  'trid' => $req->trid,
              ]);
              
            $notify = notify::create([
              'uid' => $user->id,
              'title' => "Pyment Created", 
              'desc' => "️💸Amount :".$req->price." Transaction id:".$req->trid,
            ]);
    
              return response()->json([
                  'success' => true,
                  'message' => 'Transaction Created',
                  'folder' => $tr,
              ], 201);
              
          } catch (\Exception $e) {
              Log::error('Transaction created error: ' . $e->getMessage());
              return response()->json([
                  'success' => false,
                  'error' => $e->getMessage(),
                  'message' => 'Transaction created failed',
              ], 500);
          }
      }
}