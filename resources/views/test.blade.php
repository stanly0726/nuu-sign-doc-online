@extends('layouts/app')
@section('title', 'Test')

@section('main')
    @isset($_COOKIE['token'])
        your token: {{ $_COOKIE['token'] }}
    @else
        <p>you are not logged in</p>
    @endisset

    <p>
        @isset($p)
            {{ $p }}
        @endisset
    </p>
@endsection
