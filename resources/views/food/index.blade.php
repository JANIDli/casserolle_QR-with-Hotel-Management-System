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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
	<div class="super_container">
		<!-- Header -->
		<header class="header">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo">
								 <a class="navbar-brand" href="index.html"><img class="logo" src="/images/loo.png"></a>
							</div>
							<nav class="main_nav">
								<ul class="d-flex flex-row align-items-center justify-content-start text-dark">
									<li class="text-dark"><a class="text-dark" href="index.html">home</a></li>
									<li class="text-dark"><a class="text-dark" href="#">about us</a></li>
									<li class="text-dark"><a class="text-dark" href="/menu">menu</a></li>
									<li class="text-dark"><a class="text-dark" href="#">Contact</a></li>
								</ul>
							</nav>
							<div class="reservations_phone ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
							  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
							</svg></div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="container">
			<div class="row shadow border food-card">
				<div class="col-xl-4 col-lg-4 border-right pl-0">
					<div class="p-3">
						<div>
							<img class="food-image" src="/foods/{{ $food->image }}" alt="">
						</div>
					</div>
				</div>
				<div class="col-xl-8 col-lg-8">
					<div class="p-2">
						<h3 class="display-4">{{ $food->name }}</h3>
						<p>{{ $food->description }}</p>
						<p>RS.<span class="price text-danger ml-2">{{ $food->price }}.00/=</span></p>
						<div class="mt-4">
							<a href="/cart/new/{{$food->id}}" class="cart-btn">Add To Cart <i class="fa-solid fa-cart-shopping ml-2"></i></a>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>


</body>
<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/styles/bootstrap-4.1.2/popper.js"></script>
<script src="/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="/plugins/greensock/TweenMax.min.js"></script>
<script src="/plugins/greensock/TimelineMax.min.js"></script>
<script src="/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="/plugins/greensock/animation.gsap.min.js"></script>
<script src="/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="/plugins/easing/easing.js"></script>
<script src="/plugins/parallax-js-master/parallax.min.js"></script>
<script src="/plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="/plugins/jquery-timepicker/jquery.timepicker.js"></script>
<script src="/js/menu.js"></script>
</html>