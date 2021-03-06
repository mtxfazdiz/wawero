@extends('layouts.app')


@section('title')
Nasza oferta &raquo;
@endsection

@section('face')
@include('include.face')
@endsection

@section('content')

<div class="bg-light">
	<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-white mx-auto" id="dodatki">
		<div class="col-md-7 p-lg-5 mx-auto my-5 overflow-hidden text-center">
			<h1 class="display-4 font-weight-normal">Miody z dodatkami</h1>
			<p class="card-text lead price">Definiujemy smak miodów na nowo</p>

		</div>
	</div>




	




	
	<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 bg-light">
		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			<div class="my-3 py-3">
				<h4 class="display-5">Miód<br> z malinami</h4>
				<p class="lead price">250 g - 24 zł, 400 g - 34 zł</p>
				<!-- <a class="l" href="{{ url('/naszaoferta/gryczany') }}">Dowiedz się więcej &raquo;</a> -->
			</div>
			<img class="card-img-bottom card-product mx-auto" src="pic/www/malinowy400.jpg" alt="Card image cap">
			
		</div>

		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			<div class="my-3 py-3">
				<h4 class="display-5">Miód<br> z imbirem</h4>
				<p class="lead price">250 g - 24 zł, 400 g - 34 zł</p>
				
			</div>
			<img class="card-img-bottom card-product mx-auto" src="pic/www/imbir400.jpg" alt="Card image cap">
			
		</div>


		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			<div class="my-3 py-3">
				<h4 class="display-5">Miód<br>z cynamonem</h4>
				<p class="lead price">250 g - 24 zł, 400 g - 34 zł</p>
				
			</div>
			<img class="card-img-bottom card-product mx-auto" src="pic/www/cynamon400.jpg" alt="Card image cap">
			
		</div>
	</div>


	<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 bg-light">
		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			<div class="my-3 py-3">
				<h4 class="display-5">Miód<br>z orzechami włoskimi</h4>
				<p class="lead price">250 g - 24 zł, 400 g - 34 zł</p>
				
			</div>
			<img class="card-img-bottom card-product mx-auto" src="pic/www/orzech400.jpg" alt="Card image cap">
			
		</div>

		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			<div class="my-3 py-3">
				<h4 class="display-5">Miód<br> z pyłkiem kwiatowym</h4>
				<p class="lead price">250 g - 24 zł, 400 g - 34 zł</p>
				
			</div>
			<img class="card-img-bottom card-product mx-auto" src="pic/www/zPylkiemKwiatowym400.jpg" alt="Card image cap">
			
		</div>

		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			<div class="my-3 py-3">
				<h4 class="display-5">Miód z kurkumą<br> i pieprzem cayenne</h4>
				<p class="lead price">250 g - 24 zł, 400 g - 34 zł</p>
				
			</div>
			<img class="card-img-bottom card-product mx-auto" src="pic/www/kurkuma400.jpg" alt="Card image cap">
			
		</div>
	</div>


	<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 bg-light">
		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			<div class="my-3 py-3">
				<h4 class="display-5">Miód<br>z żurawiną</h4>
				<p class="lead price">250 g - 24 zł, 400 g - 34 zł</p>
				
			</div>
			<img class="card-img-bottom card-product mx-auto" src="pic/www/zurawina400.jpg" alt="Card image cap">
			
		</div>

		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			<div class="my-3 py-3">
				
			</div>
			
			
		</div>

		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			
			
		</div>
	</div>

	<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-white mx-auto" id="odmianowe">
		<div class="col-md-7 p-lg-5 mx-auto my-5 overflow-hidden text-center">
			<h1 class="display-4 font-weight-normal" >Miody odmianowe</h1>
			<p class="card-text lead price">Dobrze znane a jednocześnie coraz lepsze</p>

		</div>
	</div>

	<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 bg-light">
		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			<div class="my-3 py-3">
				<h4 class="display-5">Miód<br>lipowy</h4>
				<p class="lead price">250 g - 20 zł, 400 g - 27 zł</p>
				
			</div>
			<img class="card-img-bottom card-product mx-auto" src="pic/www/lipowy400.jpg" alt="Card image cap">

		</div>

		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			<div class="my-3 py-3">
				<h4 class="display-5">Miód<br>wielokwiatowy</h4>
				<p class="lead price">250 g - 18 zł, 400 g - 25 zł</p>
				
			</div>
			<img class="card-img-bottom card-product mx-auto" src="pic/www/wielokwiat400.jpg" alt="Card image cap">

		</div>

		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			<div class="my-3 py-3">
				<h4 class="display-5">Miód<br>rzepakowy</h4>
				<p class="lead price">250 g - 18 zł, 400 g - 25 zł</p>
			
			</div>
			<img class="card-img-bottom card-product mx-auto" src="pic/www/rzepak400.jpg" alt="Card image cap">

		</div>
	</div>

	<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 bg-light">
		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			<div class="my-3 py-3">
				<h4 class="display-5">Miód<br>gryczany</h4>
				<p class="lead price">250 g - 22 zł, 400 g - 28 zł</p>
			
			</div>
			<img class="card-img-bottom card-product mx-auto" src="pic/www/gryczany400.jpg" alt="Card image cap">
			
		</div>

		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			
			
		</div>

		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			
			
		</div>
	</div>


	<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-white mx-auto" id="odmianowe">
		<div class="col-md-7 p-lg-5 mx-auto my-5 overflow-hidden text-center">
			<h1 class="display-4 font-weight-normal" >Produkty pszczele</h1>
			<p class="card-text lead price">Dobrze znane a jednocześnie coraz lepsze</p>

		</div>
	</div>

	<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 bg-light">
		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			<div class="my-3 py-3">
				<h4 class="display-5">Pyłek<br>kwiatowy</h4>
				<p class="lead price">200 g - 28 zł</p>
				
			</div>
			<img class="card-img-bottom card-product mx-auto" src="pic/www/pylekKwiatowy400.jpg" alt="Card image cap">

		</div>

		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			

		</div>

		<div class=" mr-md-3 pt-3  pt-md-5 text-center overflow-hidden bg-white">
			
		</div>
	</div>

	<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-white mx-auto">
		<div class="col-md-7 p-lg-5 mx-auto my-5 overflow-hidden text-center">
			<h1 class="display-4 font-weight-normal">Każdy znajdzie miód dla siebie.</h1><br>
			

		</div>
	</div>


</div>
	@endsection