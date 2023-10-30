<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class HomeController extends Controller
{

    public function index(): \Illuminate\View\View
    {
        if (!View::exists('home.index')) {
            abort(404);
        }
        return View::first(['home.index2', 'home.contact2', 'home.index'], [
            'name' => 'John',
            'age' => 35,
            'title' => 'Home Page',
        ]);

        /*return View::make('home.index', [
            'name' => 'John',
            'age' => 35,
            'title' => 'Home Page',
        ]);*/
    }

    public function test(): \Illuminate\View\View
    {
        $name = 'Katy';
        $age = 27;
        $title = 'Test Page';
        return view('home.test', compact('name', 'age', 'title'));
    }

    public function contact(): \Illuminate\View\View
    {
        $title = 'Contact Page';
        return view('home.contact')->with(['title' => $title]);
    }

}
