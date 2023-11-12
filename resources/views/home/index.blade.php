@extends('layouts.main')

@section('content')
    <h1>Home page</h1>
@endsection

{{--@section('title', 'Test title from view')--}}
@section('title', $title ?? 'Test title')

@section('description')
    <meta name="description" content="test description from view">
@endsection
