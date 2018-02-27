<!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

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
            <img class="logo" src="pic/logo.svg">  
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"  aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
             <ul class="navbar-nav mr-auto pl-5">
              <li class="nav-item">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Nasz miód <span class="sr-only">(current)</span></a>  
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">O nas <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Kontakt <span class="sr-only">(current)</span></a>
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
                <p><a class="btn btn-lg btn-outline-primary" href="#" role="button">Sprawdź!</a></p>
              </div>
            </div>
          </div>
          

          <div class="carousel-item" id="second-slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Miód jest smaczny!</h1>
                <p>Nadaje niepowtarzalny smak potrawom.</p>
                 <p><a class="btn btn-lg btn-outline-primary" href="#" role="button">Sprawdź!</a></p>
              </div>
            </div>
          </div>


          <div class="carousel-item" id="third-slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Miód to naturalne lekarstwo!</h1>
                <p>Zawiera bogaty zestaw witamin oraz makro i mikroelementów.</p>
                <p><a class="btn btn-lg btn-outline-primary" href="#" role="button">Sprawdź!</a></p>
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


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="pic/miod_sample.jpg" alt="Miód" width="140">
            <h2>Miód rzepakowy</h2>
            <p>Miód rzepakowy uznawany jest przez wielu znawców za najlepszy w smaku miód. Wynika to z jego bogatej zawartości. Miód ten jest trudny w produkcji i zarazem bogaty w składniki wszechstronnie poprawiające nasze zdrowie.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Nasza oferta &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="pic/miod_sample.jpg" alt="Miód" width="140">
            <h2>Miód lipowy</h2>
            <p>Miód lipowy uznawany jest przez wielu znawców za najlepszy w smaku miód. Wynika to z jego bogatej zawartości. Miód ten jest trudny w produkcji i zarazem bogaty w składniki wszechstronnie poprawiające nasze zdrowie.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Nasza oferta &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="pic/miod_sample.jpg" alt="Miód" width="140">
            <h2>Miód gryczany</h2>
            <p>Miód gryczany uznawany jest przez wielu znawców za najlepszy w smaku miód. Wynika to z jego bogatej zawartości. Miód ten jest trudny w produkcji i zarazem bogaty w składniki wszechstronnie poprawiające nasze zdrowie.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Nasza oferta &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">100 lat tradycji! <span class="text-muted">Produkujemy miód od 3 pokoleń.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Nasz miód jest rozlewany ręcznie. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </main>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <!-- <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script> -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
  </body>
</html>