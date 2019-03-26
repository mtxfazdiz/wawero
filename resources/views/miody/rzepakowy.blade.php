@extends('layouts.app')


@section('title')
Nasza oferta &raquo;
@endsection

@section('content')







<div class="container marketing">

<div class="row paddTop15"></div> <!-- rzepakowy -->
  <div class="row featurette">
    <div class="col-md-1"></div>
        <div class="col-md-5">
          <div class="card text-center border-white d-flex align-items-center">
            <div class="card-header bg-white border-white">
              <ul class="nav  card-header-pills border-white">
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" role="tab" href="#rzepak_maly">Mały</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" data-toggle="tab" role="tab" href="#rzepak_sredni">Średni</a>
                  </li>
              </ul>
            </div>

            <div class="card-body tab-content" >
              <div role="tabpanel" class="tab-pane" id="rzepak_maly">
                <div class="card border-white" style="width: 200px;">
                  <img class="card-img-top" src="../pic/maly_rzepak.jpg" alt="Card image cap">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item border-white">Waga: 250 g </li>
                    <li class="list-group-item border-white"><b>Cena: 16 zł</b></li>
                  </ul>
              </div>
              </div>
              <div role="tabpanel" class="tab-pane active" id="rzepak_sredni">
                <div class="card border-white" style="width: 200px;">
                  <img class="card-img-top" src="../pic/sredni_rzepak.jpg" alt="Card image cap">
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
              <h2>Miód rzepakowy</h2>
                <p class="lead">Miód rzepakowy posiada wyraźny wpływ leczniczy w chorobach serca, zwłaszcza: wieńcowych (dusznica sercowa) działa leczniczo na niewydolność naczyniową. Cholina w nim zawarta usuwa tłuszcze wątroby i wzmaga działanie pęcherzyka żółciowego. Przyśpiesza leczenie wrzodów trawiennych żołądka i dwunastnicy.</p>  
        </span>
      </div>
      <div class="col-md-1"></div>
  </div> <!-- rzepakowy end -->

</div>

@endsection