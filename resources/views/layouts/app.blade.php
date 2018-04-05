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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/styl.css" rel="stylesheet">
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light" id="myNavbar">
        <div id="myLogo" class="container">
          <a class="navbar-left" href="{{ url('/') }}">
            <img class="logo" src="pic/logo_c.svg">  
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"  aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
             <ul class="navbar-nav mr-auto pl-5">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/naszaoferta') }}">Nasza oferta <span class="sr-only">(current)</span></a>  
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

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        

        <div class="carousel-inner">
          <div class="carousel-item active" id="first-slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Miód jest pożywny!</h1>
                <p>W 80% składa się z cukrów prostych: fruktozy i glukozy.</p>
                <p><a class="btn btn-lg btn-outline-primary" href="{{ url('/naszaoferta') }}" role="button">Nasza oferta</a></p>
              </div>
            </div>
          </div>
          

          <div class="carousel-item" id="second-slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Miód to naturalne lekarstwo!</h1>
                <p>Zawiera bogaty zestaw witamin oraz makro i mikroelementów.</p>
                 <p><a class="btn btn-lg btn-outline-primary" href="{{ url('/naszaoferta') }}" role="button">Nasza oferta</a></p>
              </div>
            </div>
          </div>


          <div class="carousel-item" id="third-slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Miód jest smaczny!</h1>
                <p>Nadaje niepowtarzalny smak potrawom.</p>
                <p><a class="btn btn-lg btn-outline-primary" href="{{ url('/naszaoferta') }}" role="button">Nasza oferta</a></p>
              </div>
            </div>
          </div>
          

          
        </div>
        

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>



        @yield('content')




      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Do góry</a></p>
        <p>&copy; <?php echo date("Y"); ?> &middot; Miody Wigor <!-- &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p> -->
      </footer>

    </main>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>