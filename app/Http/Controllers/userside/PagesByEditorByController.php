<?php

namespace App\Http\Controllers\userside;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\PagesDesign;
use \App\Models\settings;

class PagesByEditorByController extends Controller
{
    public function contactus (Request $req){
        $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $baseUrl = $requestScheme . '://' . $host;
        
        $pages = PagesDesign::first();
        $settingsData = settings::first();
        
        return view('contactus', compact(['baseUrl','settingsData','pages']));
    } 
    public function privacypolicy (Request $req){
        $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $baseUrl = $requestScheme . '://' . $host;
        
        $pages = PagesDesign::first();
        $settingsData = settings::first();
        
        return view('policy', compact(['baseUrl','settingsData','pages']));
    } 
    public function returnpolicy (Request $req){
        $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $baseUrl = $requestScheme . '://' . $host;
        
        $pages = PagesDesign::first();
        $settingsData = settings::first();
        
        return view('refund', compact(['baseUrl','settingsData','pages']));
    } 
    public function shippingpolicy (Request $req){
        $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $baseUrl = $requestScheme . '://' . $host;
        
        $pages = PagesDesign::first();
        $settingsData = settings::first();
        
        return view('shippingpolicy', compact(['baseUrl','settingsData','pages']));
    } 
    public function terms (Request $req){
        $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $baseUrl = $requestScheme . '://' . $host;
        
        $pages = PagesDesign::first();
        $settingsData = settings::first();
        
        return view('terms', compact(['baseUrl','settingsData','pages']));
    } 
}