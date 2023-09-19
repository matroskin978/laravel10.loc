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

Route::get('/', function () {
//    dump('Hello, world');
//    dd('Hello, world');
//    dump(config('app.locale'));
//    dump(config('database.connections.mysql.database'));
//    dump(config('app.env'));
    dump(config('custom.custom_test', 'test'));



    return view('welcome');
});
