@extends('layouts.app')


@section('title')
Nasza oferta &raquo;
@endsection

@section('content')







<div class="container marketing">


<div class="row paddTop50"></div> <!-- nektarowo-spadziowy -->
    <div class="row featurette">
      <div class="col-md-1"></div>
        <div class="col-md-5">
          <div class="card text-center border-white d-flex align-items-center">
            <div class="card-header bg-white border-white">
              <ul class="nav  card-header-pills border-white">
                  <li class="nav-item active">
                    <a class="nav-link" data-toggle="tab" role="tab" href="#nektar_sredni">Średni</a>
                  </li>
              </ul>
            </div>

            <div class="card-body tab-content" >
              
              <div role="tabpanel" class="tab-pane active" id="nektar_sredni">
                <div class="card border-white" style="width: 400px;">
                  <img class="card-img-top" src="../pic/k/KwadratSredniNektarSpadz.jpg" alt="Card image cap">
                  <ul class="list-group list-group-flush border-white">
                    <li class="list-group-item border-white">Waga: 400 g </li>
                    <li class="list-group-item border-white"><b>Cena 24 zł</b></li>
                  </ul>
              </div>
              </div>
          </div>
      </div>  

        </div>
        <div class="col-md-5 d-flex align-items-center">
          <span>
            <h2>Miód nektarowo - spadziowy</h2>
              <p class="lead">Miód nektarowo - spadziowy jest stosowany w schorzeniach serca, układu krążenia, leczeniu dróg oddechowych, zaburzeniach trawienia i stanach zapalnych organizmu. Jest to produkt odrzywczy i odnawiający w stanach wyczerpania fizycznego i psychicznego organizmu.
              </p>  
          </span>
      </div>
    <div class="col-md-1"></div>
  </div> <!-- nektar-spadz end -->

  <hr class="featurette-divider">
</div>

@endsection