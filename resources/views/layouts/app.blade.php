<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

@section('nav')
    <nav class="mb-5">
        <ul>
            <li><a class="nav_title bg-rose-700">研發處核章計畫</a></li>
            <li><a href="/home" class="nav_link">Home</a></li>
            <li><a href="/test" class="nav_link">Test</a></li>
            <li class="float-right">
                @if (Session::has('user'))
                    <a href="/logout" class="nav_link">Logout</a>
                @else
                    <a href="/login" class="nav_link">Login</a>
                @endif
            </li>
        </ul>
        </li>
    </nav>
@show

<body>
    <main class="mx-9 my-2">
        @yield('main')
    </main>
</body>

</html>
