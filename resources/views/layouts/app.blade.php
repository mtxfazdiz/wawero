<!doctype html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" href="pic/favicon.png">

  <title>@yield('title') {{config('app.name')}} </title>

  <!-- Bootstrap core CSS -->

  <link href="{{ url('/') }}/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="{{ url('/') }}/css/carousel.css" rel="stylesheet">
  <link href="{{ url('/') }}/css/product.css" rel="stylesheet">
  <link href="{{ url('/') }}/css/styl.css" rel="stylesheet">



  <!-- Custom styles for this template -->


</head>
<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light" id="myNavbar">
      <div id="myLogo" class="container">
        <a class="navbar-left" href="{{ url('/') }}">
          <img class="logo" src="{{ url('/') }}/pic/logo_c.svg">  
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"  aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
         <ul class="navbar-nav mr-auto pl-5">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/jak') }}">Jak kupić? <span class="sr-only">(current)</span></a>  
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/produkt') }}">Nasza oferta <span class="sr-only">(current)</span></a>  
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/wspolpraca') }}">Współpraca <span class="sr-only">(current)</span></a>  
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/onas') }}">O nas <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/kontakt') }}">Kontakt <span class="sr-only">(current)</span></a>
          </li>
        </ul> 
      </div>
    </div>

  </nav> 

</header>

<main role="main">

  @yield('karuzela')


  @if ($errors->any())
  <div class="container marketing">
    <div class="row paddTop100"></div>

    @foreach ($errors->all() as $error)
    <div class="row">
      <div class="alert alert-danger alert-dismissible fade show col-md-12" align="center" role="alert">
        <div class="">{{ $error }}</div>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>   
    @endforeach
  </div>


  @endif

















  @yield('content')




  <!-- FOOTER -->
  <footer class="container">
    @include('newsletter.index')

    <p></p>
    <!-- <p class="float-right"><a href="#">Do góry</a></p> -->
    <p>&copy; <?php echo date("Y"); ?> &middot; Miody Wigor </p>
  </footer>


</main>


<!-- COOKIES -->
<div class="alert alert-dismissible text-center cookiealert" role="alert">
  <div class="cookiealert-container">
    <b>Ciasteczka najlepiej smakują z miodem!</b> &#x1F36A; Zgadzasz się na użycie plików "cookies"? <a href="https://pl.wikipedia.org/wiki/HTTP_cookie" target="_blank">Sprawdź o co chodzi</a>

    <button type="button" class="btn btn-outline-primary btn-sm acceptcookies" aria-label="Close">
      Ok, zgadzam się
    </button>
  </div>
</div>
<!-- /COOKIES -->

    <script src="{{ url('/') }}/js/cookiealert-standalone.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    @yield('face')
  </body>
</html>


