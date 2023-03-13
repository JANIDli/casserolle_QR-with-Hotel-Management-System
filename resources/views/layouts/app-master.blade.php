<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Fixed top navbar example · Bootstrap v5.1</title>

    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! url('assets/bootstrap/css/style.css') !!}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">



    <style>
        @import url('https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Nerko+One&display=swap');

       body{
        padding-top:auto;
        background: url("images/7.jpg");
        background-repeat: no-repeat;
       background-attachment: fixed;
       background-size: cover;
      }
    
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
    
</head>
<body>
    
    @include('layouts.partials.navbar')

    <main class="j">
        @yield('content')
    </main>

    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
      
  </body>
</html>