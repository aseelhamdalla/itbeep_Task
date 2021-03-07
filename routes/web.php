<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/landing','landingController@index');
Route::post('/create','landingController@store');
Route::get('/landing','landingController@show');


//////////////routes for email
Route::get('/email', 'EmailController@create');
Route::post('/email', 'EmailController@sendEmail')->name('send.email');




