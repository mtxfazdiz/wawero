@extends('layouts.app')


@section('title')
Nasza oferta &raquo;
@endsection

@section('content')







<div class="container marketing">


  <div class="row paddTop50"></div> <!-- propolis -->
  <div class="row featurette">
    <div class="col-md-1"></div>
    <div class="col-md-5">
      <div class="card text-center border-white d-flex align-items-center">
        <div class="card-header bg-white border-white">
          <ul class="nav  card-header-pills border-white">
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" role="tab" href="#propolis_maly">Mały</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" data-toggle="tab" role="tab" href="#propolis_sredni">Średni</a>
            </li>
          </ul>
        </div>

        <div class="card-body tab-content" >
          <div role="tabpanel" class="tab-pane" id="propolis_maly">
            <div class="card border-white" style="width: 400px;">
              <img class="card-img-top" src="../pic/kw/KwadratMalyPropolis.jpg" alt="Card image cap">
              <ul class="list-group list-group-flush">
                <li class="list-group-item border-white">Waga: 250 g </li>
                <li class="list-group-item border-white"><b>Cena: 21 zł</b></li>
              </ul>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane active" id="propolis_sredni">
            <div class="card border-white" style="width: 400px;">
              <img class="card-img-top" src="../pic/kw/KwadratSredniPropolis.jpg" alt="Card image cap">
              <ul class="list-group list-group-flush border-white">
                <li class="list-group-item border-white">Waga: 400 g </li>
                <li class="list-group-item border-white"><b>Cena 29 zł</b></li>
              </ul>
            </div>
          </div>
        </div>
      </div>  

    </div>
    <div class="col-md-5 d-flex align-items-center">
      <span>
        <h2>Miód z propolisem</h2>
        <p class="lead">Miód z propolisem działa wzmacniająco, odtruwająco oraz pomaga w leczeniu wątroby. Dzięki swoim właściwościom przeciwzapalnym stosowany jest w stanach zapalnych górnych i dolnych dróg oddechowych. Ma silne działanie przeciwbakteryjne i przeciwgrzybiczne.</p>  
      </span>
    </div>
    <div class="col-md-1"></div>
  </div>
  <hr class="featurette-divider">
</div> <!-- z propolisem end -->

@endsection