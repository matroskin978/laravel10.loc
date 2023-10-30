<?php

namespace App\Providers;

use App\Composers\TestComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share('site_title', 'SITE TITLE');

        View::composer(['home.test', 'home.contact'], TestComposer::class);

        view()->composer('home.index', function (\Illuminate\View\View $view) {
            $view->with('test1', 'TEST 1');
        });

        view()->composer('home.index', function (\Illuminate\View\View $view) {
            $view->with('test2', 'TEST 2');
        });

        view()->composer('home.*', function (\Illuminate\View\View $view) {
            $menu = '<ul>';
            $menu .= '<li><a href="' . route('home.index') . '">Home</a></li>';
            $menu .= '<li><a href="' . route('home.test') . '">Test</a></li>';
            $menu .= '<li><a href="' . route('home.contact') . '">Contact</a></li>';
            $menu .= '</ul>';
            $view->with('menu', $menu);
        });
    }
}
