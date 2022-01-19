<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AdminController;

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

Route::get('/',[FormController::class, 'index']);
Route::post('/check',[FormController::class,'check']);
Route::post('/thanks/store',[FormController::class,'store']);
Route::get('/thanks',[FormController::class,'thanks']);
Route::get('/admin',[AdminController::class, 'index'])->name('admin');
Route::post('/admin/search',[AdminController::class,'search']);
Route::post('/admin/delete',[AdminController::class, 'delete'])->name('delete');
