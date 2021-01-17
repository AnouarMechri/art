<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E-comerce @yield('title')</title>

  <!-- Bootstrap core CSS -->
  
  <link href={{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }} rel={{"stylesheet"}}>

  <!-- Custom styles for this template -->
  <link href={{ URL::asset('css/shop-homepage.css') }} rel={{"stylesheet"}}>
  <link href={{ URL::asset('css/parsley.css') }} rel={{"stylesheet"}}>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
    <a class="navbar-brand" href="index">
          <img src="coursel/logo.png" alt="" height="50px">
        </a>
      @if (Auth::check())
      <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        {{ Auth::user()->name }}
        </button>
        <div class="dropdown-menu">
          <h5 class="dropdown-header">My Account</h5>
          <a class="dropdown-item" href="/user/{{ Auth::user()->name }}">Profile</a>
          <a class="dropdown-item" href="/user/{{ Auth::user()->name }}/posts">My posts</a>
          <h5 class="dropdown-header">Connexion</h5>
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </div>
      </div>
      @else
      <a href="{{ route('register') }}" class="btn btn-primary">CREE COMPTE</a>
      @endif
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
         @if (Auth::check())
          <li class="nav-item {{ Request::is('index') ? "active" : ""}}">
            <a class="nav-link" href="/index">Home

            </a>
          </li>
          <li class="nav-item {{ Request::is('') ? "active" : ""}}">
            <a href="/Shopping-cart" class="nav-link">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>

              My Char
              <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty: ''}}</span>
            
            </a>

          </li>
         @endif
          <li class="nav-item {{ Request::is('about') ? "active" : ""}}">
            <a class="nav-link" href="about">About</a>

          </li>
          <li class="nav-item {{ Request::is('services') ? "active" : ""}}">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item {{ Request::is('contact') ? "active" : ""}}">
            <a class="nav-link" href="contact">Contact</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>