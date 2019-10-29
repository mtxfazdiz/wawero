@extends('layouts.app')

  @section('title')
  Nasza oferta &raquo;
  @endsection



@section('content')



<div class="bg-light">
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-white mx-auto">
  <div class="col-md-7 p-lg-5 mx-auto my-5 overflow-hidden text-center">
    <h1 class="display-4 font-weight-normal">Miody z dodatkami</h1>
    <p class="card-text lead">Definiujemy smak miodów na nowo</p>
    <a class="l" href="{{ url('/naszaoferta#dodatki') }}">Sprawdź naszą ofertę &raquo;</a>
  </div>
  <img class="card-img-bottom mx-auto card-product-30 contain" src="pic/miody/odmianowe.jpg" alt="Miody">
</div>







<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 bg-light">
  <div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
    <div class="my-3 p-3">
      <h2 class="display-5">Uwielbiane przez dzieci</h2>
      <p class="lead">Zachwycają barwą smaku</p>
      <a class="l" href="{{ url('/naszaoferta#dodatki') }}">Kup &raquo;</a>
    </div>
    <?php
      
      echo '<img class="card-img-bottom card-product-full mx-auto" src="pic/hiRes/m0' .rand(1,2). '.jpg" alt="Card image cap">'
    ?>
  </div>
  <div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
    <div class="my-3 py-3">
      <h2 class="display-5">Mocno podkręcone.</h2>
      <p class="lead">Więcej smaków. Więcej kolorów</p>
      <a class="l" href="{{ url('/naszaoferta') }}">Kup &raquo;</a>
    </div>
    <?php
      
      echo '<img class="card-img-bottom card-product-50 mx-auto" src="pic/hiRes/ms0' .rand(1,4). '.jpg" alt="Card image cap">'
    ?>
    
  </div>
</div>




<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-white">
  <div class="col-md-7 p-lg-5 mx-auto my-5">
    <h1 class="display-4 font-weight-normal">Miody odmianowe</h1>
    <p class="card-text lead">Dobrze znane a jednocześnie coraz lepsze</p>
    <a class="l" href="{{ url('/naszaoferta#odmianowe') }}">Sprawdź naszą ofertę &raquo;</a>
  </div>
  <img class="card-img-bottom card-product-30 mx-auto contain" src="pic/miody/odmianowe.jpg" alt="Miody" >
</div>



<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 bg-light">
  <div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
    <div class="my-3 p-3">
      <h2 class="display-5">Idealny składnik twoich potraw</h2>
      <p class="lead">Na codzień w twojej kuchni</p>
      <a class="l" href="{{ url('/naszaoferta#odmianowe') }}">Kup &raquo;</a>
    </div>
    <img class="card-img-bottom card-product-full mx-auto" src="pic/hiRes/m10.jpg" alt="Card image cap">
  </div>
  <div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
    <div class="my-3 py-3">
      <h2 class="display-5">Jakość to zdrowie.</h2>
      <p class="lead">Wszystko czego potrzebujesz</p>
      <a class="l" href="{{ url('/naszaoferta#odmianowe') }}">Kup &raquo;</a>
    </div>
    <img class="card-img-bottom card-product-50 mx-auto" src="pic/hiRes/m13.jpg" alt="Card image cap">
   
  </div>
</div>


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-white">
  <div class="col-md-7 p-lg-5 mx-auto my-5 ">
    <h1 class="display-4 font-weight-normal">Każdy znajdzie miód dla siebie</h1><br>
    <a class="l" href="{{ url('/naszaoferta#odmianowe') }}">Sprawdź naszą ofertę &raquo;</a>
  </div>
</div>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-white">
  <img class="card-img-bottom card-product-50 mx-auto" src="pic/miody/all400.jpg" alt="Miody">
</div>

</div>

@endsection






