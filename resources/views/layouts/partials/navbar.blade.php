<div class="header-background">
        <div id="nav" class="sticky-nav">
            <nav class="navbar navbar-expand-lg ">
  <div class="container">
    <a class="navbar-brand" href="index.html"><img src="{{url('/images/loo.png')}}"style="color:blue ; width: 200px;"></a>
    
      @auth
        {{auth()->user()->name}}
        <div class="text-end">
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-warning">Logout</a>
        </div>
      @endauth
      @guest
        <div class="text-end">
          <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
          <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
        </div>
      @endguest
    </div>
  </div>
</nav>