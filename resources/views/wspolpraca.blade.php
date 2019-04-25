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
    <img class="card-img-bottom card-product mx-auto contain" src="pic/m06.jpg" alt="Miody" >
  </div>


  <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 bg-light">
  <div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
    <div class="my-3 p-3">
      <h2 class="display-5">Doświadczenie</h2>
      <p class="lead">Zamiłowanie i pasja do pszczół oraz zdobyta<br>wiedza umożliwia nam pozyskiwanie<br>miodów najwyższej jakości.</p>
      <a class="l" href="#form">Pobierz ofertę &raquo;</a>
    </div>
    
  </div>
  <div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
    <div class="my-3 py-3">
      <h2 class="display-5">Wiarygodność</h2>
      <p class="lead">Rodzinna tradycja pszczelarska sięga 1905 roku.<br>Nabytą od tego czasu wiedzę oraz doświadczenie<br>przekazujemy z pokolenia na pokolenie.</p>
      <a class="l" href="#form">Pobierz ofertę &raquo;</a>
    </div>
    
  </div>
</div>


<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 bg-light">
  <div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
    <div class="my-3 p-3">
      <h2 class="display-5">Jakość</h2>
      <p class="lead">Pozyskujemy produkty najwyższej klasy<br>jednocześnie dbając o wysoką jakość<br>świadczonych usług.</p>
      <a class="l" href="#form">Pobierz ofertę &raquo;</a>
    </div>
    
  </div>
  <div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
    <div class="my-3 py-3">
      <h2 class="display-5">Lokalizacja</h2>
      <p class="lead">Nasza pasieka znajduje się na terenie województwa<br> warmińsko - mazurskiego zwanego<br>zielonymi płucami Polski.</p>
      <a class="l" href="#form">Pobierz ofertę &raquo;</a>
    </div>
    
   
  </div>
</div>


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-white">
  <div class="col-md-7 p-lg-5 mx-auto my-5 ">
    <h1 class="display-4 font-weight-normal">Każdy znajdzie miód dla siebie.</h1><br>
    <a class="l" href="#form">Pobierz ofertę &raquo;</a>
  </div>
</div>  





  
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-white" id="form">
  <div class="container marketing">


        <div class="row featurette">
          <div class="col-md-1 d-flex align-items-center">
            
          </div>
          <div class="col-md-10 text-left">
            <form action="{{ route('ofertaSend') }}" role="form" method="post" >
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