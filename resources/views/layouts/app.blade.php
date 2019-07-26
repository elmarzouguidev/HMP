<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="template" content=" " />
<meta name="generator" content="WordPress 5.2.2" />

<!-- This site is optimized with the Yoast SEO plugin v11.6 - https://yoast.com/wordpress/plugins/seo/ 
<meta name="description" content="Laravel 5.8 Passport - Today we would love to share with you how to create rest full apis in laravel 5.8 using the laravel passport packages example"/>
<link rel="canonical" href="https://www.tutsmake.com/create-rest-api-using-passport-laravel-5-8-authentication/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Create REST API using Passport Laravel 5.8 Authentication - Tuts Make" />
<meta property="og:url" content="https://www.tutsmake.com/create-rest-api-using-passport-laravel-5-8-authentication/" />
<meta property="og:site_name" content="Tuts Make" />
<meta property="article:publisher" content="https://www.facebook.com/tutprogramming/" />
<meta property="article:section" content="Laravel" />
<meta property="article:published_time" content="2019-02-28T17:26:02+00:00" />
<meta property="article:modified_time" content="2019-03-25T17:35:13+00:00" />
<meta property="og:updated_time" content="2019-03-25T17:35:13+00:00" />
<meta property="og:image" content="https://www.tutsmake.com/wp-content/uploads/2019/02/laravel-passport-rest-full-apis.jpeg" />
<meta property="og:image:secure_url" content="https://www.tutsmake.com/wp-content/uploads/2019/02/laravel-passport-rest-full-apis.jpeg" />
<meta property="og:image:width" content="1024" />
<meta property="og:image:height" content="512" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="Laravel 5.8 Passport - Today we would love to share with you how to create rest full apis in laravel 5.8 using the laravel passport packages example" />
<meta name="twitter:title" content="Create REST API using Passport Laravel 5.8 Authentication - Tuts Make" />
<meta name="twitter:site" content="@devendra1214" />
<meta name="twitter:image" content="https://www.tutsmake.com/wp-content/uploads/2019/02/laravel-passport-rest-full-apis.jpeg" />
<meta name="twitter:creator" content="@devendra1214" />-->

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
</body>
</html>
