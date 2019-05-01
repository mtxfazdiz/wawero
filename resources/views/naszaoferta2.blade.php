@extends('layouts.app')


@section('title')
Nasza oferta &raquo;
@endsection

@section('face')
   @include('include.face')
@endsection

@section('content')

<div class="bg-light">
	<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-white mx-auto">
    <div class="col-md-7 p-lg-5 mx-auto my-5 overflow-hidden text-center">
      <h1 class="display-4 font-weight-normal">Nasza oferta</h1>
      <p class="card-text lead">Każdy znajdzie miód dla siebie</p>
      
    </div>
  </div>
	<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 bg-light">
		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			<div class="my-3 py-3">
				<h2 class="display-5">Miód lipowy</h2>
				<p class="lead">Wszystko czego potrzebujesz.</p>
				<a class="l" href="{{ url('/naszaoferta/lipowy') }}">Dowiedz się więcej &raquo;</a>
			</div>
			<img class="card-img-bottom card-product mx-auto" src="/pic/oferta/sredni_lipowy.jpg" alt="Card image cap">

		</div>

		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			<div class="my-3 py-3">
				<h2 class="display-5">Miód wielokwiatowy</h2>
				<p class="lead">Wszystko czego potrzebujesz.</p>
				<a class="l" href="{{ url('/naszaoferta/wielokwiatowy') }}">Dowiedz się więcej &raquo;</a>
			</div>
			<img class="card-img-bottom card-product mx-auto" src="/pic/oferta/sredni_wielokwiat.jpg" alt="Card image cap">

		</div>

		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			<div class="my-3 py-3">
				<h2 class="display-5">Miód rzepakowy</h2>
				<p class="lead">Wszystko czego potrzebujesz.</p>
				<a class="l" href="{{ url('/naszaoferta/rzepakowy') }}">Dowiedz się więcej &raquo;</a>
			</div>
			<img class="card-img-bottom card-product mx-auto" src="/pic/oferta/sredni_rzepak.jpg" alt="Card image cap">

		</div>
	</div>

	<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 bg-light">
		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			<div class="my-3 py-3">
				<h2 class="display-5">Miód gryczany</h2>
				<p class="lead">Wszystko czego potrzebujesz.</p>
				<a class="l" href="{{ url('/naszaoferta/gryczany') }}">Dowiedz się więcej &raquo;</a>
			</div>
			<img class="card-img-bottom card-product mx-auto" src="pic/oferta/sredni_gryczany.jpg" alt="Card image cap">
			
		</div>

		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			<div class="my-3 py-3">
				<h2 class="display-5">Miód z pyłkiem kwiatowym</h2>
				<p class="lead">Wszystko czego potrzebujesz.</p>
				<a class="l" href="{{ url('/naszaoferta/zpylkiem') }}">Dowiedz się więcej &raquo;</a>
			</div>
			<img class="card-img-bottom card-product mx-auto" src="pic/oferta/sredni_z_pylkiem.jpg" alt="Card image cap">
			
		</div>

		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			<div class="my-3 py-3">
				<h2 class="display-5">Miód nektarowo - spadziowy</h2>
				<p class="lead">Wszystko czego potrzebujesz.</p>
				<a class="l" href="{{ url('/naszaoferta/nektar') }}">Dowiedz się więcej &raquo;</a>
			</div>
			<img class="card-img-bottom card-product mx-auto" src="pic/oferta/sredni_nektar.jpg" alt="Card image cap">
			
		</div>
	</div>


	<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 bg-light">
		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			<div class="my-3 py-3">
				<h2 class="display-5">Pyłek kwiatowy</h2>
				<p class="lead">Wszystko czego potrzebujesz.</p>
				<a class="l" href="{{ url('/naszaoferta/pylek') }}">Dowiedz się więcej &raquo;</a>
			</div>
			<img class="card-img-bottom card-product mx-auto" src="pic/oferta/sredni_pylek_kwiatowy.jpg" alt="Card image cap">
			
		</div>

		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			
		</div>

		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			
		</div>
	</div>

	<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-white mx-auto">
    <div class="col-md-7 p-lg-5 mx-auto my-5 overflow-hidden text-center">
      <h1 class="display-4 font-weight-normal">Nasza oferta</h1>
      <p class="card-text lead">Każdy znajdzie miód dla siebie</p>
      
    </div>




</div>



@endsection