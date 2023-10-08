<?php

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

Route::get('/', [\App\Http\Controllers\MainController::class, 'index']);

/*Route::get('/admin', function () {
    return 'Admin main page';
});

Route::get('/admin/posts', function () {
    return 'Admin posts page';
});

Route::get('/admin/posts/{id}', function ($id) {
    return "Admin post {$id}";
});*/

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return 'Admin main page';
    });

    Route::get('/posts', function () {
        return 'Admin posts page';
    });

    Route::get('/posts/{id}', function ($id) {
        return "Admin post {$id}";
    });
});

/*Route::fallback(function () {
    abort(404, '404 - Page not found!!!');
    return response()->json(['answer' => '404 - Page not found'],404);
    return response('404 - Page not found', 404);
    return '404 - Page not found';
});*/
