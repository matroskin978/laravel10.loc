<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/test', [HomeController::class, 'test'])->name('home.test');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Route::post('/store', [HomeController::class, 'store'])->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);
Route::post('/update', [HomeController::class, 'update'])->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

Route::get('/posts/create', [\App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [\App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
