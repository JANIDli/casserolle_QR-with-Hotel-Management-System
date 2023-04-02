<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <style>
    
        @import url('https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Lato:wght@400;900&display=swap');

        .logo{
            margin-left:80px;
        }
        body{
            background-color: #F1F3F4;
        }
        .card-body{
          text-align: center
        }
        .card-body{
          box-shadow:5px 30px 30px  rgb(38, 43, 88)
          
        }
        .page-header h5{
          font-weight: bold;
        }
        
    </style>
</head>
<body>
   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-top: -20px; hight:10px;">
        <a class="navbar-brand" href="#"> <img class="logo" src="images/loo.png" width="200px;"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav" style="margin-left:120px;">
            <li class="nav-item active">
              <a class="nav-link" style="margin-right:20px;" href="{{url('adm')}}">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Product
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{url('additeam')}}">Add Product</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="margin-right:20px;" href="{{url('customer')}}">User</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="margin-right:20px; href="#">Sales-Rate</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link"style="margin-right:20px; href="#">Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="margin-right:20px;" href="{{url('messege')}}">Messages</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="margin-right:20px;href="#">Review</a>
            </li>
            <li class="nav-item" style="margin-left: 200px;">
                <a class="nav-link text-center align-self-center" href="#">
                  <i class="fas fa-user" style="color:white;"></i>
                </a>
              </li>
          </ul>
        </div>
      </nav>
      <div class="page-header" style="margin-top: 10px; margin-bottom: -35px; margin-top:70px;">
        <h5 style="text-align: center; font-size:30px; margin-top:-60px;">ADMIN DASHBOARD</h5>
      </div>
<br>
      <section id="dashboard" class="container mt-5">
        <div class="row">
          <div class="col-sm-6 col-lg-3 mb-3">
            <div class="card" style="background-color: rgba(0, 0, 0, 0.2);">
              <button class="card-body card-body btn btn-info btn-rounded" style="background-color: rgb(5, 11, 88)">
                <h5 class="card-title">Total Orders</h5>
                <p class="card-text">{{$orders}}</p>
              </button>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-3">
            <div class="card" style="background-color: #04ffff;">
              <button class="card-body card-body btn btn-info btn-rounded" style="background-color: rgb(5, 11, 88)">
                <h5 class="card-title">Total Revenue</h5>
                <p class="card-text">null</p>
              </button>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-3">
            <div class="card">
              <button class="card-body btn btn-info btn-rounded"style="background-color: rgb(5, 11, 88)">
                <h5 class="card-title" style="color: white">Total Customers</h5>
                <p class="card-text" style="color: white">{{$users}}</p>
              </button>
            </div>
          </div> 
          <div class="col-sm-6 col-lg-3 mb-3">
            <div class="card">
              <button class="card-body btn btn-info btn-rounded"style="background-color: rgb(5, 11, 88)">
                <h5 class="card-title" style="color: white">Customer Satisfaction</h5>
                <p class="card-text" style="color: white">null</p>
              </button>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-3 md-3">
            <!-- Empty ***************-->
          </div>
          <div class="col-sm-6 col-lg-3 md-3">
            <div class="card">
              <button class="card-body btn btn-success btn-rounded" style="background-color:#413D3E">
                <h5 class="card-title">Takeaway</h5>
                <p class="card-text">{{$takeawayOrdersCount}}</p>
              </button>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 md-3">
            <div class="card">
              <button class="card-body btn btn-success btn-rounded" style="background-color: #413D3E">
                <h5 class="card-title">Dine in</h5>
                <p class="card-text">{{$DineInOrdersCount}}</p>
              </button>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 md-3">
            <!-- Empty ***************-->
          </div>
        </div>
      </section>
      
    

      <footer class="footer" style="margin-top:200px; background:black;">
        <div class="container">
          <span class="" style="margin-left: 465px; color:white; " >© 2023 Alankulama casserole</span>
        </div>
      </footer>

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
      
</body>
</html>