@extends('layouts.app')

  @section('title')
  Nasza oferta &raquo;
  @endsection



@section('content')
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-7 p-lg-5 mx-auto my-5 ">
    <h1 class="display-4 font-weight-normal">Miody z dodatkami</h1>
    <p class="card-text lead">Definiujemy smak miodów na nowo.</p>
    <a class="btn btn-outline-secondary" href="#">Sprawdź naszą ofertę</a>
  </div>
  <img class="featurette-image img-fluid mx-auto" src="pic/3miodyProd.png" alt="Miody">
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5">Uwielbiane przez dzieci</h2>
      <p class="lead">Zachwycają świerzością.</p>
      <a class="btn btn-outline-secondary" href="#">Sprawdź naszą ofertę</a>
    </div>
    <img class="featurette-image img-fluid mx-auto ramka" src="pic/ns.png" alt="Miody" style="height: 200px;">
    <!-- <div class="bg-white box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div> -->
  </div>
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">Zupełnie nowe oblicze</h2>
      <p class="lead">Malina, cynamon a może orzech włoski?<br> To tylko niektóre z naszych propozycji!</p>
      
    </div>
    <img class="featurette-image img-fluid mx-auto" src="pic/ns.png" alt="Miody" style="height: 200px;">
  </div>
</div>



<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-7 p-lg-5 mx-auto my-5 ">
    <h1 class="display-4 font-weight-normal">Miody odmianowe</h1>
    <p class="card-text lead">Dobrze znane a jednocześnie coraz lepsze.</p>
    <a class="btn btn-outline-secondary" href="#">Sprawdź naszą ofertę</a>
  </div>
  <!-- <div class="product-device box-shadow d-none d-md-block"></div> -->
  <img class="featurette-image img-fluid mx-auto" src="pic/3miodyProd.png" alt="Miody" >
  <!-- <div class="product-device product-device-2 box-shadow d-none d-md-block"></div> -->
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5">Idealny składnik twoich potraw</h2>
      <p class="lead">Na codzień w twojej kuchni.</p>
    </div>
    <img class="featurette-image img-fluid mx-auto" src="pic/ns.png" alt="Miody" style="height: 300px; border-radius: 21px 21px 0 0;">
    <!-- <div class="bg-white box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div> -->
  </div>
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">Another headline</h2>
      <p class="lead">And an even wittier subheading.</p>
    </div>
    <img class="featurette-image img-fluid mx-auto" src="pic/ns.png" alt="Miody" style="height: 300px; border-radius: 21px 21px 0 0;">
  </div>
</div>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center ">
  <div class="col-md-7 p-lg-5 mx-auto my-5 ">
    <h1 class="display-4 font-weight-normal">Każdy znajdzie miód dla siebie.</h1><br>
    <a class="btn btn-outline-secondary" href="#">Sprawdź naszą ofertę</a>
  </div>
</div>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <img class="featurette-image img-fluid mx-auto" src="pic/3miodyProd.png" alt="Miody" >
</div>
<div class="row paddTop100"></div>


@endsection