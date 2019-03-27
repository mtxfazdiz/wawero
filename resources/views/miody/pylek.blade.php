@extends('layouts.app')


@section('title')
Nasza oferta &raquo;
@endsection

@section('content')







<div class="container marketing">


  <div class="row paddTop15"></div> <!-- pyłek kwiatowy -->
  <div class="row featurette">
    <div class="col-md-1"></div>
    <div class="col-md-5">
      <div class="card text-center border-white d-flex align-items-center">
        <div class="card-header bg-white border-white">
          <ul class="nav  card-header-pills border-white">
            <li class="nav-item active">
              <a class="nav-link" data-toggle="tab" role="tab" href="#pylek_kwiatowy_sredni">Średni</a>
            </li>
          </ul>
        </div>

        <div class="card-body tab-content" >
          
          <div role="tabpanel" class="tab-pane active" id="pylek_kwiatowy_sredni">
            <div class="card border-white" style="width: 200px;">
              <img class="card-img-top" src="../pic/sredni_pylek_kwiatowy.jpg" alt="Card image cap">
              <ul class="list-group list-group-flush border-white">
                <li class="list-group-item border-white">Waga: 200 g </li>
                <li class="list-group-item border-white"><b>Cena 25 zł</b></li>
              </ul>
            </div>
          </div>
        </div>
      </div>  

    </div>
    <div class="col-md-5 d-flex align-items-center">
      <span>
        <h2>Pyłek kwiatowy</h2>
        <p class="lead">Pyłek kwiatowy jest tak zwaną bombą witaminową. Uzupełnia dzienne racje żywnościowe w aminokwasy, biopierwiastki, witaminy. Wzmacnia apetyt, reguluje przemianę materii, wzmacnia organizm. Podnosi odporność organizmu oraz działa przeciwmiażdżycowo.
        </p>  
      </span>
    </div>
    <div class="col-md-1"></div>
  </div>
  <hr class="featurette-divider">
</div> <!-- pylek kwiatowy end -->


@endsection