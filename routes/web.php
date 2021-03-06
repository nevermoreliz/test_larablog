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

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// nueva ruta para laravel 8
// antes
// Route::resource('dashboard/post', 'dashboard\PostController');
// nueva forma
// Route::resource('dashboard/post', App\Http\Controllers\dashboard\PostController::class);
// Route::get('post', [App\Http\Controllers\PostController::class, 'index']);

// Route::get('post', [App\Http\Controllers\PostController::class, 'index']);

// post
Route::resource('dashboard/post', App\Http\Controllers\dashboard\PostController::class);
Route::post('dashboard/post/{post}/image', [App\Http\Controllers\dashboard\PostController::class, 'image'])->name('post.image');

// categorias
Route::resource('dashboard/category', App\Http\Controllers\dashboard\CategoryController::class);

// autenticacion
Auth::routes();

// otros
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// usuarios
Route::resource('dashboard/user', App\Http\Controllers\dashboard\UserController::class);

Route::get('/', [App\Http\Controllers\web\WebController::class, 'index'])->name('index');


Route::get('/detail/{id}', [App\Http\Controllers\web\WebController::class, 'detail']);
Route::get('/post-category/{id}', [App\Http\Controllers\web\WebController::class, 'post_category']);

// listado de categorias paginado
Route::get('/categories', [App\Http\Controllers\web\WebController::class, 'index'])->name('index');

// seccion de contacto
Route::get('/contact', [App\Http\Controllers\web\WebController::class, 'contact']);
