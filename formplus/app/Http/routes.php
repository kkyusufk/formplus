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
    return view('welcome');
});
Route::get('/home','PageController@home');
Route::get('/signin','PageController@signin');
Route::get('/createAccount','PageController@createAccount');
Route::get('/form','PageController@form');
Route::get('/aboutUs','PageController@aboutUs');
Route::get('/contactUs','PageController@contactUs');