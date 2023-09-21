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
    /** @var \Illuminate\Cache\CacheManager $cache */
//    $cache = app()->make('cache');
//    $cache->put('test', 123);
//    dd($cache->get('test', 'default'));
//    $cache = app('cache');
//    $cache = cache();
//    dd($cache->get('test', 'default'));
//    dd(\Illuminate\Support\Facades\Cache::get('test', 222));
    $cache = \Illuminate\Support\Facades\App::make('cache');
    dd($cache);

    return view('welcome');
});
