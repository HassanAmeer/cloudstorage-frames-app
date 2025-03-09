<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userside\HomeController;
use App\Http\Controllers\userside\PagesByEditorByController;
use App\Http\Controllers\userside\StripeController;
use App\Http\Controllers\userside\pdfController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });











Route::get('/', function () {
    return redirect('http://antiquewhite-dogfish-546232.hostingersite.com/admin');
})->name('notfound');


// Route::get('/', function () {
//     return view('notfound');
// })->name('notfound');

Route::get('email', function () {
    return view('email');
})->name('email');

// Route::get('/', [HomeController::class, 'home']); 
Route::post('/sendcontactusmsg', [HomeController::class, 'sendcontactusmsg'])->name('sendcontactusmsg');
Route::get('/contactus', [PagesByEditorByController::class, 'contactus'])->name('contactus');




Route::get('/aboutus', [PagesByEditorByController::class, 'aboutus'])->name('aboutus');
Route::get('/termscondition', [PagesByEditorByController::class, 'termscondition'])->name('termscondition');
Route::get('/privacypolicy', [PagesByEditorByController::class, 'privacypolicy'])->name('privacypolicy');

Route::get('/orders', [PagesByEditorByController::class, 'orders'])->name('orders');
Route::get('/subscription', [PagesByEditorByController::class, 'subscription'])->name('subscription');
Route::get('/users', [PagesByEditorByController::class, 'users'])->name('users');
Route::get('/appsetting', [PagesByEditorByController::class, 'appsetting'])->name('appsetting');
Route::get('/notification', [PagesByEditorByController::class, 'notification'])->name('notification');
























//////////////////////////////////////////////////////////////////////////
/////////// for clear cache 
Route::get('/clear', function () {
    $run = Artisan::call('config:clear');
    $run = Artisan::call('cache:clear');
    $run = Artisan::call('config:cache');
    $run = Artisan::call('route:clear');

    // Restart the queue worker (if applicable):
    // $run = Artisan::call('queue:restart');
    
    $run = Artisan::call('view:clear');
    return 'Cache Cleard';
});
//////////////////////////////////////////////////////////////////////////