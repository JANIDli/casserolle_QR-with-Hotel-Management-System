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
</head>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap');
  
    .container-fluid{
        margin-top: 50px;
    }

    .nav-link{
      color: white;
      font-family: 'Berkshire Swash', cursive;

    }
</style>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark" style="margin-top: -20px; margin-bottom:0px;">
        <a class="navbar-brand" href="#"><img class="logo" src="images/loo.png" width="200px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav" style="margin-left: 300px;">
            <li class="nav-item active">
              <a class="nav-link" href="#" style="color: azure">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#" style="color:white">News</a>
            </li>

            <li class="nav-item" style="margin-left: 450px;">
                <a class="nav-link text-center align-self-center" href="#">
                  <i class="fas fa-user" style="color: white;"></i>
                </a>
              </li>
          </ul>
        </div>
      </nav>

    
    <div class="container-fluid text-center">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Table Number</th>
                    <th scope="col">Food</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Dine in</th>
                    <th scope="col">Takeaway</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->username }}</td>
                    <td>{{ $order->table_number }}</td>
                    <td>{{ $order->cart_items }}</td>
                    <td>{{ $order->comment }}</td>
                    <td>{{ $order->dinein ? 'Dine in' : '' }}</td>
                    <td>{{ $order->takeaway ? 'Takeaway' : '' }}</td>
                    <td>{{ $order->status }}</td>
                    <td>
                      @if ($order->status == 'pending')
                      <form method="POST" action="{{ route('orders.accept', $order->id) }}">
                          @csrf
                          <button type="submit"class="btn btn-success"><i class="fas fa-check"></i>Accept</button>
                      </form>
                  @elseif ($order->status == 'accepted')
                      <form method="POST" action="{{ route('orders.complete', $order->id) }}">
                          @csrf
                          <button type="submit"class="btn btn-danger">Complete</button>
                      </form>
                  @endif
                    </td>
                  
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmIa0RxTxhK7JQphzgU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
