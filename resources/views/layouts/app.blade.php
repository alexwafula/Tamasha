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
        <link rel="stylesheet" href="../../../css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="../../../css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="../../../css/elegant-icons.css" type="text/css">
        <link rel="stylesheet" href="../../../css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="../../../css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="../../../css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="../../../css/style.css" type="text/css">

</head>
    <body>
        <div class="min-h-screen bg-gray-100">
          @include('layouts.navigation')
          <header class="header-section">
            <div class="container">
                <div class="logo">
                    <a href="welcome.blade.php">
                      <img src="img/logo.png" alt="">
                    </a>
                </div>

                <div class="nav-menu">
                 <nav class="mainmenu mobile-menu">
                    <div class="relative flex items-top justify-center min-h-screen bg-white-100 dark:bg-white-900 sm:items-center py-4 sm:pt-0">
                        @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                         @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                         @endif
                        @endauth
                        </div>
                        @endif
                    </div>
                    
                    <ul>
                        <li class="active"><a href="welcome.blade.php">Home</a></li>
                        <li><a href="#">Categories</a>
                            <ul class="dropdown">
                                <li><a href="#">Business and Seminars</a></li>
                                <li><a href="#">Music and Concerts</a></li>
                                <li><a href="#">Sports and Fitness</a></li>
                                <li><a href="#">Food and Drinks</a></li>
                            </ul>
                        </li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Schedule</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                 </nav>
                 <a href="#" class="primary-btn top-btn"><i class="fa fa-ticket"></i> Ticket</a>
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
        <script src="../../../js/jquery-3.3.1.min.js"></script>
        <script src="../../../js/bootstrap.min.js"></script>
        <script src="../../../js/jquery.magnific-popup.min.js"></script>
        <script src="../../../js/jquery.countdown.min.js"></script>
        <script src="../../../js/jquery.slicknav.js"></script>
        <script src="../../../js/owl.carousel.min.js"></script>
        <script src="../../../js/main.js"></script>
    </body>
</html>
