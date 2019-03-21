@extends('layouts.app')

@section('title')
HOME &raquo;
@endsection

@section('content')





     

<div class="container marketing">


  <div class="card-group">
  <div class="card text-center border-white">
    <img class="card-img-top mx-auto d-block widthCITW" src="{{ url('/') }}/pic/sredni_rzepak.jpg" alt="Card image cap" width="140">
    <div class="card-body">
      <h5 class="card-title">Miód rzepakowy</h5>
      <p class="card-text lead">Posiada wyraźny wpływ leczniczy w chorobach serca, zwłaszcza: wieńcowych (dusznica sercowa) działa leczniczo na niewydolność naczyniową.</p>
    </div>
    <div class="card-footer bg-white border-white">
      <p><a class="btn btn-outline-secondary" href="{{ url('/naszaoferta') }}" role="button">Nasza oferta &raquo;</a></p>
    </div>
  </div>
  <div class="card text-center border-white">
    <img class="card-img-top mx-auto d-block widthCITW" src="{{ url('/') }}/pic/sredni_lipa.jpg" alt="Card image cap" width="140">
    <div class="card-body">
      <h5 class="card-title">Miód lipowy</h5>
      <p class="card-text lead">Działa antyseptycznie i uspokajająco, stosowany w leczeniu chorób układu oddechowego. Wskazany przy zapaleniu oskrzeli i płuc.</p>
    </div>
    <div class="card-footer bg-white border-white">
      <p><a class="btn btn-outline-secondary" href="{{ url('/naszaoferta') }}" role="button">Nasza oferta &raquo;</a></p>
    </div>
  </div>
  <div class="card text-center border-white">
    <img class="card-img-top mx-auto d-block widthCITW" src="{{ url('/') }}/pic/sredni_gryczany.jpg" alt="Card image cap" width="140">
    <div class="card-body">
      <h5 class="card-title">Miód gryczany</h5>
      <p class="card-text lead">Zwany "przedłużaczem życia", pomaga przy przyswajaniu witaminy C, oraz przeciwdziała miażdżycy.</p>
    </div>
    <div class="card-footer bg-white border-white">
      <p><a class="btn btn-outline-secondary" href="{{ url('/naszaoferta') }}" role="button">Nasza oferta &raquo;</a></p>
    </div>
  </div>
</div>





     <!-- START THE FEATURETTES -->

     	<hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">100 lat tradycji! <span class="text-muted">Hodujemy pszczoły od 4 pokoleń.</span></h2>
            <p class="lead">Rodzinna tradycja pszczelarska sięga 1905 roku. Nabytą od tego czasu wiedzę oraz doświadczenie przekazujemy z pokolenia na pokolenie.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="{{ url('/') }}/pic/rodzice.jpg" alt="Rodzice">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Pszczelarstwo to nasza pasja. <span class="text-muted">Pozyskujemy miód najwyższej jakości.</span></h2>
            <p class="lead">Zamiłowanie i pasja do pszczół oraz zdobyte doświadczenie umożliwia nam pozyskiwanie miodów najwyższej jakości.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="{{ url('/') }}/pic/beekeeper.jpg" alt="Beekeeper">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Warmia i Mazury. <span class="text-muted">Zielone płuca Polski.</span></h2>
            <p class="lead">Nasza pasieka znajduje się na terenie województwa Warmińsko - Mazurskiego zwanego zielonymi płucami Polski. </p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="{{ url('/') }}/pic/3rd.jpg" alt="Bees">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

</div><!-- /.container -->






@endsection