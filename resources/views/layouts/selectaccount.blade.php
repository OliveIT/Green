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
          <nav class="navbar navbar-expand-lg header-background navbar-light">
           <div class="container-fluid ">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <img src="{{asset('images/brand.png')}}" alt="" id="brand"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link login-text" href="#">
                                <b>Account: </b> 1234 Fake Dr | Somewhere, AL 76545
                            </a>
                        </li>
                        <li class="nav-item rightborder">
                            <a class="nav-link login-text" href="{{route('selectaccount')}}">
                                <u><b>Switch Account</b></u>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link login-text" href="\">
                                <u><b>Logout</b></u>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
          </nav>
        </header>

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
