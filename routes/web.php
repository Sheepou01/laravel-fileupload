<?php

use App\Http\Controllers\PhotoController;
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

Route::get('/', [PhotoController::class, 'index'])->name('home');
Route::post('/store', [PhotoController::class, 'store'])->name('photo_store');
Route::post('/download/{id}', [PhotoController::class, 'download'])->name('photo_download');
Route::delete('/delete/{id}', [PhotoController::class, 'destroy'])->name('photo_delete');