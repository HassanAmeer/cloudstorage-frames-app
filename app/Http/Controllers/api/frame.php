<?php

namespace App\Http\Controllers\api;

use Log;
use App\Models\subscriptionsSetting;
use App\Models\frames;
use App\Models\notify;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator; 



class frame extends Controller
{
    
    public function getframes(Request $req)
    {
        try {
            $frames = frames::where('show',1)->get();
            return response()->json([
                'success' => true,
                'frames' => $frames,
            ], 201);
        } catch (\Exception $e) {
            Log::error('Frames get failed error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
                'message' => 'Frames get failed',
            ], 500);
        }
    }
    ////////////////
    public function buyFrames(Request $req)
    {
        try {
            $user = $req->user();
    
            $validator = Validator::make($req->all(), [
                // 'uid' => 'required|string|max:255',
                'frameid' => 'required|string',
            ]);
    
            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $validator->messages()
                ], 422);
            }
    
            $frame = frames::find($req->frameid);
    
            if ($frame) {
                $existingUids = $frame->uids ? json_decode($frame->uids, true) : [];
                
                if (!in_array($user->id, $existingUids)) {
                    $existingUids[] = $user->id;
                }
                
                $frame->uids = json_encode($existingUids);
                $frame->save();
                
                 $notify = notify::create([
                      'uid' => $user->id,
                      'title' => "Frame Purchased", 
                      'desc' => "🖼️ Frame Id:".$req->frameid,
                  ]);
    
                return response()->json([
                    'success' => true,
                    'message' => 'Frame Purchased',
                    'frame' => $frame,
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Frame Not Found',
                ], 404);
            }
        } catch (\Exception $e) {
            Log::error('Error updating frame: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
                'message' => 'Frame Buying failed',
            ], 500);
        }
    }


}