<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>REB @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@500&display=swap" rel="stylesheet">

    <!-- Tailwind css -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <style>
        .text{
            font-size: 19px;
        }

        .color:hover{
            background-color: #00FFFF!important;
            color: #fff!important;
        }

        hr{
            background-color: #fff;
        }

    </style>

</head>

<body>
    <div id="app" style = "font-family: 'Noto Sans KR', sans-serif;">
            <nav class="navbar navbar-expand-md navbar-light shadow-sm py-2 text">
                <div class="container">
                    <a class="navbar-brand text-primary" href="{{ url('/') }}">
                        <b>{{ config('app.name', 'REB') }}</b>
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
                            <li class="nav-item">
                                    <a class="nav-link text-primary" href="#">{{ __('RENT') }}</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link text-primary" href="#">{{ __('BUY\SELL') }}</a>
                            </li>
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link text-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link text-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-primary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item text-primary" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <a class="dropdown-item text-primary" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Settings') }}
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
    </div>

    <div class="container" style = "font-family: 'Noto Sans KR', sans-serif;">
        @yield('content')
    </div>
    

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
        <footer class="py-3 px-5 text-white" style = "background-color: #1E90FF; font-family: 'Noto Sans KR', sans-serif;">
            <div class="row">
                <div class=" col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="text-center">
                        <h4><b>Quicks links</b></h4>
                        <ul>
                            <li><i>HOME</i></li>
                            <li><i>RENT</i></li>
                            <li><i>BUY/SELL</i></li>
                            <li><i>ABOUT</i></li>
                        </ul>
                    </div>
                    <br>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="text-center">
                        <h4><b>Some links</b></h4>
                        <ul>
                            <li><i>HOME</i></li>
                            <li><i>RENT</i></li>
                            <li><i>BUY/SELL</i></li>
                            <li><i>ABOUT</i></li>
                        </ul>
                    </div>
                    <br>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="text-center">
                        <h4><b>Some links</b></h4>
                        <ul>
                            <li><i>HOME</i></li>
                            <li><i>RENT</i></li>
                            <li><i>BUY/SELL</i></li>
                            <li><i>ABOUT</i></li>
                        </ul>
                    </div>
                    <br>
                </div>
            </div>

            <div class="container">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 col-12 mx-auto text-center">
                    <h4><b>Subscribe for getting the notificatons of best property..</b></h4>
                    <br>
                    <form class="form-inline row">
                        <div class="form-group mx-auto mb-3">
                            <label for="inputemail" class="sr-only">Email</label>
                            <input type="email" class="form-control" name="subscribe" id="inputemail" placeholder="Email-id">
                        </div>
                            <button type="submit" class="btn btn-light text-primary color mx-auto mb-3">Submit</button>
                    </form>
                </div>
            </div>

            <div class="container text-white">
                <hr>
            </div>
 
             <div class="footer-copyright text-center py-3">
                © 2020 Copyright:Property.com
             </div>
        </footer>
        
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>
