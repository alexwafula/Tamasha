<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">

       <title>Tamasha</title>

       <!-- Fonts -->
       <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       <!-- Styles -->
       <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */

         html{
          line-height:1.15;
          -webkit-text-size-adjust:100%
         }

         body{
          margin:0;
          padding: 0px
         }

         .nav ul{
          list-style: none;
         }

         .nav ul li a{
          text-decoration: none;
         }

         .nav{
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 20px 10%;
          margin: auto;
          position: fixed;
          left: 0px;
          top: 0px;
          width: 100%;
          z-index: 100;
          background-color: black;
          border: 1px solid black;
         }

         .menu{
          display: flex;
         }

         .menu li a{
          margin: 5px;
          padding: 5px 20px;
          color: white;
          font-weight: 500;
          opacity: 0.4;
         }

         .menu .active{
          opacity: 1;
         }

         .menu li a:hover{
          opacity: 1;
          transition: all ease 0.3s;
         }

         .logo{
          font-size: 2.1rem;
          color: white;
          text-transform: uppercase;
         }

         .right-elements{
          display: flex;
          justify-content: center;
          align-items: center;
         }
         .right-elements a{
          margin: 0px 10px;
         }
         .right-elements a i{
          color: white;
         }
         .right-elements a:hover i{
          color: grey;
          transition: all ease 0.2s;
         }
         #main{
          background-color: white;
          min-height: 100vh;
          display: flex;
          justify-content: center;
          align-items: center;
          margin-top: 30px;
         }
         .main-content{
          display: flex;
          justify-content: space-between;
          align-items: center;
          width: 80%;
          margin: 50px auto;
         }
         .main-img{
          height: 500px;
          width: 500px;
         }
         .main-img img{
          width: 100%;
          height: 100%;
          object-position: center;
          object-fit: contain;
          border-radius: 50px;
         }
         .main-text{
          max-width: 500px;
         }
         .main-text span{
          text-transform: uppercase;
          font-weight: 600;
          color: black;
          letter-spacing: 2px;
         }
         .main-text h1{
          font-size:2.2rem;
          font-weight: 500;
          line-height: 45px;
         }

         .main-text p{
          color: black;
          margin: 20px 0px;
         }
         .main-text a{
          width: 180px;
          height: 50px;
          display: flex;
          justify-content: center;
          align-items: center;
          border: 1px solid black;
          color: antiquewhite;
          background-color: black;
         }

         .main-text a:hover{
          cursor:pointer;
          background: antiquewhite;
          color: black;
          transition: 0.3s;
          border: none;
         }
         #categories{
          display: flex;
          justify-content: center;
          align-items: center;
          margin: 0px 0px 50px 0px white ;
          flex-direction: row;
          background-color: white;
         }

         #cate {
          display: flex;
          justify-content: center;
          align-items: center;
          font-weight: 500;
          padding: 2px 20px;
          text-transform: uppercase;
          letter-spacing: 1px;
          background-color: white;
         }
         .category-container{
          display: flex;
          flex-direction: row;
          flex-flow: wrap;
          margin: auto;
          width: 1200px;
          justify-content: space-around;
          align-items:center;
          overflow: hidden;
          padding: 20px;
          border: black;
          background-color: white;
         }
         .category-box{
          position: relative;
          padding: 20px;
         }
         .category-box img{
          width: 220px;
          height: 220px;
          object-fit: contain;
          object-position: center;
          padding: 20px;
          background-color: white;
          overflow: hidden;
          border: white;
          transition: all ease 0.3s;
         }
         .category-box span{
          text-align: center;
          display: flex;
          justify-content: center;
          align-items: center;
          font-weight: 600;
          color: black;
          text-transform: uppercase;
         }
       .category-box:hover img{
        transform: scale(1.02);
        transition: all ease 0.2s;
        box-shadow: 2px 2px 30px black;
       }
       .products{
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0px 0px 0px 0px;
        flex-direction:row;
        background-color: white;
       }
       .prod-container{
        display: flex;
        flex-direction: row;
        flex-flow: wrap;
        margin: 0px;
        width: 1200px;
        justify-content: space-around;
        align-items:center;
        overflow: hidden;
        padding: 20px;
        border: black;
        background-color: white;
       }
       #prod{
        margin-top: auto;
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: 500;
        padding: 0px;
        text-transform: uppercase;
        letter-spacing: 1px;
        background-color: white;
       }
       .category-box i{
        color: white;
       }
       .affi{
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0px 0px 50px 0px white ;
        flex-direction: row;
        background-color: white;  
       }
       .affi p{
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 80%;
        margin: 50px auto;
        max-width: 500px;
       }
       .affiliates img{
        width: 220px;
        height: 220px;
        object-fit: contain;
        object-position: center;
        padding: 20px;
        background-color: white;
        overflow: hidden;
       }
       footer{
        background-color: darkgray;
        padding: 60px 10px;
        position: relative;
        margin-top: 20px black;
        border-top: 1px solid black;
       }
       .footer-container{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 85%;
        margin: 10px auto;
       }
       .footer-logo-container{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
       }
       .footer-logo{
        width: 150px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 2rem;
        color: black;
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 1px;
       }
       .footer-logo-container span{
        color: black;
        font-weight: 400;
        margin: 10px;
        font-size: 0.8rem;
       }
       .footer-social{
        display: flex;
        justify-content: center;
        align-items: center;
       }
       .footer-social a{
        float: left;
        margin: 0px 6px;
        border-radius: 50%;
        color: black;
        background-color: black;
        border: 1px solid black;
        width: 30px;
        height: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
       }
       .footer-social a:hover{
        background-color: black;
        color: antiquewhite;
        transition: all ease 0.2s;
       }
       .footer-menu{
        display: flex;
        justify-content: center;
        align-items: center;
       }
       .footer-menu-box{
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin: 0px 30px;
       }
       .footer-menu-box strong{
        color: black;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 5px;
       }
       .footer-menu-box ul li a,
       .footer-menu-box ul li{
        list-style: none;
        color: grey;
        font-size: 0.9rem;
        margin: 5px 0px;
       }
       .footer-menu-box ul li a:hover{
         color:black;
         transition: all ease 0.3s;
       }

       a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
      </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }   
        </style>
    </head>
    <body class="antialiased">
      <nav>
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

        <a class="logo">Tamasha</a>

        <ul class="menu">
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#">Venue</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Media</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>

        <div class="right-elements">
            <a href="#" class="search">
                <i class="fas fa-search"></i>
            </a>

        </div>
      </nav>

      <section id="main">

        <div class="main-content">
            <div class="main-text">

                <span>YOUR EVENTS, YOUR WAY</span>
                <h1> Enjoy Diverse Events in Nairobi</h1>
                <p></p>
                <a href="#">Click here to order</a>

            </div>

            <div class="main-img">
                <img src="background_image1.jpg"
                    alt="Main image">
            </div>

        </div>

    </section>

    <h2 id="prod">About us:</h2>

    <section class="affi">
        <div class="main-img">
               <img src="test/upload/video_thumbnail.jpg" alt="Video Thumbnail" align="centre">
        </div>
        <p>We are passionate about bringing people together and creating memorable experiences through our platform. Whether you're planning a corporate conference, a music festival, a charity fundraiser, or any other type of event, we've got you covered.</p>

    </section>

    <h2 id="cate">Browse by Category</h2>

    <section id="categories">
        <div class="category-container">
            <a href="products.php" class="category-box">
                <img src="avatar.png"
                    alt="business and seminars">
                <span>Business and Seminars</span>
            </a>
        </div>

        <div class="category-container">
            <a href="#" class="category-box">
                <img src="avatar.png"
                    alt="music and concerts">
                <span>Music and Concerts</span>
            </a>
        </div>

        

        <div class="category-container">
            <a href="#" class="category-box">
                <img src="avatar.png"
                    alt="sports and fitness">
                <span>Sports and Fitness</span>
            </a>
        </div>
    </section>

    <h2 id="prod">Popular Events</h2>

    <section class="products 1">

        <div class="prod-container">
            <a href="#" class="category-box">
                <img
                    src="avatar.png">
                <span>LOCATION: WESTLANDS</span>
                <i class="fas fa-shopping-cart"></i>
            </a>
        </div>

        <div class="prod-container">
            <a href="#" class="category-box">
                <img
                    src="avatar.png">
                <span>LOCATION: KASARANI</span>
                <i class="fas fa-shopping-cart"></i>
            </a>
        </div>

        <div class="prod-container">
            <a href="#" class="category-box">
                <img
                    src="avatar.png">
                <span>LOCATION: KAREN</span>
                <i class="fas fa-shopping-cart"></i>
            </a>
        </div>
    </section>

    <section class="products 1">

        <div class="prod-container">
            <a href="#" class="category-box">
                <img
                    src="avatar.png">
                <span>LOCATION:</span>
                <i class="fas fa-shopping-cart"></i>

            </a>
        </div>

        <div class="prod-container">
            <a href="#" class="category-box">
                <img
                    src="avatar.png">
                <span>LOCATION</span>
                <i class="fas fa-shopping-cart"></i>
            </a>
        </div>

        <div class="prod-container">
            <a href="#" class="category-box">
                <img
                    src="avatar.png">
                <span>LOCATION</span>
                <i class="fas fa-shopping-cart"></i></i>
            </a>
        </div>

    </section>

    <footer>
        <div class="footer-container">
            <div class="footer-logo">Tamasha
            </div>

            <span>&copy Copyright 2022. All rights reserved.</span>

            <div class="footer-social">
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>

        <div>
            <div class="footer-menu">
                <div class="footer-menu-box">
                    <strong>Products</strong>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Contact Us</a></li>  
                    </ul>
                </div>
            </div>
        </div>

        <div>
            <div class="footer-menu">
                <div class="footer-menu-box">
                    <strong>Products</strong>
                    <ul>
                        <li><a href="#">Newsletter</a></li>
                        <li><a href="#">Subscribe to Get Latest media updates</a></li>                     
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>
