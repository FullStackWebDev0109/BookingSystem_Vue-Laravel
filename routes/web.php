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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/appoinment/{user_id}/{provider_id}', 'HomeController@appoinment')->name('appoinment');
Route::post('/appoinment/', 'HomeController@appoinment_booking')->name('appoinment_booking');
Route::get('/sendmail', 'HomeController@sendmail')->name('sendmail');

Route::get('/provider/home', 'ProviderController@index')->name('provider_home');
Route::get('/appoinment_event/', 'ProviderController@appoinment_event')->name('appoinment_event');
