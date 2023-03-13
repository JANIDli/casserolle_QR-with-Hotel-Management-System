<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>

	<style>
        .logo{
            margin-left:80px;
        }
       
    </style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-top: -20px; hight:10px;">
        <a class="navbar-brand" href="{{url('admin')}}"> <img class="logo" src="images/loo.png" width="200px;"> </a>
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
    <div class="container">
      
            <div class="col-12">
				<div class="pr-4 pl-4 shadow-sm" style="background:#f5fdff;">
					<div class="p-4 shadow-sm mt-4 bg-white">
						<form action="/menu/create" method="POST" enctype="multipart/form-data">
			                @csrf
			                <h5>Add menu</h5>
			                <input type="text" name="name" placeholder="Menu" class="form-control">
							<div class="mt-3">
								<input type="file" name="file">
							</div>
			                <button type=submit class="btn btn-sm btn-primary mt-4">Add</button>
			            </form>
					</div>

					<div class="p-4 shadow-sm mt-4 bg-white">
						<form action="/food/create" method="POST" class="mt-4 mb-4" enctype="multipart/form-data">
		               	 	@csrf
		                    <div>
								<h5>Add food</h5>
							</div>
		                    <div class="mt-3">
								<input class="form-control" type="text" name="name" placeholder="Name">
							</div>
							<div class="mt-3">
								<select name="menu_id" class="form-control">
									@foreach($menus as $menu)
										<option value="{{ $menu->id }}">{{ $menu->name }}</option>
									@endforeach
								</select>
							</div>
		                    <div class="mt-3">
								<textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="Description"></textarea>
							</div>
		                    <div class="mt-3">
								<input class="form-control" type="number" name="price" placeholder="price">
							</div>
		                    <div class="mt-3">
								<input type="file" name="file">
							</div>

		                    <button type="submit" class="btn btn-sm btn-primary mt-4">Add</button>
		            	</form>
					</div>
				</div>
            </div>
        </div>
    </div>
	<footer class="footer" style="margin-top:80px; background:black;">
        <div class="container">
          <span class="" style="margin-left: 465px; color:white; " >© 2023 Alankulama casserole</span>
        </div>
      </footer>

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   

</body>
</html>