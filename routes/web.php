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

Route::get('/', 'PhotoController::index')->name('home');
Route::post('/store', 'PhotoController::store')->name('photo_store');
Route::post('/download/{id}', 'PhotoController::download')->name('photo_download');
Route::delete('/delete/{id}', 'PhotoController::destroy')->name('photo_delete');