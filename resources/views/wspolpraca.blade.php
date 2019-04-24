@extends('layouts.app')

@section('title')
Współpraca &raquo;
@endsection

@section('content')


<div class="bg-light">
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-white mx-auto">
    <div class="col-md-7 p-lg-5 mx-auto my-5 overflow-hidden text-center">
      <h1 class="display-4 font-weight-normal">Współpraca z Miody Wigor</h1>
      <p class="card-text lead">Dowiedz się dlaczego warto!</p>
    </div>
    <img class="card-img-bottom card-product mx-auto" src="pic/m04.jpg" alt="Miody">
  </div>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-white mx-auto">
  <div class="col-md-7 p-lg-5 mx-auto my-5 overflow-hidden text-center">
    <h1 class="display-4 font-weight-normal">Miody z dodatkami</h1>
    <p class="card-text lead">Definiujemy smak miodów na nowo.</p>
    <a class="l" href="#form">Pobierz ofertę &raquo;</a>
  </div>
  <img class="card-img-bottom mx-auto card-product contain" src="pic/m06.jpg" alt="Miody">
</div>





  <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 bg-light">
  <div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
    <div class="my-3 p-3">
      <h2 class="display-5">Uwielbiane przez dzieci</h2>
      <p class="lead">Zachwycają barwą smaku.</p>
      <a class="l" href="#form">Pobierz ofertę &raquo;</a>
    </div>
    <img class="card-img-bottom card-product mx-auto" src="pic/hiRes/m07.jpg" alt="Card image cap">
  </div>
  <div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
    <div class="my-3 py-3">
      <h2 class="display-5">Mocno podkręcone.</h2>
      <p class="lead">Więcej smaków. Więcej kolorów.</p>
      <a class="l" href="#form">Pobierz ofertę &raquo;</a>
    </div>
    <img class="card-img-bottom card-product mx-auto" src="pic/hiRes/m09.jpg" alt="Card image cap">
  </div>
</div>


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-white">
  <div class="col-md-7 p-lg-5 mx-auto my-5 ">
    <h1 class="display-4 font-weight-normal">Miody odmianowe</h1>
    <p class="card-text lead">Dobrze znane a jednocześnie coraz lepsze.</p>
    <a class="l" href="#form">Pobierz ofertę &raquo;</a>
  </div>
  <img class="card-img-bottom card-product mx-auto contain" src="pic/m06.jpg" alt="Miody" >
</div>



<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 bg-light">
  <div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
    <div class="my-3 p-3">
      <h2 class="display-5">Idealny składnik twoich potraw</h2>
      <p class="lead">Na codzień w twojej kuchni.</p>
      <a class="l" href="#form">Pobierz ofertę &raquo;</a>
    </div>
    <img class="card-img-bottom card-product mx-auto" src="pic/hiRes/m10.jpg" alt="Card image cap">
  </div>
  <div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
    <div class="my-3 py-3">
      <h2 class="display-5">Jakość to zdrowie.</h2>
      <p class="lead">Wszystko czego potrzebujesz.</p>
      <a class="l" href="#form">Pobierz ofertę &raquo;</a>
    </div>
    <img class="card-img-bottom card-product mx-auto" src="pic/hiRes/m13.jpg" alt="Card image cap">
   
  </div>
</div>


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-white">
  <div class="col-md-7 p-lg-5 mx-auto my-5 ">
    <h1 class="display-4 font-weight-normal">Każdy znajdzie miód dla siebie.</h1><br>
    <a class="l" href="#form">Pobierz ofertę &raquo;</a>
  </div>
</div>  





  
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-white">
  <div class="container marketing">


        <div class="row featurette">
          <div class="col-md-1 d-flex align-items-center">
            
          </div>
          <div class="col-md-10 text-left">
            <form action="{{ route('ofertaSend') }}" role="form" method="post" id="form">
              {{ csrf_field() }}  
              <div class="form-group">
                <h2 class="featurette-heading">Jesteś zainteresowany współpracą?</h2>
                <p class="lead">Wypełnij i wyślij poniższy formularz aby otrzymać ofertę!</p>
                <input type="email" name="email" class="form-control form-control" placeholder="wpisz e-mail" required>
              </div>
              <div class="form-group">
                <input type="text" name="name" class="form-control form-control" placeholder="wpisz swoje imię" required>
              </div>
              <button type="submit" class="btn btn-sm btn-outline-secondary">Wyślij</button>
            </form> 
          </div>
        </div>
        <div class="col-md-1"></div>
      </div><!-- /.container -->
</div>
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-white">
  
</div>

</div>





  @endsection