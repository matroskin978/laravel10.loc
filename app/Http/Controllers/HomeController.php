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

        /*Post::query()->create([
            'title' => 'Post 6',
            'slug' => 'post-6',
            'content' => 'Lorem ipsum...',
            'category_id' => 4,
        ]);*/

        /*$category = Category::query()->find(2);
        $category->posts()->save(new Post([
            'title' => 'Post 7',
            'slug' => 'post-7',
            'content' => 'Lorem ipsum...',
        ]));*/
        /*$category = Category::query()->find(2);
        $category->posts()->saveMany([
            new Post(['title' => 'Post 8', 'slug' => 'post-8', 'content' => 'Lorem ipsum...',
            ]),
            new Post(['title' => 'Post 9', 'slug' => 'post-9', 'content' => 'Lorem ipsum...',
            ]),
        ]);*/

        /*$category = Category::query()->find(3);
        dump($category->posts);
        $category->posts()->save(new Post(['title' => 'Post 14', 'slug' => 'post-14', 'content' => 'Lorem ipsum...',
        ]));
        $category->refresh();
        dump($category->posts);*/

        /*$category = Category::query()->find(4);
        $post = Post::query()->find(15);
        $post->category()->associate($category);
        $post->save();*/

        /*$post = Post::query()->find(15);
        $post->category()->dissociate();
        $post->save();*/

//        $post = Post::query()->find(10);
//        $post->tags()->attach(2);
//        $post->tags()->attach([1, 4]);
//        $post->tags()->detach([2]);
//        $post->tags()->sync([1, 2, 4]);
//        $post->tags()->toggle([1, 2, 4, 5]);


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
