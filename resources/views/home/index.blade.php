@extends('layouts.main')

@section('title', $title ?? 'Test title')

@section('description')
    <meta name="description" content="test description from view">
@endsection

@section('content')
    <h1>Home page</h1>

    @foreach ($users as $user)
        <span @class(['text-danger' => $loop->odd])>{{ $user->id  }}. {{ $user->name }} - {{ $user->email  }}</span> <br>
    @endforeach


@endsection
