<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YVHS530XW0"></script>
    <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-YVHS530XW0');</script>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <div class="bg-secondary text-white text-center d-flex justify-content-center align-items-center position-relative"
            style="background-image: url('{{ asset('top-wallpaper.jpg') }}'); background-size: cover; background-position: center; height: 180px;">
            <div class="position-relative ps-3 pe-3" style="background-color: rgba(30, 30, 30, 0.4); border-radius: 10px;">
                <h1 class="mt-1">{{ __('app.top_message') }}</h1>
                <p class="mb-1">{{ __('app.top_comment') }}</p>
            </div>
        </div>
        <nav class="navbar navbar-expand-sm bg-secondary-subtle navbar-light sticky-top pt-1 pb-1">
            <div class="container">
                <a class="navbar-brand" href="/">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @yield('navbar.items')
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('app.login_navbar') }}</a>
                        </li>
                        @endif
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('app.register_navbar') }}</a>
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
                                    {{ __('app.logout_navbar') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                        <!-- Language switching -->
                        <div class="btn-group" role="group" aria-label="Language switcher">
                            @foreach (config('languages') as $lang => $language)
                            <a href="{{ route('change-lang') }}?lang={{ $lang }}" class="btn btn-outline-secondary {{ $lang === app()->getLocale() ? 'active' : '' }} fs-6"
                            data-bs-toggle="tooltip" title="{{ $language['display'] }}" data-bs-placement="top">
                                {{ $language['display-short'] }}
                            </a>
                            @endforeach
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            @yield('content')
        </main>
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-1 my-2 border-top border-secondary border-1">
                <p class="col-md-4 mb-0 fs-5">&copy; 2024 Marelis Adlatus</p>
                <ul class="nav col-md-4 justify-content-end">
                    @yield('footer.items')
                </ul>
            </footer>
        </div>
    </div>
    <!-- Cookie Consent Banner -->
    <div id="cookie-consent-banner" class="cookie-consent bg-secondary-subtle text-dark p-2 position-fixed w-100 bottom-0 d-none fs-5">
        <div class="container d-flex justify-content-between align-items-center">
            <span>{{ __('cookies.text') }}</span>
            <button id="accept-cookies" class="btn btn-outline-secondary btn-sm px-5">{{ __('cookies.accept') }}</button>
        </div>
    </div>
</body>
</html>
