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
});
