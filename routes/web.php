<?php

use Illuminate\Support\Facades\Route;

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
Route::post('/store', 'JafController@store')->name('store');

Route::middleware('auth')->group(function () {
    Route::get('/list', 'JafController@list')->name('list');
    Route::get('/view/{id}', 'JafController@view')->name('view');
    Route::get('/edit/{id}', 'JafController@edit')->name('edit');
    Route::post('/update/{id}', 'JafController@update')->name('update');
    Route::get('/delete/{id}', 'JafController@delete')->name('delete');
});
