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
    return view('home');
});

Auth::routes();

Route::prefix('individual')->group(function () {
    Route::get('/', 'Individual\AccountController@index');
    Route::get('/dashboard', 'Individual\AccountController@dashboard')->name('individual.dashboard');
    Route::get('/bookings', 'Individual\BookingController@index')->name('individual.bookings');
    Route::get('/settings', 'Individual\SettingController@index')->name('individual.settings');
    Route::post('/settings/update-profile', 'Individual\SettingController@updateProfile')->name('individual.profile');
});
