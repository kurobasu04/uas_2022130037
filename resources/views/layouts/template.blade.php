<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&amp;display=swap" rel="stylesheet">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        body {
            background-color: #121212;
            /* Latar belakang gelap */
            color: #e0e0e0;
            /* Teks terang */
        }

        .navbar {
            background-color: #1f1f1f;
            /* Navbar gelap */
        }

        .navbar .nav-link {
            color: #e0e0e0 !important;
            /* Teks navbar terang */
        }

        .navbar .navbar-brand {
            color: #e0e0e0 !important;
            /* Teks brand terang */
        }

        .navbar .nav-link:hover {
            color: #00bcd4 !important;
            /* Warna hover terang */
        }

        .btn {
            background-color: #00bcd4;
            color: white;
        }

        .btn:hover {
            background-color: #0097a7;
        }

        .card {
            background-color: #333333;
            /* Card gelap */
            border: 1px solid #444444;
        }

        .table {
            background-color: #1f1f1f;
            color: #e0e0e0;
        }

        .table thead {
            background-color: #222222;
        }

        .table thead th {
            color: #e0e0e0;
        }

        .table tbody tr:hover {
            background-color: #333333;
        }
    </style>
</head>

<body class="body">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"> <i class="bi bi-bag"></i> DASHBOARD </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <!-- Menu Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.index') }}">PRODUCTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('category') }}">CATEGORY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('orders.index') }}">ORDER</a>
                        </li>
                    </ul>


                    <!-- Right Side Of Navbar -->

                    <ul class="navbar-nav ms-auto">
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
                            @if (Auth::user()->utype === 'ADM')
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.index') }}">Admin Dashboard</a>
                                </li>
                            @endif

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @stack('scripts')
</body>

</html>
