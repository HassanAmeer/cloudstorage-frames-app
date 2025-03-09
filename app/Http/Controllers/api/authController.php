<?php

namespace App\Http\Controllers\api;

use Log;
use App\Models\notify;
use App\Models\appUsers;
use App\Models\appSettings;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Mail\VerifCode;
use App\Mail\Welcome;

///// optional
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class authController extends Controller
{
    /**
     * Handles registration of new users
     * @param Request $req
     * @return \Illuminate\Http\JsonResponse
     */
    public function reg(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:appUsers|max:255',
            'password' => 'required|min:8',
            'address' => 'sometimes|required|string|max:255',
            'phone' => 'sometimes|required|string|max:255',
        ]);
        
        
        
    if ($validator->fails()) {
        $errors = $validator->messages();

        // Check if the error is about password length
            if ($errors->has('email')) {
                return response()->json([
                    'success' => false,
                    'message' => 'Email Already Exists.',
                    'errors' => ['email' => ['Email Already Exists.']]
                ], 422);
            }
        
            if ($errors->has('password') || str_contains($errors->first('password'), 'min')) {
                return response()->json([
                    'success' => false,
                    'message' => 'Password must be at least 8 characters long.',
                    'errors' => ['password' => ['Password must be at least 8 characters long.']]
                ], 422);
            }


        // For other errors, return all validation messages
        return response()->json([
            'success' => false,
            'message' =>$errors,
            // 'message' => 'Validation failed.',
            'errors' => $errors
        ], 422);
    }
    
    
     

        try {
            $user = appUsers::create([
                'name' => $req->name,
                'email' => $req->email,
                'phone' => $req->phone ?? '',
                'address' => $req->address ?? '',
                'isActive' => 1,
                'password' => bcrypt($req->password),
            ]);
            
            try {
                 $notify = notify::create([
                      'uid' => $user->id,
                      'title' => "Account Created", 
                      'desc' => "🔑 Your Account is Created successfully", 
                ]);
                
                $appSettings = appSettings::first();
                Mail::to($user->email)->send(new Welcome('', 'Welcome', $appSettings));
            } catch (\Exception $e) {
                Log::error('Sending Emails and Notifications error: ' . $e->getMessage());
            }
            
            return response()->json([
                'success' => true,
                'message' => 'User registered successfully',
                'user' => $user,
            ], 201);
        } catch (\Exception $e) {
            Log::error('Registration error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
                'message' => 'Registration failed',
            ], 500);
        }
    }

    /**
     * Handles user login
     * @param Request $req
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

       
    if ($validator->fails()) {
        $errors = $validator->messages();

        // Check if the error is about password length
        if ($errors->has('password') || str_contains($errors->first('password'), 'min')) {
            return response()->json([
                'success' => false,
                'message' => 'Password must be at least 8 characters long.',
                'errors' => ['password' => ['Password must be at least 8 characters long.']]
            ], 422);
        }

        // For other errors, return all validation messages
        return response()->json([
            'success' => false,
            'message' => 'Validation failed.',
            'errors' => $errors
        ], 422);
    }
    
    
        try {
            $user = appUsers::where('email', $req->email)->first();
            if ($user && Hash::check($req->password, $user->password)) {
                $token = $user->createToken($req->email)->plainTextToken;

                return response()->json([
                    'success' => true,
                    'message' => 'Login successful',
                    'token' => $token,
                    'user' => $user,
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid email or password',
                ], 401);
            }
        } catch (\Exception $e) {
            Log::error('Login error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
                'message' => 'Login failed',
            ], 500);
        }
    }

    /////// logout 
    public function logout(Request $req)
    {
        try {
            $req->user()->currentAccessToken()->delete();
            return response()->json([
                'success' => true,
                'message' => 'Logout successful',
            ], 200);
            
        } catch (\Exception $e) {
            Log::error('Logout error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
                'message' => 'Logout failed',
            ], 500);
        }
    }

    ///// profile update
    
    public function profileUpdate(Request $req)
    {
        try {
            $user = $req->user();

            $validator = Validator::make($req->all(), [
                'name' => 'sometimes|required|string|max:255',
                'email' => 'sometimes|required|email|max:255',
                'password' => 'sometimes|nullable|min:8',
                'phone' => 'sometimes|required|string|max:20',
                'subscription' => 'sometimes|required|integer',
                'totalStorage' => 'sometimes|required|integer',
                'remaingStorage' => 'sometimes|required|integer',
                'address' => 'sometimes|required|string|max:255',
                'img' => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $validator->messages()
                ], 422);
            }

            if ($req->has('name')) {
                $user->name = $req->name;
            }
            if ($req->has('email')) {
                $user->email = $req->email;
            }
            if ($req->has('phone')) {
                $user->phone = $req->phone;
            }
            if ($req->has('subscription')) {
                $user->subscription = $req->subscription;
            }
            if ($req->has('totalStorage')) {
                $user->totalStorage = $req->totalStorage;
            }
            if ($req->has('remaingStorage')) {
                $user->remaingStorage = $req->remaingStorage;
            }
            if ($req->has('address')) {
                $user->address = $req->address;
            }
            
            if ($req->password) {
                $user->password = bcrypt($req->password);
            }
            if ($req->hasFile('img')) {
                // $path = $req->file('img')->store('media');
                // $user->img = basename($path);

                $image = $req->file('img');
                $imgname = time() . '.' . $image->getClientOriginalExtension();
                // $image->move(public_path('media'), $imgname);
                $image->move(storage_path('media/images'), $imgname);
                $finalimgpath = 'images/'.$imgname;
                $user->img = $finalimgpath;

                // $image = $req->file('img');
                // $filename = $user->id . '.' . $image->getClientOriginalExtension();
                // $location = storage_path('media/' . $filename);
                // Image::make($image)->save($location);
                // $user->img = $filename;
            }else{
                $user->img = $user->img;
            }

            $user->save();
            
            $notify = notify::create([
                  'uid' => $user->id,
                  'title' => "Profile Updated", 
                  'desc' => "👦 Your Profile Is Updated", 
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Profile updated successfully',
                'user' => $user,
            ], 200);

        } catch (\Exception $e) {
            Log::error('Profile update error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
                'message' => 'Profile update failed',
            ], 500);
        }
    }
    
    /////////
      public function sendverifycodeF(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'email' => 'required|email|max:255',
            'code' => 'required|max:4',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation keys failed',
                'errors' => $validator->messages()
            ], 422);
        }

        try {
           
            $user = appUsers::where('email', $req->email)->first();

            if(!$user){
                   return response()->json([
                            'success' => true,
                            'message' => 'Email Not Found',
                            'user' => $user,
                          ], 404);
              }
              
             $appSettings = appSettings::first();
             Mail::to($user->email)->send(new VerifCode($req->code, 'Verification Code', $appSettings));
             
            return response()->json([
                'success' => true,
                'message' => 'Verification Code Sent',
                'user' => $user,
            ], 201);
            
        } catch (\Exception $e) {
            Log::error('Verification sent error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
                'message' => 'Verification sent failed',
            ], 500);
        }
    }
    /////////
 public function updatePasswordF(Request $req)
{
    $validator = Validator::make($req->all(), [
        'email' => 'required|email|max:255',
        'password' => 'required|min:8',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Update Password failed',
            'errors' => $validator->messages(),
        ], 422);
    }

    try {
        // Find the user by email
        $user = appUsers::where('email', $req->email)->first();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User not found',
            ], 404);
        }

        // Update the password
        $user->update([
            'password' => bcrypt($req->password),
        ]);

        // Create a notification
        $notify = notify::create([
            'uid' => $user->id,
            'title' => "Password Updated",
            'desc' => "🔑 New Password Created successfully",
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Password Updated Successfully',
            'user' => $user,
        ], 201);
    } catch (\Exception $e) {
        Log::error('Updating Password error: ' . $e->getMessage());
        return response()->json([
            'success' => false,
            'error' => $e->getMessage(),
            'message' => 'Updating Password failed',
        ], 500);
    }
}


    /////////
    public function notify(Request $req)
    {
        try {
                // Retrieve the authenticated user
                $user = $req->user();
                // $notify = notify::where('uid', $user->id)->get();
                $notify = Notify::where('uid', $user->id)
                ->orderBy('created_at', 'desc')
                ->get();


            return response()->json([
                'success' => true,
                'notify' => $notify,
            ], 201);
        } catch (\Exception $e) {
            Log::error('App notify get failed error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
                'message' => 'App notify get failed',
            ], 500);
        }
    }
    
    
         ///// make folder
      public function createNotifyF(Request $req)
      {
          $validator = Validator::make($req->all(), [
              'uid' => 'required|integer|max:255', 
              'title' => 'required|string|max:255', 
              'desc' => 'required|string|max:255', 
          ]);
          
          if ($validator->fails()) {
              return response()->json([
                  'success' => false,
                  'message' => 'Notifcation created failed',
                  'errors' => $validator->messages()
              ], 422);
          }
  
          try {
            //   $user = $req->user();
              $folder = notify::create([
                  'uid' => $req->uid,
                  'title' => $req->title, 
                  'desc' => $req->desc, 
              ]);
              return response()->json([
                  'success' => true,
                  'message' => 'Notifcation Created',
                  'folder' => $folder,
              ], 201);
              
          } catch (\Exception $e) {
              Log::error('Notifcation created error: ' . $e->getMessage());
              return response()->json([
                  'success' => false,
                  'error' => $e->getMessage(),
                  'message' => 'Notifcation created failed',
              ], 500);
          }
      }
      
      

}