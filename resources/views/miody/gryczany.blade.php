@extends('layouts.app')


@section('title')
Nasza oferta &raquo;
@endsection

@section('content')







  <div class="container marketing">


  <div class="row paddTop15"></div> <!-- gryczany -->
  <div class="row featurette">
    <div class="col-md-1"></div>
    <div class="col-md-5">
      <div class="card text-center border-white d-flex align-items-center">
        <div class="card-header bg-white border-white">
          <ul class="nav  card-header-pills border-white">
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" role="tab" href="#gryczany_maly">Mały</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" data-toggle="tab" role="tab" href="#gryczany_sredni">Średni</a>
            </li>
          </ul>
        </div>

        <div class="card-body tab-content" >
          <div role="tabpanel" class="tab-pane" id="gryczany_maly">
            <div class="card border-white" style="width: 200px;">
              <img class="card-img-top" src="../pic/maly_gryczany.jpg" alt="Card image cap">
              <ul class="list-group list-group-flush">
                <li class="list-group-item border-white">Waga: 250 g </li>
                <li class="list-group-item border-white"><b>Cena: 19 zł</b></li>
              </ul>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane active" id="gryczany_sredni">
            <div class="card border-white" style="width: 200px;">
              <img class="card-img-top" src="../pic/sredni_gryczany.jpg" alt="Card image cap">
              <ul class="list-group list-group-flush border-white">
                <li class="list-group-item border-white">Waga: 400 g </li>
                <li class="list-group-item border-white"><b>Cena: 26 zł</b></li>
              </ul>
            </div>
          </div>
        </div>
      </div>  

    </div>
    <div class="col-md-5 d-flex align-items-center">
      <span>
        <h2>Miód gryczany</h2>
        <p class="lead">Miód gryczany zwany "przedłużaczem życia", pomaga przy przyswajaniu witaminy C, reguluje przepustowość ścianek włosowatych naczyń krwionośnych, tym samym przeciwdziała miażdżycy. Zalecany w nerwicach i stanach wyczerpania psychicznego. Reguluje rytm pracy serca.</p>  
      </span>
    </div>
    <div class="col-md-1"></div>
  </div>
  <hr class="featurette-divider">
</div> <!-- gryczany end -->

@endsection