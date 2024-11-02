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
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&amp;display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <header id="header" class="header header-fullwidth header-transparent-bg">
            <div class="container">
                <div class="header-desk header-desk_type_1">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="assets/images/logo.png" alt="{{ config('app.name', 'Laravel') }}" class="logo__image d-block" />
                        </a>
                    </div>

                    <nav class="navigation">
                        <ul class="navigation__list list-unstyled d-flex">
                            <li class="navigation__item">
                                <a href="{{ url('/') }}" class="navigation__link">Home</a>
                            </li>
                            <li class="navigation__item">
                                <a href="{{ route('shop') }}" class="navigation__link">Shop</a>
                            </li>
                            <li class="navigation__item">
                                <a href="{{ route('cart') }}" class="navigation__link">Cart</a>
                            </li>
                            <li class="navigation__item">
                                <a href="{{ route('about') }}" class="navigation__link">About</a>
                            </li>
                            <li class="navigation__item">
                                <a href="{{ route('contact') }}" class="navigation__link">Contact</a>
                            </li>
                        </ul>
                    </nav>

                    <div class="header-tools d-flex align-items-center">
                        <div class="header-tools__item hover-container">
                            <div class="js-hover__open position-relative">
                                <a class="js-search-popup search-field__actor" href="#">
                                    <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_search" />
                                    </svg>
                                    <i class="btn-icon btn-close-lg"></i>
                                </a>
                            </div>
                            <div class="search-popup js-hidden-content">
                                <form action="#" method="GET" class="search-field container">
                                    <p class="text-uppercase text-secondary fw-medium mb-4">What are you looking for?</p>
                                    <div class="position-relative">
                                        <input class="search-field__input search-popup__input w-100 fw-medium" type="text" name="search-keyword" placeholder="Search products" />
                                        <button class="btn-icon search-popup__submit" type="submit">
                                            <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_search" />
                                            </svg>
                                        </button>
                                        <button class="btn-icon btn-close-lg search-popup__reset" type="reset"></button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <div class="header-tools__item">
                                    <a href="{{ route('login') }}" class="header-tools__item">
                                        <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_user" />
                                        </svg>
                                    </a>
                                </div>
                            @endif
                            @if (Route::has('register'))
                                <div class="header-tools__item">
                                    <a href="{{ route('register') }}" class="header-tools__item">Register</a>
                                </div>
                            @endif
                        @else
                            <div class="header-tools__item dropdown">
                                <a id="navbarDropdown" class="header-tools__item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest

                        <a href="wishlist.html" class="header-tools__item">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_heart" />
                            </svg>
                        </a>

                        <a href="{{ route('cart') }}" class="header-tools__item header-tools__cart">
                            <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_cart" />
                            </svg>
                            <span class="cart-amount d-block position-absolute js-cart-items-count">3</span>
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
