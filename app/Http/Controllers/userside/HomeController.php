<?php

namespace App\Http\Controllers\userside;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\settings;
use \App\Models\contactUs;


class HomeController extends Controller
{



    protected $baseUrl;

    public function __construct()
    {
        $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $this->baseUrl = $requestScheme . '://' . $host;
    }
    
    
    public function sendcontactusmsg (Request $req){
        $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $baseUrl = $requestScheme . '://' . $host;
        $settingsData = settings::all()->first();    
         $check = contactUs::create([
                'name' => $req->name,
                'email' => $req->email,
                'message' => $req->message
            ]);
            
        $stoastmsg = "Message Sent";
        $ftoastmsg = "Try Later !";
        if($check){
            return view('home', compact(['baseUrl','settingsData','stoastmsg']));
        }else{
            return view('home', compact(['baseUrl','settingsData','ftoastmsg']));
        }
        // return redirect()->route('home')->with('stoastmsg', "Message Sent");
        // }else{
        //     return redirect()->route('home')->with('ftoastmsg', 'Try Later ');
        // }
    }
}