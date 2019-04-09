@extends('layouts.app')

  @section('title')
  Nasza oferta &raquo;
  @endsection



@section('content')
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center ">
  <div class="col-md-5 p-lg-5 mx-auto my-5 ">
    <h1 class="display-4 font-weight-normal">Miody z dodatkami</h1>
    <p class="card-text lead">Definiujemy smak miodów na nowo. Malina, cynamon a może orzech włoski? To tylko niektóre z naszych propozycji!</p>
    <a class="btn btn-outline-secondary" href="#">Sprawdź naszą ofertę</a>
  </div>
  <!-- <div class="product-device box-shadow d-none d-md-block"></div> -->
  <img class="featurette-image img-fluid mx-auto" src="pic/3miodyProd.jpg" alt="Miody">
  <!-- <div class="product-device product-device-2 box-shadow d-none d-md-block"></div> -->
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class=" mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5">Uwielbiane przez dzieci</h2>
      <p class="lead">Zachwycają świerzością.</p>
    </div>
    <img class="featurette-image img-fluid mx-auto" src="pic/3miodyProd.jpg" alt="Miody">
    <!-- <div class="bg-white box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div> -->
  </div>
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">Another headline</h2>
      <p class="lead">And an even wittier subheading.</p>
    </div>
    <div class="bg-white box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
  </div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5">Another headline</h2>
      <p class="lead">And an even wittier subheading.</p>
    </div>
    <div class="bg-white box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
  </div>
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">Another headline</h2>
      <p class="lead">And an even wittier subheading.</p>
    </div>
    <div class="bg-white box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
  </div>
</div>

@endsection