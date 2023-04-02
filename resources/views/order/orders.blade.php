<!DOCTYPE html>
<html lang="en">
    <head>
        <title>The Menu</title> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="The Venue template project">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
        <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/animate.css">
        <link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
        <link href="plugins/jquery-timepicker/jquery.timepicker.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/styles/menu.css">
        <link rel="stylesheet" type="text/css" href="/styles/food.css">
        <link rel="stylesheet" type="text/css" href="/styles/custom.css">
        <link rel="stylesheet" type="text/css" href="/styles/menu_responsive.css">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    </head>

    <style>
      .col-sm-8{
        text-align: center;
        padding: 100px;
        
      }
      .col-sm-8 h1{
        opacity: 0;
        animation: topSlide 1s ease forwards;
        animation-delay: 1s;
      }

      .col-sm-8 p{
        
        animation: buttomSlide 1s ease forwards;
        animation-delay: 1s;
      }
      
      .custom-shape-divider-bottom-1679289261 {
        position: ;
        bottom: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
        transform: rotate(180deg);
}

.custom-shape-divider-bottom-1679289261 svg {
        position: relative;
        display: block;
        width: calc(157% + 1.3px);
        height: 220px;
        margin-bottom: 0px;
}

.custom-shape-divider-bottom-1679289261 .shape-fill {
         fill: #facca1;
}
@keyframes topSlide{
    0%{
        transform: translateY(-100px);
        opacity: 0;
    }
    100%{
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes buttomSlide{
    0%{
        transform: translateY(0)
    }
    100%{
        transform: translateY(-10px)
    }
}

    </style>
<body>
    <div class="super_container">
        <!-- Header -->
        <header class="header" style="background: rgb(247, 244, 214)">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_content d-flex flex-row align-items-center justify-content-start">
                            <div class="logo">
                                 <a class="navbar-brand" href="index.html"><img class="logo" src="images/loo.png"></a>
                            </div>
                            <nav class="main_nav">
                                <ul class="d-flex flex-row align-items-center justify-content-start">
                                    <li><a href="dashboard">home</a></li>
                                    <li><a href="#">about us</a></li>
                                    <li><a href="menuu.html">menu</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </nav>
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                  <a class="nav-link" href="#">
                                    <i class="fa fa-shopping-cart" style="color:rgb(0, 0, 0);"></i>
                                  </a>
                                </li>
                              </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Hamburger -->

        <div class="hamburger_bar trans_400 d-flex flex-row align-items-center justify-content-start">
            <div class="hamburger">
                <div class="menu_toggle d-flex flex-row align-items-center justify-content-start">
                    <span>menu</span>
                    <div class="hamburger_container">
                        <div class="menu_hamburger">
                            <div class="line_1 hamburger_lines" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
                            <div class="line_2 hamburger_lines" style="visibility: inherit; opacity: 1;"></div>
                            <div class="line_3 hamburger_lines" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Menu -->

        <div class="menu trans_800">
            <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
                <ul>
                <li><a href="index.html">home</a></li>
                <li><a href="#">about us</a></li>
                <li><a href="menuu.html">menu</a></li>
                <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="menu_reservations_phone ml-auto">Cart</div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <!--Empty -->
                </div>

                <div class="col-sm-8">
                    <h1>Thank You For Ordering</h1>
                    <p>Wait a little while</p>
  
                </div>
                <div class="col-sm-2">
                    <!--Empty -->
                </div>
            </div>
        </div>

        <div class="custom-shape-divider-bottom-1679289261">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="plugins/jquery-timepicker/jquery.timepicker.js"></script>
<script src="js/menu.js"></script>
</body>
</html>