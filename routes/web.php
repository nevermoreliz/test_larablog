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
})->name('home');

// nueva ruta para laravel 8
// antes
// Route::resource('dashboard/post', 'dashboard\PostController');
// nueva forma
// Route::resource('dashboard/post', App\Http\Controllers\dashboard\PostController::class);
// Route::get('post', [App\Http\Controllers\PostController::class, 'index']);

// Route::get('post', [App\Http\Controllers\PostController::class, 'index']);

Route::resource('dashboard/post', App\Http\Controllers\dashboard\PostController::class);

Route::post('dashboard/post/{post}/image', [App\Http\Controllers\dashboard\PostController::class, 'image'])->name('post.image');

Route::resource('dashboard/category', App\Http\Controllers\dashboard\CategoryController::class);
