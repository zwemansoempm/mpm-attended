<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Management Partners Myanmar') }}</title>

    <!-- Scripts -->     
         
    @auth      
        <script src="{{ mix('js/app.js') }}" defer></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.ui.position.js"></script>    
        <script src="{{ asset('js/jquery.validate.js') }}" defer></script>   
    @endauth 
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">  
    @guest
    <!-- template-->
    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }} ">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }} ">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }} ">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }} ">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }} ">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }} ">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }} ">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }} ">
    <!--===============================================================================================-->
    @endguest
</head>
<body>

    	<div class="limiter">          
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
                    {{-- <div id="app"> --}}
                    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> --}}
                    {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"> --}}
                        {{-- <div class="container"> --}}
                            @auth
                             <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                                <h1>
                                    <a class="navbar-brand text-left font-weight-bold" href="{{ url('/') }}">
                                        {{ config('app.name', 'Laravel') }}
                                    </a>
                                </h1>
                              </nav>  
                            @endauth 

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
                                        {{-- <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Loginss') }}</a>
                                        </li> --}}
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        {{-- <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a> --}}

                                                {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf                  
                                                </form> --}}
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        {{-- </div> --}}
                    {{-- </nav> --}}
                
                    <main class="py-4">
                        @yield('content')
                    </main>
                    @auth
                        <div id="app"> </div>
                    @endauth
			</div>
		</div>
	</div>
	
    @guest
    {{-- </div> --}}
    {{-- <div id="dropDownSelect1"></div> --}}
<!--===============================================================================================-->
	<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/animsition/js/animsition.min.js') }} "></script>
<!--===============================================================================================-->
	{{-- <script src="{{ asset('vendor/bootstrap/js/popper.js') }} "></script> --}}
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }} "></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/select2/select2.min.js') }} "></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/daterangepicker/moment.min.js') }} "></script>
	<script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }} "></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/countdowntime/countdowntime.js') }} "></script>
<!--===============================================================================================-->
	<script src="{{ asset('js/main.js') }} "></script>
    @endguest
</body>
</html>