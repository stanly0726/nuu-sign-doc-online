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
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/test">Test</a></li>
            <li class="float-right">
                @isset($_COOKIE['token'])
                    <a href="/logout">Logout</a>
                @else
                    <a href="/login">Login</a>
                    @endif
                </li>
            </ul>
            </li>
        </nav>
    @show

    <body>
        <main>
            @yield('main')
        </main>
        <footer>
            @yield('foot')
        </footer>
    </body>

    </html>
