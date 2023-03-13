
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>User delails </title>
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


      <div class="header"> <!-- All User details  table -- -------- -->
        <h1 style="text-align: center; font-size:50px;">All User Details</h1>
      </div>

                <table class="table table-striped table-dark" style="margin-top: 30px;">
                    <thead>
                    <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>E mail</td>
                    <td>Verified</td>
                    <td> Operator</td>
                </tr>
                <thead>

                    <tbody>

            @foreach($data as $data)
                <tr class="bg-info">
                    <td>{{$data->id}}</td>
                    <td>{{$data->username}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->email_verified_at}}</td>
                    <td> <a href="{{"delete/".$data['id']}}"> <i class="fa fa-trash" style="color:red;"></i></a></td>
                </tr>
                @endforeach
                </tbody>

      
    


   

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
</body>
</html>