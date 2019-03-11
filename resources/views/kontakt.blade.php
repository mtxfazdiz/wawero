@extends('layouts.app')

@section('title')
    Kontakt &raquo;
@endsection

@section('content')

<div class="container marketing">
	<div class="row paddTop15"></div>

	<div class="row featurette">
		<div class="col-md-1"></div>
    	<div class="col-md-6 d-flex align-items-center ramka">

    		<div class="card border-white" style="width: 30rem;">

    			<h2>Kontakt</h2>
    			<p></p>
    			<p class=" lead"><b>Nasz adres:</b></p>
    			<p class=" paddLeft10 lead">Gospodarstwo pasieczne "Miody Wigor"</p>
    			<p class=" paddLeft10 lead">Piotr Wawryszczuk</p>
    			<p class=" paddLeft10 lead">Rogity 3AB</p>
    			<p class=" paddLeft10 lead">14-500 Braniewo</p>
    			<p class=" paddLeft10 lead">Woj. Warmińsko-Mazurskie</p>
    			<p></p>
    			<p class=" lead"><b>Zamówienia:</b></p>
    			<p class=" paddLeft10 lead">+48 730 816 661</p>
			</div>
    	</div>
    


    <div class="col-md-4 d-flex align-items-center ramkab">
    	<div class="card border-white">
  			<ul class="list-group list-group-flush">
    			<li class="list-group-item border-white"><img class="featurette-image img-fluid mx-auto" src="pic/qr.svg" alt="QR" ></li>
    			<li class="list-group-item border-white lead">Zeskanuj kod aby dodać kontakt</li>
  			</ul>
		</div>
    </div>
    <dic class="col-md-1"></dic>
	</div>
	<hr class="featurette-divider">
</div>

@endsection