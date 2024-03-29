<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">

                        @auth
                            <a href="{{ route('admin.dashboard') }}">Home</a>

                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                        @endif
                        @endauth

                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Benvenuto!
                </div>
                <div>
                    Per visualizzare i post accedi al sito
                    @auth
                        <a href="{{ route('admin.dashboard') }}">Home</a>

                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                    @endif
                    @endauth
                </div>
            </div>
        </div>
    </body>
</html>
