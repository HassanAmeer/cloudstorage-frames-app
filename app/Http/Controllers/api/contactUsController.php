<?php

namespace App\Http\Controllers\api;

use Log;
use App\Models\contactUs;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

///// optional
use Illuminate\Support\Facades\Auth;


class contactUsController extends Controller
{
    /**
     * Handles registration of new users
     * @param Request $req
     * @return \Illuminate\Http\JsonResponse
     */
    public function help(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'msg' => 'sometimes|required|string',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Help/Support Validation failed',
                'errors' => $validator->messages()
            ], 422);
        }

        try {
            $check = contactUs::create([
                'name' => $req->name,
                'email' => $req->email,
                'message' => $req->msg,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Help Support Ticket Created',
                'check' => $check,
            ], 201);
        } catch (\Exception $e) {
            Log::error('Help/Support error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
                'message' => 'Help/Support failed',
            ], 500);
        }
    }


}