<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/test">Test</a></li>
        <li class="float-right">
            @if (Cookie::get('token'))
                <a href="/logout">Logout</a>
            @else
            @endif
        </li>
    </ul>
    </li>
</nav>

<body>
    <main>
        your token: {{ Cookie::get('token') }}
    </main>
    <footer>
        @yield('foot')
    </footer>
</body>

</html>
