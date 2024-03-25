<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Language;
use App\Models\Post;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{

    public function index()
    {
        $users = [];
        $cities = [];

//        $posts = Post::all()->toArray();
//        dump($posts);

//        $post = Post::query()->first()->toArray();
//        dump($post);

//        $post = Post::query()->find(2, ['id', 'title', 'slug'])->toArray();
//        dump($post);

//        $countries = Country::all(['Code', 'Name', 'Population'])->toArray();
//        dump($countries);

//        $countries = Country::query()
//            ->where('Population', '>', 100_000_000)
//            ->orderBy('Population', 'desc')
//            ->limit(5)
//            ->get(['Code', 'Name', 'Population']);
//        dump($countries);
//        return $countries->toJson();
//    return response()->json($countries);

//        $country = Country::query()->first();
        $country = Country::query()->find('AFG');
        dump($country->toArray());
//        dump($country->Name);
//        $lang = Language::query()->first();
//        dump($lang->toArray());
//        dump($lang);
//        dump($lang->id);
//        dump($lang->title);

        return view('home.index', compact('users'));
    }

    public function test(): \Illuminate\View\View
    {
        return view('home.test', ['title' => 'Test page']);
    }

    public function contact(): \Illuminate\View\View
    {
        return view('home.contact', ['title' => 'Contact page']);
    }

}
