<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\authController;
use App\Http\Controllers\api\appSetting;
use App\Http\Controllers\api\order;
use App\Http\Controllers\api\storage;
use App\Http\Controllers\api\frame;
use App\Http\Controllers\api\contactUsController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('reg', [authController::class,'reg']);
Route::post('login', [authController::class,'login']);
Route::post('sendverifycode', [authController::class,'sendverifycodeF']);
Route::post('updatepassword', [authController::class,'updatePasswordF']);
Route::get('setting', [appSetting::class,'setting']);
Route::get('plans', [appSetting::class,'plans']);
Route::get('getframes', [frame::class, 'getframes']);
Route::post('help', [contactUsController::class, 'help']);


// Route::middleware('auth:sanctum')->group( function () {
//     Route::get('logout', [authController::class,'logout']);
// });

Route::middleware('auth:sanctum')->group(function () {
    Route::get('logout', [authController::class, 'logout']);
    Route::post('profile', [authController::class, 'profileUpdate']);
    Route::get('notify', [authController::class, 'notify']);
    Route::get('orders', [order::class, 'order']);
    Route::post('order', [order::class, 'makeorder']);
    Route::post('maketr', [order::class, 'makeTransactionHistoryF']);
    ////
    Route::post('notify', [authController::class, 'CreateNotifyF']);
    Route::get('getfilesbyfolderid/{folderid}', [storage::class, 'getFilesByFolderIdF']);
    Route::get('storage', [storage::class, 'getstorage']);
    Route::post('sharefolder', [storage::class, 'sharefolder']);
    Route::get('getsharedfolder', [storage::class, 'getSharedFolderF']);
    
    Route::post('removeaccessfolder', [storage::class, 'removeaccessfolder']);
    Route::post('makefolder', [storage::class, 'makefolder']);
    Route::delete('delfolder', [storage::class, 'delfolder']);
    Route::post('renamefolder', [storage::class, 'renamefolder']);
    Route::post('uploadfiles', [storage::class, 'uploadfiles']);
    Route::delete('deletefile', [storage::class, 'deletefile']);
    Route::post('buyframe', [frame::class, 'buyFrames']);
    ////


});












//