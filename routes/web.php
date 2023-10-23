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

Route::get('/', [HomeController::class, 'index']);
Route::get('/test', [HomeController::class, 'test']);
Route::get('/single', \App\Http\Controllers\TestController::class);

Route::prefix('admin')->name('admin.')->group(function () {
    /*Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store')->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update')->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy')->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);*/

//    Route::resource('posts', \App\Http\Controllers\Admin\PostController::class);
//    Route::resource('products', \App\Http\Controllers\Admin\PostController::class)->only(['index', 'show']);
    Route::resource('products', \App\Http\Controllers\Admin\PostController::class)->except(['create', 'store', 'edit', 'update', 'destroy'])->names([
        'show' => 'products.view',
    ]);
});

