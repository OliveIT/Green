<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('font-awesome/css/fontawesome.css')}}">

</head>

<body>
    <div id="app">
        <header class="page-heading header-background">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/home') }}">
                  <img src="{{asset('images/brand.png')}}" alt="" id="brand"/>
                </a>
            </div>
        </header>

        <nav class="navbar navbar-expand-md navbar-light navbar-laravel header-background">
            <!-- <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                  <img src="{{asset('images/brand.png')}}" alt="" id="brand"/>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                    <!-- Left Side Of Navbar -->
                    <!-- <ul class="nav navbar-nav">
                        <li><a href="{{url('/home')}}">Home</a></li>
                        <li><a href="{{url('/post')}}">Add Post</a></li>
                    </ul> -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <!-- @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <li><a href="{{ url('/profile')}}">Profile</a></li>
                                     <li><a href="{{ url('/category')}}">Category</a></li>
                                   <li> <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        @endguest -->
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer>
            <div class="container-fluid footer-background">
                <div class="row mt-4">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                        <p class="h5">Support</p>
                        <p class="mt-2"><u><a href="">FAQs</a></u></p>
                        <p class="mt-2 "><a href="" class="bt-line">CustServ@GreenCoreElectric.com</a></p>

                        <p class="mt-4">©2018 Green Core Electric</p>

                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
