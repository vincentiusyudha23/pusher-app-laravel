<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @stack('styles')
    <style>
        #app .sidebar{
            position: fixed;
            top: 0;
            left: 0;
            width: 17%;
            height: 100vh;
            border-right: 1px solid rgba(var(--bs-success-rgb), 0.5);
        }
        .bg-main{
            position: relative;
            width: 100%;
            height: 90vh;
            padding: 20px;
            background: linear-gradient(to bottom, rgba(var(--bs-success-rgb), 0.7) 50%, white 50%);
        }
        .sidebar-item{
            width: 100%;
            padding: 10px 20px;
            border-radius: 10px;
            color: rgba(var(--bs-success-rgb));
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .sidebar-item:hover{
            background: rgba(var(--bs-secondary-rgb), 0.5);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="app">
        @if (Auth::check())
            {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
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
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav> --}}
            @include('layouts.partials.sidebar')
        @endif
        <div class="d-flex">
            <div style="width: 17%;"></div>
            <div style="width: 83%; height: 100vh;">
                <div class="w-100" style="height: 10vh;">
                    @include('layouts.partials.navbar')
                </div>
                <main class="bg-main">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
    @stack('script')
</body>
</html>
