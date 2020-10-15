<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteController;
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
Route::get('post/all', [HomeController::class, 'allPost']);
Route::get('post/show/{id}', [HomeController::class, 'showPost'])->where(['id' => '[0-9]+']);

// Admin
Route::get('admin', [AdminController::class, 'admin']);
Route::match(['get', 'post'],'admin/post/add', [AdminController::class, 'addPost']);
Route::match(['get', 'post'],'admin/post/edit/{id}', [AdminController::class, 'editPost']);

// Site
Route::post('upload', [SiteController::class, 'upload'])->name('upload');
Route::post('delete', [SiteController::class, 'delete'])->name('delete');
Route::post('getPostMaxId', [SiteController::class, 'getPostMaxId'])->name('getPostMaxId');
