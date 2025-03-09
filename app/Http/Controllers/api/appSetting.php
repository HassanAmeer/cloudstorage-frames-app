<?php

namespace App\Http\Controllers\api;

use Log;
use App\Models\subscriptionsSetting;
use App\Models\appSettings;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class appSetting extends Controller
{
    
    public function setting(Request $req)
    {
        try {
            $appSettings = appSettings::get();
            return response()->json([
                'success' => true,
                'appSettings' => $appSettings,
            ], 201);
        } catch (\Exception $e) {
            Log::error('App Setting get failed error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
                'message' => 'App Setting get failed',
            ], 500);
        }
    }

    public function plans(Request $req)
    {
        try {
            $plans = subscriptionsSetting::get();
            return response()->json([
                'success' => true,
                'plans' => $plans,
            ], 201);
        } catch (\Exception $e) {
            Log::error('App plans get failed error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
                'message' => 'App plans get failed',
            ], 500);
        }
    }

}