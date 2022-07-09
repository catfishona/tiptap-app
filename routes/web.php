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

Route::get('about', function () {
    return view('/about/index');
})->name('about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/storage', 'StorageController@index')->name('storage');

Route::get('booking/{id}', 'BookingController@index');
Route::post('booking/{id}', 'BookingController@store');

Route::post('checkout/{id}', 'PaymentController@index')->name('checkout');
Route::post('confirmcheckout/{id}', 'PaymentController@store');

Route::get('profile/{id}','ProfileController@index');
Route::post('editprofile/{id}','ProfileController@update');

Route::get('history', 'HistoryController@index')->name('historyi');
Route::get('/history/delete/{id}', 'BookingController@destroy')->name('historyDelete');