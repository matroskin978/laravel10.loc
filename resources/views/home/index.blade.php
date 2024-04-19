@extends('layouts.main')

@section('title', $title ?? 'Test title')

@section('description')
    <meta name="description" content="test description from view">
@endsection

@section('content')
    <h1>Home page</h1>

@endsection
