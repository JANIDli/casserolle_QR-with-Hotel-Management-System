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
        body{
            background-color: rgb(255, 255, 255);
        }

        .priceP{
            margin-left: 15px;
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
        <br>
        <br>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="mb-3"><h3>Your Order</h3></div>
                            <form action="/order/new" method="POST" id="orderForm">
                                @csrf
                                <div class="form-group">
                                <select id="foodselection" onchange="hideElement()" class="form-control" name="order_type">
                                    <option value="dinein">Dine In</option>
                                    <option value="takeaway">TakeAway</option>
                                  </select>
                                </div>

                                <div class="form-group" id="myElement">
                                  <select id="table" class="form-control" name="table_number" type="number" required>
                                    <option selected disabled>Select Table</option>
                                    <option value="1">Table  01</option>
                                    <option value="2">Table  02</option>
                                    <option value="3">Table  03</option>
                                    <option value="4">Table  04</option>
                                    <option value="5">Table  05</option>
                                    <option value="6">Table  06</option>
                                    <option value="7">Table  07</option>
                                  </select>
                                </div>
                                <input type="hidden" value="{{$items_ids}}" name="cart_items">
                                <input type="hidden" name="total" id="total-inp">
                                <div class="mt-3">
                                    <h5>Cart Items</h5>
                                    @foreach($items as $item)
                                    <div class="d-flex align-items-center shadow-sm p-2 border mb-2 w-100 justify-content-between">
                                        <div class="d-flex">
                                            <div class=""><h5 class="mb-0">{{ $item->name }}</h5></div>
                                            <div class="ml-3 text-danger"><span class="item-price">{{$item->price}}</span>/=</div>  
                                        </div>
                                        <div class="ml-3"><i class="fas fa-trash" style="color:black;"></i> </div>
                                    </div>
                                    @endforeach
                                </div>
                                
                                <div class="form-group mt-3">
                                    <label for="comment">Comment:</label>
                                    <textarea class="form-control" rows="5" id="comment" name="comment" required></textarea>
                                  </div>
                                  
                                  <div class="d-flex align-items-center justify-content-between mt-3 border-bottom pb-2">
                                    <h3 class="mb-0">Total</h3>
                                    <h3 id="total" class="ml-3 mb-0"></h3>
                                </div>
                                <div class="d-flex justify-content-center mt-3"> 
                                    <button type="submit" class="btn btn-danger">Proceed</button>
                                </div>
                            </form>
                          </div>
                    </div>

                </div>

              {{-- //////////////////////////////////////////////////////////////////// --}}


            </div>
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

<script>

    // Get Food method Selection //////////////////////////

function hideElement() {
    var selection = document.getElementById("foodselection");
    var element = document.getElementById("myElement");

    if (selection.value === "TakeAway") {
        element.style.display = "none";
    } else {
        element.style.display = "block";
    }
}

let total = 0;
$(".item-price").each(function(){
    total = total + parseInt($(this).text())
})
$("#total").text(total+'/=')
$("#total-inp").val(total)

$("#foodselection").change(function(){
    if($(this).val() == 'takeaway'){
        $("#table").hide()
    }else{
        $("#table").show()
    }
})

$("#orderForm").submit(function(e){
    if($("#foodselection").val() == 'dinein' && $("#table").val() == null){
        e.preventDefault();
        alert('Please select table number')
    }
})
</script>
</body>
</html>