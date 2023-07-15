<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Tamasha</title>

       <!-- Google Font -->
      <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap"
        rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

      
        <!-- Css Styles -->
        <link rel="stylesheet" href="imports/homepage/assets/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="imports/homepage/assets/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="imports/homepage/assets/css/elegant-icons.css" type="text/css">
        <link rel="stylesheet" href="imports/homepage/assets/css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="imports/homepage/assets/css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="imports/homepage/assets/css/slicknav.min.css" type="text/css">
         <link rel="stylesheet" href="imports/homepage/assets/css/style.css" type="text/css">

</head>
    <body>
        <div class="min-h-screen bg-gray-100">
          @include('layouts.navigation')
          <header class="header-section">
            <div class="container">
                

                <div class="nav-menu">
                 <nav class="mainmenu mobile-menu">
                    <div class="relative flex items-top justify-center min-h-screen bg-white-100 dark:bg-white-900 sm:items-center py-4 sm:pt-0">
                        @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                         @auth
                           
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                         @endif
                        @endauth
                        </div>
                        @endif
                    </div>
                    
                   
                
                </div>
             <div id="mobile-menu-wrap"></div>
            </div>
          </header>
          <!-- Header End -->
            
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <!-- Js Plugins -->
    <!-- Js Plugins -->
    <script src="imports/homepage/assets/vendor/js/jquery-3.3.1.min.js"></script>
    <script src="imports/homepage/assets/vendor/js/bootstrap.min.js"></script>
    <script src="imports/homepage/assets/vendor/js/jquery.magnific-popup.min.js"></script>
    <script src="imports/homepage/assets/vendor/js/jquery.countdown.min.js"></script>
    <script src="imports/homepage/assets/vendor/js/jquery.slicknav.js"></script>
    <script src="imports/homepage/assets/vendor/js/owl.carousel.min.js"></script>
    <script src="imports/homepage/assets/vendor/js/main.js"></script>
    </body>
</html>
