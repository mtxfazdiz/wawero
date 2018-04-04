@extends('layouts.app')

@section('title')
    Kontakt &raquo;
@endsection

@section('content')

<div class="container marketing">
	<div class="row paddTop15"></div>

	<div class="row featurette">
		<div class="col-md-1"></div>
    	<div class="col-md-6 d-flex align-items-center">

    		<div class="card border-white" style="width: 30rem;">
  				<ul class="list-group list-group-flush">
    				<li class="list-group-item border-white"><h2>Kontakt</h2></li>
    				<li class="list-group-item border-white">Gospodarstwo pasieczne "Miody Wigor"</li>
    				<li class="list-group-item border-white">Piotr Wawryszczuk</li>
    				<li class="list-group-item border-white">Rogity 3AB</li>
    				<li class="list-group-item border-white">14-500 Braniewo</li>    				
    				<li class="list-group-item border-white">Woj. Warmińsko-Mazurskie</li>
    				<li class="list-group-item border-white"><b>+48 730 816 661</b></li>
    				<li class="list-group-item border-white"><b>kontakt@miodywigor.pl</b></li>
  				</ul>
			</div>
    	</div>
    


    <div class="col-md-4 d-flex align-items-center">
    	<div class="card border-white" style="width: 30rem;">
  			<ul class="list-group list-group-flush">
    			<li class="list-group-item border-white"><img class="featurette-image" src="pic/qr.svg" alt="QR" ></li>
    			<li class="list-group-item border-white">Zeskanuj kod aby dodać kontakt</li>
  			</ul>
		</div>
    </div>
    <dic class="col-md-1"></dic>
	</div>
	<hr class="featurette-divider">
</div>

@endsection