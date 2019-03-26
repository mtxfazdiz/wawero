@extends('layouts.app')


@section('title')
Nasza oferta &raquo;
@endsection

@section('content')







<div class="container marketing">


<div class="row paddTop50"></div> <!-- z pyłkiem kwiatowym -->
  <div class="row featurette">
    <div class="col-md-1"></div>
        <div class="col-md-5">
          <div class="card text-center border-white d-flex align-items-center">
            <div class="card-header bg-white border-white">
              <ul class="nav  card-header-pills border-white">
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" role="tab" href="#pylek_maly">Mały</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" data-toggle="tab" role="tab" href="#pylek_sredni">Średni</a>
                  </li>
              </ul>
            </div>

            <div class="card-body tab-content" >
              <div role="tabpanel" class="tab-pane" id="pylek_maly">
                <div class="card border-white" style="width: 400px;">
                  <img class="card-img-top" src="../pic/k/KwadratMalyZPylkiem.jpg" alt="Card image cap">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item border-white">Waga: 250 g </li>
                    <li class="list-group-item border-white"><b>Cena: 21 zł</b></li>
                  </ul>
              </div>
              </div>
              <div role="tabpanel" class="tab-pane active" id="pylek_sredni">
                <div class="card border-white" style="width: 400px;">
                  <img class="card-img-top" src="../pic/k/KwadratSredniZPylkiem.jpg" alt="Card image cap">
                  <ul class="list-group list-group-flush border-white">
                    <li class="list-group-item border-white">Waga: 400 g </li>
                    <li class="list-group-item border-white"><b>Cena: 29 zł</b></li>
                  </ul>
              </div>
              </div>
          </div>
      </div>  

        </div>
        <div class="col-md-5 d-flex align-items-center">
          <span>
              <h2>Miód z pyłkiem kwiatowym</h2>
                <p class="lead">Miód z pyłkiem kwiatowym jest niezwykle cennym źródłem składników odżywczych. Zawiera makro i mikro elementy (wapń, żelazo, magnez). Stanowi bogate źródło witamin B1, B2 oraz witaminy C. Wskazany jest przy leczeniu anemii. Spożywanie go wzmacnia organizm oraz podnosi jego odporność. Zalecany przy leczeniu między innymi dróg żółciowych, miażdżycy, w chorobie wrzodowej żołądka i dwunastnicy. Ma działanie przeciwbakteryjne.</p>  
        </span>
      </div>
      <div class="col-md-1"></div>
  </div> <!-- pylek end -->

  <hr class="featurette-divider">
</div>

@endsection