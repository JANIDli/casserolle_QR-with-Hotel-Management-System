<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <style>
        .logo{
            margin-left:80px;
        }
        body{
            background-color: #F1F3F4;
        }
    </style>
    @yield('styles')
</head>
<body>
   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-top: -20px; hight:10px;">
        <a class="navbar-brand" href="/"> <img class="logo" src="/images/loo.png" width="200px;"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav" style="margin-left:120px;">
            <li class="nav-item active">
              <a class="nav-link" style="margin-right:20px;" href="{{url('admin')}}">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Product
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{url('additeam')}}">Add Product</a>
                <a class="dropdown-item" href="{{ route('admin.all') }}">All Products</a>
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
      <div style="min-height: 100vh;">
        @yield('content')
      </div>
      

      <footer class="footer" style="margin-top:200px; background:black;">
        <div class="container">
          <span class="" style="margin-left: 465px; color:white; " >© 2023 Alankulama casserole</span>
        </div>
      </footer>

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
      
</body>
@yield('script')
</html>