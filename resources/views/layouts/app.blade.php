<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <div class="p-5 bg-primary text-white text-center">
            <h1>{{ __('app.top_message') }}</h1>
            <p>{{ __('app.top_comment') }}</p> 
        </div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
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
                        <li class="nav-item dropdown" id="lang-switcher">
                            <a id="navbarDropdownLang" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ config('languages')[app()->getLocale()]['display-short'] }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownLang">
                            @foreach (config('languages') as $lang => $language)
                            @if ($lang != app()->getLocale())
                                <a class="dropdown-item" href="{{ route('change-lang') }}?lang={{ $lang }}">
                                    </span>&nbsp;{{$language['display']}}
                                </a>
                            @endif
                            @endforeach
                            </div>
                        </li>
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
</body>
</html>
