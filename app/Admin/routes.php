<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    // $router->get('orders', 'HomeController@index')->name('home');
    $router->resource('contactus', contactUsController::class);
    $router->resource('settings', settingsController::class);
    $router->resource('pagesDesigns', PagesDesignController::class);
    $router->resource('app-settings', appSettingsController::class);
    $router->resource('subscriptions-settings', subscriptionsSettingController::class);
    $router->resource('notifies', notifyContoller::class);
    $router->resource('app-users', appUsersController::class);
    $router->resource('cloudstorages', cloudstorageController::class);
    $router->resource('orders', ordersController::class);
    // $router->resource('transaction-histories', TransactionHistoryController::class);
    $router->resource('adminusers', AdminUsers::class);
    $router->resource('customroutes', customroutes::class); 
    $router->resource('send-emails', SendEmailsController::class);
    $router->resource('frames', framesController::class);
    $router->resource('transaction-histories', TransactionHistoryController::class);
    

});


   