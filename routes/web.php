<?php
use Illuminate\Support\Facades\Input;
/*
 * Admin Routes
 */
Route::prefix('admin')->group(function() {

    Route::middleware('auth:admin')->group(function() {
        // Dashboard
        Route::get('/', 'DashboardController@index');

        // Products
        Route::resource('/products','ProductController');

        // Users
        Route::resource('/users','UsersController');

        // Logout
        Route::get('/logout','AdminUserController@logout');

    });

    // Admin Login
    Route::get('/login', 'AdminUserController@index');
    Route::post('/login', 'AdminUserController@store');
});

//admin routes

Route::post('/provider/register','IssuerController@provide')->name('issuer');
Route::get('/deleteIR/{id}','IssuerController@deleteIssuer');
Route::get('/searchIR', 'IssuerController@find');
/*
 * Front Routes
 */
    Route::get('/', 'Front\HomeController@index');
    Route::get('admin/viewLicense', 'Front\RegistrationController@viewLicense');
    Route::get('/search', 'Front\RegistrationController@search');
    Route::get('admin/viewIssuer', 'IssuerController@viewIssuer');
    Route::get('admin/issuers/create', 'IssuerController@index');

    Route::get('admin/license-edit/{id}','Front\RegistrationController@editLicense');
    Route::put('updateLicense/{id}','Front\RegistrationController@updateLicense');
    Route::get('/deleteLH/{id}','Front\RegistrationController@deleteLicense');
    Route::post('front/licensee-login','Front\RegistrationController@Holder');

    // User Registration //License Holders //Providers
    //Route::get('/user/register','Front\RegistrationController@index');
    //Route::post('/user/register','Front\RegistrationController@store');
    
    Route::post('/license/register','Front\RegistrationController@license');

    // User Login
        Route::get('/user/login','Front\SessionsController@index');
        Route::post('/user/login','Front\SessionsController@store');

        // Logout
        Route::get('/user/logout','Front\SessionsController@logout');
        Route::get('/user/profile', 'Front\UserProfileController@index');
        Route::get('/user/order/{id}','Front\UserProfileController@show');

        //Route for remaining frontend
        Route::get('/download','RouteController@download');
        Route::get('/licensee-login','RouteController@licensee');
        Route::get('/bin','RouteController@bin');
        Route::get('/ein','RouteController@ein');
        Route::get('/infringement','RouteController@infringement');
        Route::get('/License-Status','RouteController@status')->name('status');
        Route::post('/getbin','BinController@store');

        

