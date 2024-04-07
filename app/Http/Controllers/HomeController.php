<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Language;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{

    public function index()
    {
        $posts = Post::query()->get();
        dump($posts);

        $posts2 = DB::table('posts')->get();
        dump($posts2);

        $posts3 = DB::select('select * from posts');
        dump($posts3);

//        $data = [1, 2, 3, 4, 5];
//        $data = collect($data);
//        dump($data->toArray());

        /*$products = collect([
            ['title' => 'Product 1', 'price' => 10],
            ['title' => 'Product 2', 'price' => 15],
            ['title' => 'Product 3', 'price' => 10],
            ['title' => 'Product 4', 'price' => 20],
            ['title' => 'Product 5', 'price' => 20],
        ]);
        dump($products);
        dump($products->avg('price'));
        dump($products->max('price'));
        dump($products->min('price'));
        dump($products->sum('price'));

        $filtered = $products->filter(function ($value, $key) {
            return $value['price'] > 10;
        });
        dump($filtered);*/

        $countries = Country::query()->limit(10)->get(['Name', 'Population', 'Continent']);
        dump($countries->toArray());
        $filtered = $countries->filter(function ($value, $key) {
            return $value['Population'] > 1_000_000;
        });
        dump($filtered->toArray());
        dump($countries->max('Population'));
        dump($countries->min('Population'));

        dump($countries->countBy(function (Country $country) {
            return $country->Continent;
        }));

        return view('home.index', compact('posts', 'posts2', 'posts3'));
    }

    public function store(Request $request)
    {
//        var_dump($request->title);
//        var_dump($request->all());
        Post::query()->create($request->all());
        return $request->all();
    }

    public function update(Request $request)
    {
        /*$post = Post::query()->find($request->id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->status = $request->status;
        $post->save();*/

//        $post = Post::query()->findOrFail($request->id);
//        $post->update($request->all());
        var_dump(
            Post::query()
                ->where('id', $request->id)
                ->update($request->all())
        );
        return 'OK';
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
