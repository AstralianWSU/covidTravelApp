<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=1280px, initial-scale=1">

        <title>COVID-Free Travel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,400&family=Nunito:wght@400;500&display=swap');
        </style>
        <!-- Styles -->

        <!-- <link rel="stylesheet" href="css/main.css"> -->
        <!-- <link rel="stylesheet" href="css/main.css"> -->
   
        <!-- <link href="{{ asset('css/core.css') }}" rel="stylesheet"> -->
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <!-- <link rel="stylesheet" href="{{ url('/css/main.css') }}">
        <link rel="stylesheet" href="{{ url('/css/core.css') }}"> -->
        <!-- <style>

            body {
                font-family: 'Nunito', sans-serif;
            }
        </style> -->
    </head>
    <body class="antialiased globalContainer">

        <header>
            <div class="logoImage">
            <a href="{{ url('/') }}"><img src="/images/nsw_logo.jpeg" width="150px"></a></div>
            <h2>COVID-Free Travel</h2>
            <div class="login">
                @guest
                    @if (Route::has('login'))
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endif

                    @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                @endguest
            </div>
        </header>
        <hr>
        <div>
            @include('partials.menu')
            @yield('content')
        </div>
        <footer>
            @php
            date_default_timezone_set("Australia/Sydney");
            echo "Today in NSW is " . date("l") . " " . date("d")."<br>". date("h:i:sa");
            @endphp
        </footer>
    </body>
</html>
