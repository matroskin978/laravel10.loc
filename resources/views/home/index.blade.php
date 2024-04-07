@extends('layouts.main')

@section('title', $title ?? 'Test title')

@section('description')
    <meta name="description" content="test description from view">
@endsection

@section('content')
    <h1>Home page</h1>

    @php
        /**
         * @var \Illuminate\Support\Collection $products
         * @var \App\Models\Post $post
         */
    @endphp
    {{--@foreach($products->chunk(3) as $chunk)
        <div class="row my-3">
            @foreach($chunk as $product)
                <div class="col-md-4">
                    {{ $product['title'] }}
                </div>
            @endforeach
        </div>
    @endforeach--}}

    @foreach($posts as $post)
        {{ $post->title }} | {{ $post->isPublished() }}<br>
    @endforeach
    <hr>

    @foreach($posts2 as $post)
        {{ $post->title }} | {{ $post->status ? 'Published' : 'Not Published' }}<br>
    @endforeach
    <hr>

    @foreach($posts3 as $post)
        {{ $post->title }} | {{ $post->status ? 'Published' : 'Not Published' }}<br>
    @endforeach
    <hr>

@endsection
