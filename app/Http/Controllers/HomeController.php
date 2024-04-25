<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Language;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{

    public function index()
    {

        /*$post = Post::query()->find(1);
        $tags = $post->tags;
        dump($tags);

        foreach ($tags as $tag) {
            echo "{$tag->title} | {$tag->ts->created_at}<br>";
        }*/

//        $tag = Tag::query()->find(5);
//        dump($tag->posts);

        /*$posts = Post::with('tags')->get();
        foreach ($posts as $post) {
            echo "{$post->title}<br>";
            foreach ($post->tags as $tag) {
                echo "{$tag->title}<br>";
            }
            echo "<hr>";
        }*/

        dump(Category::query()->find(1)->latestActivePost);

        return view('home.index');
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
