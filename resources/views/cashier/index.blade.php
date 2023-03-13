<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Document</title>

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap');
      .nav-link{
        font-family: 'Berkshire Swash', cursive;
      }
      .logo{
        margin-left: 30px;
      }
    </style>
</head>
<body>
  <div class="container">
    
 
    <!-- *******************************************MODAL ***********************-->
    <div class="modal fade" id="table" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Table NO:</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Payment Type</h4>
          </div>
          <div class="modal-body">
            <p><b>Name    </b>:</p>
            <p> <b> Number :</b></p>
            <br>
            <h5> <b> Order Detailes</b> </h5>
            <table class="table table-sm">
              <thead>
                <tr>
                  <th>Dish Name</th>
                  <th> Pricce</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Dish  01</td>
                  <td>Rs : 1000</td>
                 
                </tr>
                <tr>
                  <td>Dish 02</td>
                  <td>Rs : 500</td>

                </tr>
                <tr>
                  <td>Total</td>
                  <td>Rs : 1000</td>

                </tr>
              </tbody>
            </table>
            

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal" style="margin-right: 180px; width:250px;">Reject</button>

            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal" style="margin-right: 40px; width:250px;">Accept</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Start NAV BAR*****************************-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: -20px; margin-bottom:0px;">
        <a class="navbar-brand" href="#"><img class="logo" src="images/loo.png" width="200px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav" style="margin-left: 300px;">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Erining</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Newas</a>
            </li>

            <li class="nav-item" style="margin-left: 450px;">
                <a class="nav-link text-center align-self-center" href="#">
                  <i class="fas fa-user"></i>
                </a>
              </li>
          </ul>
        </div>
      </nav>

      <div class="page-header">
        <h1 style="text-align:center; font-size: 40px; font-family:Impact; margin-top:20px;" >Have a Good Day</h1>
      </div>

            <!-- BUTTON STARR ********************************-->

      <div class="container"> 
                    <div class="row" style="margin-left:x; margin-top:40px;;">
                        <div class="col-sm-3">
                            <button type="button" class="btn text-white btn-lg" data-toggle="modal" data-target="#table" style="width: 250px; height: 60px;background-color: #55acee;">Table 01</button>
                        </div>
                        <div class="col-sm-3">
                          <button type="button" class="btn text-white btn-lg" style="width: 250px; height: 60px;background-color: #55acee;">Table 02</button>
                        </div>
                        <div class="col-sm-3">
                          <button type="button" class="btn text-white btn-lg" style="width: 250px; height: 60px;background-color: #55acee;">Table 03</button>
                        </div>
                        <div class="col-sm-3">
                          <button type="button" class="btn text-white btn-lg" style="width: 250px; height: 60px;background-color: #55acee;">Table 04</button>
                        </div>
                    </div>

                    <!-- Button seconde line  start***************************************************************** -->


                    <div class="row" style="margin-left:x; margin-top:40px;;">
                      <div class="col-sm-3">
                          <button type="button" class="btn text-white btn-lg" style="width: 250px; height: 60px;background-color: #55acee;">Table 05</button>
                      </div>
                      <div class="col-sm-3">
                        <button type="button" class="btn text-white btn-lg" style="width: 250px; height: 60px;background-color: #55acee;">Table 06</button>
                      </div>
                      <div class="col-sm-3">
                        <button type="button" class="btn text-white btn-lg" style="width: 250px; height: 60px;background-color: #55acee;">Table 07</button>
                      </div>
                      <div class="col-sm-3">
                        <button type="button" class="btn btn-success btn-lg" style="width: 250px; height: 60px;">Takerway </button>
                      </div>
                  </div>

                  <!--  Earning buttun strat ******************************************** -->


                  <div class="row" style="margin-left:x; margin-top:40px;;">
                    <div class="col-sm-3">
                      <!-- Empty Grid -->
                    </div>

                    <div class="col-sm-6">
                      <button type="button" class="btn btn-outline-danger btn-lg" style="width: 350px; height: 60px; margin-left:80px;">Total Earning</button>
                    </div>

                    <div class="col-sm-3">
                     <!-- Empty Grid -->
                    </div>
                   
                </div>

                  
      </div>
      <footer class="footer" style="margin-top:50px;">
        <div class="container">
          <span class="text-muted" style="margin-left: 465px;">© 2023 Alankulama casserole</span>
        </div>
      </footer>
      
      
      
</body>
</html>