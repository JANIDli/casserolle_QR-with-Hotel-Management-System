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
      .header h3{
        text-align: center;
      }
    </style>
</head>
<body>
  
    

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
                        @foreach($finishOrders as $finishOrder)
                            @if($finishOrder->table_number == 1)
                                <button type="button" class="btn text-white btn-lg" style="width: 250px; height: 60px;background-color: #55acee;" data-toggle="modal" data-target="#table{{ $finishOrder->table_number }}">Table {{ $finishOrder->table_number }}</button>
                            
                                <!-- Modal -->
                                <div class="modal fade" id="table{{ $finishOrder->table_number }}" tabindex="-1" role="dialog" aria-labelledby="table{{ $finishOrder->table_number }}Label" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="table{{ $finishOrder->table_number }}Label">Table {{ $finishOrder->table_number }} Order Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Customer Name:</p>
                                                <p>Dish Name:{{$finishOrder->cart_items}}</p>
                                                <p>Total Amount: ${{ $finishOrder->total }}</p>
                                                <button type="button" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('complete-order-form-{{ $finishOrder->id }}').submit();">Finish Order</button>
                                                <form id="complete-order-form-{{ $finishOrder->id }}" action="{{ route('finish-orders.delete', ['id' => $finishOrder->id]) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    
                    <div class="col-sm-3">
                      @foreach($finishOrders as $finishOrder)
                          @if($finishOrder->table_number == 2)
                              <button type="button" class="btn text-white btn-lg" style="width: 250px; height: 60px;background-color: #55acee;" data-toggle="modal" data-target="#table{{ $finishOrder->table_number }}">Table {{ $finishOrder->table_number }}</button>
                          
                              <!-- Modal -->
                              <div class="modal fade" id="table{{ $finishOrder->table_number }}" tabindex="-1" role="dialog" aria-labelledby="table{{ $finishOrder->table_number }}Label" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="table{{ $finishOrder->table_number }}Label">Table {{ $finishOrder->table_number }} Order Details</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                              <p>Customer Name:</p>
                                              <p>Total Amount: ${{ $finishOrder->total }}</p>
                                              <button type="button" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('complete-order-form-{{ $finishOrder->id }}').submit();">Complete Order</button>
                                              <form id="complete-order-form-{{ $finishOrder->id }}" action="{{ route('finish-orders.delete', ['id' => $finishOrder->id]) }}" method="POST" style="display: none;">
                                                  @csrf
                                                  @method('DELETE')
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          @endif
                      @endforeach
                  </div>
                  
                  <div class="col-sm-3">
                    @foreach($finishOrders as $finishOrder)
                        @if($finishOrder->table_number == 3)
                            <button type="button" class="btn text-white btn-lg" style="width: 250px; height: 60px;background-color: #55acee;" data-toggle="modal" data-target="#table{{ $finishOrder->table_number }}">Table {{ $finishOrder->table_number }}</button>
                        
                            <!-- Modal -->
                            <div class="modal fade" id="table{{ $finishOrder->table_number }}" tabindex="-1" role="dialog" aria-labelledby="table{{ $finishOrder->table_number }}Label" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="table{{ $finishOrder->table_number }}Label">Table {{ $finishOrder->table_number }} Order Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Customer Name:</p>
                                            <p>Total Amount: ${{ $finishOrder->total }}</p>
                                            <button type="button" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('complete-order-form-{{ $finishOrder->id }}').submit();">Complete Order</button>
                                            <form id="complete-order-form-{{ $finishOrder->id }}" action="{{ route('finish-orders.delete', ['id' => $finishOrder->id]) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                
                <div class="col-sm-3">
                  @foreach($finishOrders as $finishOrder)
                      @if($finishOrder->table_number == 1)
                          <button type="button" class="btn text-white btn-lg" style="width: 250px; height: 60px;background-color: #55acee;" data-toggle="modal" data-target="#table{{ $finishOrder->table_number }}">Table {{ $finishOrder->table_number }}</button>
                      
                          <!-- Modal -->
                          <div class="modal fade" id="table{{ $finishOrder->table_number }}" tabindex="-1" role="dialog" aria-labelledby="table{{ $finishOrder->table_number }}Label" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="table{{ $finishOrder->table_number }}Label">Table {{ $finishOrder->table_number }} Order Details</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                          <p>Customer Name:</p>
                                          <p>Total Amount: ${{ $finishOrder->total }}</p>
                                          <button type="button" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('complete-order-form-{{ $finishOrder->id }}').submit();">Complete Order</button>
                                          <form id="complete-order-form-{{ $finishOrder->id }}" action="{{ route('finish-orders.delete', ['id' => $finishOrder->id]) }}" method="POST" style="display: none;">
                                              @csrf
                                              @method('DELETE')
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @endif
                  @endforeach
              </div>
              
            </div>
            

                    <div class="row" style="margin-left:x; margin-top:40px;;">
                      <div class="col-sm-3">
                        @foreach($finishOrders as $finishOrder)
                            @if($finishOrder->table_number == 5)
                                <button type="button" class="btn text-white btn-lg" style="width: 250px; height: 60px;background-color: #55acee;" data-toggle="modal" data-target="#table{{ $finishOrder->table_number }}">Table {{ $finishOrder->table_number }}</button>
                            
                                <!-- Modal -->
                                <div class="modal fade" id="table{{ $finishOrder->table_number }}" tabindex="-1" role="dialog" aria-labelledby="table{{ $finishOrder->table_number }}Label" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="table{{ $finishOrder->table_number }}Label">Table {{ $finishOrder->table_number }} Order Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Customer Name:</p>
                                                <p>Total Amount: ${{ $finishOrder->total }}</p>
                                                <button type="button" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('complete-order-form-{{ $finishOrder->id }}').submit();">Complete Order</button>
                                                <form id="complete-order-form-{{ $finishOrder->id }}" action="{{ route('finish-orders.delete', ['id' => $finishOrder->id]) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    
                    <div class="col-sm-3">
                      @foreach($finishOrders as $finishOrder)
                          @if($finishOrder->table_number == 6)
                              <button type="button" class="btn text-white btn-lg" style="width: 250px; height: 60px;background-color: #55acee;" data-toggle="modal" data-target="#table{{ $finishOrder->table_number }}">Table {{ $finishOrder->table_number }}</button>
                          
                              <!-- Modal -->
                              <div class="modal fade" id="table{{ $finishOrder->table_number }}" tabindex="-1" role="dialog" aria-labelledby="table{{ $finishOrder->table_number }}Label" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="table{{ $finishOrder->table_number }}Label">Table {{ $finishOrder->table_number }} Order Details</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                              <p>Customer Name:</p>
                                              <p>Total Amount: ${{ $finishOrder->total }}</p>
                                              <button type="button" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('complete-order-form-{{ $finishOrder->id }}').submit();">Complete Order</button>
                                              <form id="complete-order-form-{{ $finishOrder->id }}" action="{{ route('finish-orders.delete', ['id' => $finishOrder->id]) }}" method="POST" style="display: none;">
                                                  @csrf
                                                  @method('DELETE')
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          @endif
                      @endforeach
                  </div>
                  
                  <div class="col-sm-3">
                    @foreach($finishOrders as $finishOrder)
                        @if($finishOrder->table_number == 7)
                            <button type="button" class="btn text-white btn-lg" style="width: 250px; height: 60px;background-color: #55acee;" data-toggle="modal" data-target="#table{{ $finishOrder->table_number }}">Table {{ $finishOrder->table_number }}</button>
                        
                            <!-- Modal -->
                            <div class="modal fade" id="table{{ $finishOrder->table_number }}" tabindex="-1" role="dialog" aria-labelledby="table{{ $finishOrder->table_number }}Label" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="table{{ $finishOrder->table_number }}Label">Table {{ $finishOrder->table_number }} Order Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Customer Name:</p>
                                            <p>Total Amount: ${{ $finishOrder->total }}</p>
                                            <button type="button" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('complete-order-form-{{ $finishOrder->id }}').submit();">Complete Order</button>
                                            <form id="complete-order-form-{{ $finishOrder->id }}" action="{{ route('finish-orders.delete', ['id' => $finishOrder->id]) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                
                <div class="col-sm-3">
                  @foreach($finishOrders as $finishOrder)
                      @if($finishOrder->table_number == 0)
                          <button type="button" class="btn text-white btn-lg" style="width: 250px; height: 60px;background-color: #55acee;" data-toggle="modal" data-target="#table{{ $finishOrder->table_number }}">Table {{ $finishOrder->table_number }}</button>
                      
                          <!-- Modal -->
                          <div class="modal fade" id="table{{ $finishOrder->table_number }}" tabindex="-1" role="dialog" aria-labelledby="table{{ $finishOrder->table_number }}Label" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="table{{ $finishOrder->table_number }}Label">Table {{ $finishOrder->table_number }} Order Details</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                          <p>Customer Name:</p>
                                          <p>Total Amount: ${{ $finishOrder->total }}</p>
                                          <button type="button" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('complete-order-form-{{ $finishOrder->id }}').submit();">Complete Order</button>
                                          <form id="complete-order-form-{{ $finishOrder->id }}" action="{{ route('finish-orders.delete', ['id' => $finishOrder->id]) }}" method="POST" style="display: none;">
                                              @csrf
                                              @method('DELETE')
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @endif
                  @endforeach
              </div>

               <div class="col-sm-3">
                  @foreach($finishOrders as $finishOrder)
                      @if($finishOrder->table_number == 0)
                          <button type="button" class="btn text-white btn-lg" style="width: 250px; height: 60px;background-color: #55acee;" data-toggle="modal" data-target="#table{{ $finishOrder->table_number }}">Table {{ $finishOrder->table_number }}</button>
                      
                          <!-- Modal -->
                          <div class="modal fade" id="table{{ $finishOrder->table_number }}" tabindex="-1" role="dialog" aria-labelledby="table{{ $finishOrder->table_number }}Label" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="table{{ $finishOrder->table_number }}Label">Table {{ $finishOrder->table_number }} Order Details</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                          <p>Customer Name:</p>
                                          <p>Total Amount: ${{ $finishOrder->total }}</p>
                                          <button type="button" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('complete-order-form-{{ $finishOrder->id }}').submit();">Complete Order</button>
                                          <form id="complete-order-form-{{ $finishOrder->id }}" action="{{ route('finish-orders.delete', ['id' => $finishOrder->id]) }}" method="POST" style="display: none;">
                                              @csrf
                                              @method('DELETE')
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @endif
                  @endforeach
              </div>

              
          `</div>
          
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
<br>
<br>
<br>
<div class="header">
  <h3 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif" >Takeaway Order</h3>
</div>
      <div class="container-fluid text-center">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Food</th>
                    <th scope="col">total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($finishOrders as $finishOrders)
                <tr>
                    <td>{{ $finishOrders->id }}</td>
                    <td>{{ $finishOrders->comment }}</td>
                    <td>{{ $finishOrders->cart_items }}</td>
                    <td>{{ $finishOrders->total }}</td>
                  <td> <button type="button" class="btn btn-success" onclick="event.preventDefault(); document.getElementById('complete-order-form-{{ $finishOrder->id }}').submit();">Complete Order</button>
                    <form id="complete-order-form-{{ $finishOrder->id }}" action="{{ route('finish-orders.delete', ['id' => $finishOrder->id]) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form></td>
                   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
      <footer class="footer" style="margin-top:50px;">
        <div class="container">
          <span class="text-muted" style="margin-left: 465px;">© 2023 Alankulama casserole</span>
        </div>
      </footer>
      
      <script>
  function displayPopup(customerName, totalAmount) {
    var popup = window.open('', 'popup', 'width=300,height=200');
    popup.document.write('<h2>Customer Name: ' + customerName + '</h2>');
    popup.document.write('<h2>Total Amount: ' + totalAmount + '</h2>');
    popup.focus();
  }
</script>
      
</body>
</html>