@extends('layouts.app')


@section('title')
Nasza oferta &raquo;
@endsection

@section('content')







<div class="container marketing">


<div class="row paddTop50"></div> <!-- wielokwiatowy -->
  <div class="row featurette">
    <div class="col-md-1"></div>
        <div class="col-md-5">
          <div class="card text-center border-white d-flex align-items-center">
            <div class="card-header bg-white border-white">
              <ul class="nav  card-header-pills border-white">
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" role="tab" href="#wielokwiat_maly">Mały</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" data-toggle="tab" role="tab" href="#wielokwiat_sredni">Średni</a>
                  </li>
              </ul>
            </div>

            <div class="card-body tab-content" >
              <div role="tabpanel" class="tab-pane" id="wielokwiat_maly">
                <div class="card border-white" style="width: 400px;">
                  <img class="card-img-top" src="../pic/k/KwadratMalyWielokwiat.jpg" alt="Card image cap">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item border-white">Waga: 250 g </li>
                    <li class="list-group-item border-white"><b>Cena: 16 zł</b></li>
                  </ul>
              </div>
              </div>
              <div role="tabpanel" class="tab-pane active" id="wielokwiat_sredni">
                <div class="card border-white" style="width: 400px;">
                  <img class="card-img-top" src="../pic/k/KwadratSredniWielokwiat.jpg" alt="Card image cap">
                  <ul class="list-group list-group-flush border-white">
                    <li class="list-group-item border-white">Waga: 400 g </li>
                    <li class="list-group-item border-white"><b>Cena: 22 zł</b></li>
                  </ul>
              </div>
              </div>
          </div>
      </div>  

        </div>
        <div class="col-md-5 d-flex align-items-center">
          <span>
              <h2>Miód wielokwiatowy</h2>
                <p class="lead">Miód wielokwiatowy znajduje zastosowanie w stanach przeziębienia, wzmacnia organizm przed infekcjami oraz łagodzi objawy alergii i kataru. Wspomaga pracę wątroby, zapobiega chorobom woreczka żółciowego oraz minimalizuje problemy z jelitami. Stosuje się go jako naturalny antybiotyk, hamujący rozwój niepożądanych bakterii.</p>  
        </span>
      </div>
      <div class="col-md-1"></div>
  </div> <!-- wielokwiatowy end -->

  <hr class="featurette-divider">
</div>

@endsection