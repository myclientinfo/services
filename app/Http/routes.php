<?php

Route::get('/', function () {
    return view('homepage');
});


// Auth routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


// create user routes
Route::get('/register', ['as'=>'register', 'uses' => 'RegistrationController@create']);
Route::post('/register', 'RegistrationController@store');
Route::get('/customer', 'RegistrationController@createUser');
Route::post('/customer', 'RegistrationController@storeUser');

// search and display profiles
Route::get('/search', ['as'=>'search', 'uses' =>'SuppliersController@index']);
Route::post('/search', 'SuppliersController@search');
Route::get('/supplier/{id}', ['as' => 'profile', 'uses' => 'SuppliersController@show']);


// customer profile viewing and editing
Route::group(['middleware' => 'auth'], function() {
    Route::get('/profile', 'SuppliersController@profile');
    Route::get('/profile/edit', 'SuppliersController@edit');
    Route::post('/profile/edit', 'SuppliersController@update');
});

Route::group(['prefix' => 'api'], function() {

    Route::get('/services/', 'ServicesController@edit');

    Route::group(['middleware'=>'auth'], function(){
        Route::get('/supplier_services/', 'SuppliersController@supplierServices');
        Route::post('/supplier_services/', 'SuppliersController@saveSupplierServices');
    });

});

