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

Route::get('/login', 'AuthController@indexLogin')->name('login');
Route::post('/login', 'AuthController@checkLogin')->name('checkLogin');
Route::get('/logout', 'AuthController@logout')->name('logout');
Route::get('/template/index', 'AuthController@indexTemplate');

Route::prefix('administrator')->middleware(['auth','revalidate'])->group(function(){
    Route::get('/', 'AdministratorController@index');
});

Route::prefix('waiter')->middleware(['auth','revalidate'])->group(function(){
    Route::get('/', 'WaiterController@index');
});

Route::prefix('kasir')->middleware(['auth','revalidate'])->group(function(){
    Route::get('/', 'KasirController@index');
});

Route::prefix('owner')->middleware(['auth','revalidate'])->group(function(){
    Route::get('/', 'OwnerController@index');    
});