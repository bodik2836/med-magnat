<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

// User
Route::get('/', [HomeController::class, 'index']);
Route::get('news', [HomeController::class, 'news']);
Route::get('news/{id}', [HomeController::class, 'showPost'])->where(['id' => '[0-9]+']);

// Admin
Route::get('admin', [AdminController::class, 'admin']);
Route::match(['get', 'post'],'admin/post/add', [AdminController::class, 'addPost']);

Route::post('upload', [AdminController::class, 'upload'])->name('upload');
Route::post('delete', [AdminController::class, 'delete'])->name('delete');
