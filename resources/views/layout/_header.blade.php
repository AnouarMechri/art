
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>E-comerce @yield('title')</title>

<!-- Bootstrap core CSS -->
<link href= {{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }} rel={{"stylesheet"}}>

<!-- Custom styles for this template -->
<link href={{ URL::asset('css/shop-homepage.css') }} rel={{"stylesheet"}}>
<link href={{ URL::asset('css/parsley.css') }} rel={{"stylesheet"}} >

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
  <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Account
    </button>
    <div class="dropdown-menu">
      <h5 class="dropdown-header">Dropdown header</h5>
      <a class="dropdown-item" href="#">Link 1</a>
      <a class="dropdown-item" href="#">Link 2</a>
      <a class="dropdown-item" href="#">Link 3</a>
      <h5 class="dropdown-header">Connexion</h5>
      <a class="dropdown-item" href="#">Log out</a>
    </div>
  </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item {{ Request::is('index') ? "active" : ""}}">
          <a class="nav-link" href="/index">Home
          
          </a>
        </li>
        <li class="nav-item {{ Request::is('about') ? "active" : ""}}">
          <a class="nav-link" href="pro">Prouduits</a>
         
        </li>
        <li class="nav-item {{ Request::is('about') ? "active" : ""}}">
          <a class="nav-link" href="about">About</a>
         
        </li>
        <li class="nav-item {{ Request::is('services') ? "active" : ""}}">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li  class="nav-item {{ Request::is('contact') ? "active" : ""}}">
          <a class="nav-link" href="contact">Contact</a>
        </li>
      
      </ul>
    </div>
  </div>
</nav>