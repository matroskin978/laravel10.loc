@extends('layouts.main')

@section('title', $title ?? 'Test title')

@section('description')
    <meta name="description" content="test description from view">
@endsection

@section('content')
    <h1>Home page</h1>

    {{--@isset($users)
        @foreach ($users as $user)
            {{ $user['name'] }} <br>
        @endforeach
    @endisset--}}

    {{--@if(10 < 100)
        <p>10 > 100</p>
    @elseif(10 < 5)
        <p>10 < 5</p>
    @else
        10 == 10
    @endif--}}

    {{--@if (!empty($users))
        @foreach ($users as $user)
            {{ $user['name'] }} <br>
        @endforeach
    @endif--}}

    {{--@php
        $users2 = [];
    @endphp

    @forelse($users as $user)
        {{ $user['name']  }} <br>
    @empty
        <p>No users</p>
    @endforelse--}}

    {{--@for ($i = 1; $i <= 10; $i++)
        @if ($i == 5)
            @continue
        @endif
        {{ $i }} <br>
        @if ($i == 8)
            @break
        @endif
    @endfor--}}

    {{--@foreach ($users as $user)
        {{ $loop->iteration  }} - {{ $user['name'] }} <br>
    @endforeach--}}

    @foreach ($users as $user)
        <span @class(['text-danger' => $loop->odd])>{{ $loop->iteration  }}. {{ $user['name'] }}</span> <br>
    @endforeach


@endsection
