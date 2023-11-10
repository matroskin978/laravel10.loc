<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class HomeController extends Controller
{

    public function index(): \Illuminate\View\View
    {
        return view('home.index', ['title' => 'Home page']);
    }

    public function test(): \Illuminate\View\View
    {
        return view('home.test', ['title' => 'Test page']);
    }

    public function contact(): \Illuminate\View\View
    {
        $data = [
            'name' => 'John',
            'age' => 20,
        ];
        return view('home.contact', ['title' => '<i>Contact page</i>', 'data' => $data]);
    }

}
