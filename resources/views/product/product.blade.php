<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                Add Product
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="margin-right:20px; href="#menu">Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="margin-right:20px; href="#customers">Sales-Rate</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link"style="margin-right:20px; href="#">Order</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"style="margin-right:20px; href="#">Message</a>
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

      <div class="page-header">
        <h1>  </h1>
      </div>

        <div class="container" style="margin-top: 70px;" >
          <form>
          <div class="row">
            <div class="col-lg-3" for="catagory">Catagory</div>
            <div class="col-lg-6"><select id="catagory" name="catagory" style="width: 400px; margin-left:-100px;">
              <option value="volvo">Fish 1</option>
              <option value="saab">Fish</option>
              <option value="fiat">Fish</option>
              <option value="audi">Fish</option>
              <option value="audi">Fish</option>
              <option value="audi">Fish</option>
              <option value="audi">Fish</option>
            </select></div>
          </div>
          <br>
          <div class="row">
            <div class="col-lg-3 " style="margin-left: ;">Iteam Name</div>
            <div class="col-lg-6 "><input type="text" value="name" style="width: 400px; margin-left:-100px;"></div>
          </div>
          <br>
          <div class="row">
            <div class="col-lg-3 " style="margin-left: ;">Description</div>
            <div class=" text-area col-lg-6 "><textarea class="form-control" name="description" id="" cols="30" rows="5" placeholder="Description" style="margin-left: -100px
            ; width:400px;"></textarea></div>
          </div>
          <br>
          <div class="row">
            <div class="col-lg-3 " style="margin-left: ;">Price</div>
            <div class="col-lg-6 "><input type="text" value="" style="width: 400px; margin-left:-100px;"></div>
          </div>
          <br>
          <div class="row">
              <div class="col-lg-3">Upload Image</div>
              <div class="col-lg-6"><input type="file" name="image" style="margin-left: -100px;"></div>

          </div>
          </form>
          </div>
      

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>