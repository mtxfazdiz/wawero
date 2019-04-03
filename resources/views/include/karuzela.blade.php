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