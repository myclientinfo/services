<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('homepage');
});

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/search', ['as'=>'search',
                        'uses' =>'SuppliersController@index']);
Route::post('/search', 'SuppliersController@search');
Route::get('/supplier/{id}', ['as' => 'profile',
                                'uses' => 'SuppliersController@show']);

// signup - user
// signup - provider
// signup
// search
// provider services
// admin login

// admin lookup tables
// admin regions