<!DOCTYPE html>
<html lang="en">
<head>
<title>Home page</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="description" content="The Venue template project">


<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href= "{{url('/styles/bootstrap-4.1.2/bootstrap.min.css')}}">

<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">

<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">

<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">

<link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">

<link href="plugins/jquery-timepicker/jquery.timepicker.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="{{url('/styles/main_styles.css')}}">


<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>
<div class="super_container">
    
    <!-- Header -->

    <header class="header" >
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo">
                             <a class="navbar-brand" href="{{url('dashboard')}}"><img class="logo" src="images/loo.png"></a>
                        </div>
                        <nav class="main_nav" id="navpil">
                            <ul class="d-flex flex-row align-items-center justify-content-start nav nav-pills">
                                <li><a href="{{url('/dashboard')}}">home</a></li>
                                <li><a href="#about">about us</a></li>
                                <li><a href="menu">menu</a></li>
                                <li><a href="#contact">Contact</a></li>
                                <li><a href="#">Review</a></li>
                            </ul>
                        </nav>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                              <a class="nav-link" href="#">
                               <a href="{{ url('/cartTast') }}" type="button"> <i class="fa fa-shopping-cart" style="color:rgb(255, 0, 128); "></i></a>
                              </a>
                            </li>
                          </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hamburger -->
    
    <div class="hamburger_bar trans_400 d-flex flex-row align-items-center justify-content-start"id="Home">
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
                                <li><a href="home">about us</a></li>
                                <li><a href="menu">menu</a></li>
                                <li><a href="contact">Contact</a></li>
                                <li><a href="#">Review</a></li>
            </ul>
        </div>
        <div class="menu_reservations_phone ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg></div>
    </div>
    
    <!-- Home -->

    <div class="home" >
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/home.jpg" data-speed="0.8"></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content text-center">
                            <div class="home_subtitle page_subtitle">Casserole</div>
                            <div class="home_title"><h1>Are you Hungry Don't wait</h1></div>
                             <a class="btn btn-lg homebtn" href="menu">
                               <span>View Menu</span>
                             </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll_icon"></div>
    </div>

    <!-- about-->


    <div class="intro" data-bs-spy="scroll" data-bs-target="#navpil">
       
        <div class="container"id="about" >
             <div class="page-header">
            <h1>About</h1>
        </div>

            <div class="row">
                <div class="col">
                    <div class="intro_content">
                        <div class="intro_text">
                            <p>Casserole Restaurant has been in the business for 28 years, which was refurbished and reopens to the customers in November 2016. Casserole specialized in Chinese and Western cuisines and from our take–away sections you can take Sri Lanka rice and curry & other dishes. Our outlets are located in Mount Lavinia, Panadura and Anuradhapura.
                            Our staff’s wide knowledge in food items will help you to choose the right dishes according to your taste and mood. Our friendliness service will make your visit fabulous..</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-md-6 intro_col">
                            <div class="intro_image"><img src="images/intro_1.jpg" alt="https://unsplash.com/@quanle2819"></div>
                        </div>
                        <div class="col-xl-4 col-md-6 intro_col">
                            <div class="intro_image"><img src="images/intro_2.jpg" alt="https://unsplash.com/@fabmag"></div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>

    <div id="contact" class="container"data-bs-spy="scroll" data-bs-target="#navpil">
             <div class="page-header" id="contact">
            <h1>Contact us</h1>
        </div>

        <div id="contact" class="container-fluid bg-grey">
        <div class="row" style="display: flex; justify-content:center; padding-top:150px;" >
            <div class="col-sm-5">
            <p>Contact us and we'll get back to you within 24 hours.</p>
            <p><span class="glyphicon glyphicon-map-marker"></span> Anuradhapura</p>
            <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
            <p><span class="glyphicon glyphicon-envelope"></span> Casserole@gmai.com</p>
            </div>
        
            <div class="col-sm-7 slideanim">
        <form action="/contact" method="POST"  style="padding: 50px">
            
            <div class="row">
                <div class="col-sm-6 form-group">
                    @csrf
                        <input class="form-control"  name="name" placeholder="Name" type="text" >
                           </div>
                          <div class="col-sm-6 form-group">
                        <input class="form-control" name="email" placeholder="Email" type="email" >
                    </div>
                 </div>
            <input class="form-control" name="comment" placeholder="Comment" type="comment" style="height: 150px;" >
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btncomment btn-info" type="submit">Send</button>
                      </div>
                 </div>
            </form>
        </div>
        </div>
        </div>
        <br>
        <br>
        <br>
        <br>
 <div  class="container">
    <div class="page-header">
            <h1>Review</h1>
    </div>
   

<!-- rating.js file -->

    <!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">

                <!-- Footer Logo -->
                <div class="col-lg-3 footer_col">
                    <div class="footer_logo">
                        <div class="footer_logo_title">Casserole</div>
                        <div class="footer_logo_subtitle">Alankulama</div>
                    </div>
                    <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<p style="line-height: 1.2;">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved<i class="fa fa-heart-o" aria-hidden="true"></i></div>
                </div>

                <!-- Footer About -->
                <div class="col-lg-6 footer_col">
                    <div class="footer_about">
                        <p>
                    We LOVE our customers.We love receiving customer feedback! It helps us to keep our products and customer services always on highest standard..</p>
                    </div>
                </div>

                <!-- Footer Contact -->
                <div class="col-lg-3 footer_col">
                    <div class="footer_contact">
                        <ul>
                            <li class="d-flex flex-row align-items-start justify-content-start">
                                <div><div class="footer_contact_title">Address:</div></div>
                                <div class="footer_contact_text">481 Creekside Lane Avila CA 93424</div>
                            </li>
                            <li class="d-flex flex-row align-items-start justify-content-start">
                                <div><div class="footer_contact_title">Address:</div></div>
                                <div class="footer_contact_text">+53 345 7953 32453</div>
                            </li>
                            <li class="d-flex flex-row align-items-start justify-content-start">
                                <div><div class="footer_contact_title">Address:</div></div>
                                <div class="footer_contact_text">yourmail@gmail</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="js/addons/rating.js"></script>
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
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="plugins/jquery-timepicker/jquery.timepicker.js"></script>
<script src="js/custom.js"></script>


</body>



</html>