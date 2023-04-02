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
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="plugins/jquery-timepicker/jquery.timepicker.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/menu.css">
<link rel="stylesheet" type="text/css" href="styles/custom.css">
<link rel="stylesheet" type="text/css" href="styles/menu_responsive.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
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

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/12.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_subtitle page_subtitle">Casserole</div>
							<div class="home_title"><h1>Our Menu</h1></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container mt-4" style="min-height: 700px;">
	<div class="row justify-content-center">
		@foreach($menus as $menu)
			<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-3 d-flex justify-content-center mb-4">
				<button onclick="getFoods({{ $menu->id }},this)" class="button-67 card_btn {{ $menu->id }}" target-menu="Starter" role="button">{{ $menu->name }}</button>
			</div>
		@endforeach
	</div>
	<div id="dataContainer" class="row mb-4 mt-4"></div>
</div>
<!--
<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-3 d-flex justify-content-center mb-4"><button class="button-67 card_btn" target-menu="Starter" role="button">STARTER</button></div>
    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-3 d-flex justify-content-center mb-4"><button class="button-67 card_btn" target-menu="Soup" role="button">SOUP</button></div>
    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-3 d-flex justify-content-center mb-4"><button class="button-67 card_btn" target-menu="" role="button">SALAD</button></div>
    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-3 d-flex justify-content-center mb-4"><button class="button-67 card_btn" target-menu="" role="button">RICE</button></div>
    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-3 d-flex justify-content-center mb-4"><button class="button-67 card_btn" target-menu="" role="button">NASIGORANG</button></div>
    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-3 d-flex justify-content-center mb-4"><button class="button-67 card_btn" target-menu="" role="button">NOODLSE</button></div>
    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-3 d-flex justify-content-center mb-4"><button id="fishMenu" class="button-67 card_btn" target-menu="Fish" role="button">FISH</button></div>
		<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-3 d-flex justify-content-center mb-4"><button class="button-67 card_btn" target-menu="" role="button">CHICKEN</button></div>
    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-3 d-flex justify-content-center mb-4"><button class="button-67 card_btn" target-menu="" role="button">PRAWNS</button></div>
    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-3 d-flex justify-content-center mb-4"><button class="button-67 card_btn" target-menu="" role="button">CUTTLEFISH</button></div>
    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-3 d-flex justify-content-center mb-4"><button class="button-67 card_btn" target-menu="" role="button">VEGETABLE</button></div>
    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-3 d-flex justify-content-center mb-4"><button class="button-67 card_btn" target-menu="" role="button">OMELETTE</button></div>
    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-3 d-flex justify-content-center mb-4"><button class="button-67 card_btn" target-menu="" role="button">SETMENU</button></div>
    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-3 d-flex justify-content-center mb-4"><button class="button-67 card_btn" target-menu="" role="button">EXTRAS</button></div>
  </div>
  <div id="dataContainer" class="row mb-4 mt-4"></div>
</div>
-->

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
<script type="text/javascript">
	getFoods(1)
	toggleActiveBtn('.1')

	function getFoods(menu_id,btn){
		var dish_cards = "";

		addLoader()
		toggleActiveBtn(btn)

		$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
		$.ajax({
			url:`http://localhost:8000/get_foods/${menu_id}`,
			method:'get',
			success:function(response){
				for(var j=0;j<response.length;j++){
					var dish = response[j]
					dish_cards = dish_cards + `<div class='col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-3'><div class="card animate_animated animate_zoomIn shadow-sm border-radius-1">
									    <img class="card-img-top" src="foods/${dish.image}" alt="Card image cap">
									    <div class="card-body">
									      <h3 class="card-title" style="text-align: center;"><b>${dish.name}</b></h3>
									      <h4 class="card-title" style="text-align:center;"><b>${dish.price}</b></h4>
									      <div class='d-flex justify-content-center'><a href='/food/${dish.id}' class='button-61'>View</a></div>
									    </div>
									  	</div></div>`;
				}

				$(dish_cards).appendTo("#dataContainer")
				removeLoader()
			}
		})

	}

	function addLoader(){
		$("#dataContainer").empty();
		var _node = '<div id="loader" class="d-flex justify-content-center p-2 w-100"><div class="spinner-border text-dark"></div></div>';
		$(_node).appendTo("#dataContainer");
	}

	function toggleActiveBtn(btn){
		$(".card_btn").each(function(){
			$(this).removeClass("active-menu-btn");
		})
		$(btn).toggleClass('active-menu-btn');
	}

	function removeLoader(){
		$(document.getElementById("loader")).remove();
	}
	// const btns = document.querySelectorAll('.card_btn');
	// const	menus = [
	// 		{
	// 			title:"Fish",
	// 			dishes:[
	// 				{
	// 					name:"Fried fish 0",
	// 					price:500,
	// 					image:"12.jpg"
	// 				},
	// 				{
	// 					name:"Fried fish 1",
	// 					price:500,
	// 					image:"12.jpg"
	// 				},
	// 				{
	// 					name:"Fried fish 2",
	// 					price:500,
	// 					image:"11.jpg"
	// 				},
	// 				{
	// 					name:"Fried fish 3",
	// 					price:500,
	// 					image:"image.png"
	// 				},
	// 				{
	// 					name:"Fried fish 4",
	// 					price:500,
	// 					image:"image.png"
	// 				}
	// 			]
	// 		},
	// 		{
	// 			title:"Soup",
	// 			dishes:[
	// 				{
	// 					name:"Chicken Soup",
	// 					price:500,
	// 					image:"image.png"
	// 				}
	// 			]
	// 		}
	// 	]

	// function showMenu(btn){
	// 	var targetMenu = btn.getAttribute("target-menu")
	// 	var dish_cards = ""

	// 	for(var i=0;i<menus.length;i++){
	// 		var menu = menus[i]

	// 		if(menu.title == targetMenu){

	// 			for(var j=0;j<menu.dishes.length;j++){
	// 				var dish = menu.dishes[j]
	// 				dish_cards = dish_cards + `<div class='col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-3'><div class="card animate_animated animate_zoomIn shadow-sm border-radius-1">
	// 								    <img class="card-img-top" src="images/${dish.image}" alt="Card image cap">
	// 								    <div class="card-body">
	// 								      <h3 class="card-title" style="text-align: center;"><b>${dish.name}</b></h3>
	// 								      <h4 class="card-title" style="text-align:center;"><b>${dish.price}</b></h4>
	// 								      <div class='d-flex justify-content-center'><a href='#' class='button-61'>View</a></div>
	// 								    </div>
	// 								  	</div></div>`;
	// 			}
	// 		}
	// 	}
	// 	if(dish_cards == ""){
	// 		dish_cards = "<div class='alert my-alert animate_animated animate_zoomIn'><h4 class='mb-0 p-2 text-danger'>Nothing to show yet!</h4></div>"
	// 	}
	// 	removeLoader();
	// 	$(dish_cards).appendTo("#dataContainer")

	// 	const dataContainer = document.getElementById("dataContainer")
	// 	dataContainer.scrollIntoView({ behavior: 'smooth', block: 'end'});
	// }
	// function addLoader(){
	// 	$("#dataContainer").empty();
	// 	var _node = '<div id="loader" class="d-flex justify-content-center p-2"><div class="spinner-grow text-dark"></div></div>';
	// 	$(_node).appendTo("#dataContainer");
	// }
	// function removeLoader(){
	// 	$(document.getElementById("loader")).remove();
	// }
	// $(".card_btn,#fishMenu").click(function(){
	// 		addLoader();
	// 		toggleActiveBtn(this);
	// 		showMenu(this);
	// })

	// const fishBtn = document.getElementById("fishMenu");
	// fishBtn.click();
	// //toggleActiveBtn(fishBtn)

</script>
</html>