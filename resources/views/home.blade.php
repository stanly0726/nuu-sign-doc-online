@extends('layouts/app')
@section('title', 'Home')

@section('main')
    @if (Cookie::has('token'))
        <p>your token: {{ Cookie::get('token') }}</p>
    @else
        <p>you token have expired, but session is still valid</p>
    @endisset


    <br>
    <p>
        @isset($p)
            {{ $p }}
        @endisset
    </p>


    @isset($user_json)
        <div>
            <h2>checkToken Result json:</h2>
            <code>
                @json($user_json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
            </code>
        </div>
    @endisset

    {{-- <ul>
        @foreach (Session::all() as $key => $value)
            <li>
                {{ $key }}: {{ $value }}
            </li>
        @endforeach
    </ul> --}}
@endsection
