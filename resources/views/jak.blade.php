@extends('layouts.app')

@section('title')
Jak kupić nasze produkty? &raquo;
@endsection

@section('content')



<div class="container marketing">
	<div class="row paddTop100"></div>
	<h2 class="featurette-heading">Jak kupić nasze produkty?</h2>
	<div class="row paddTop50"></div>
	<div class="card-group">
  		<div class="card text-center border-white">
  			<i class="material-icons" style="font-size:160px;color:rgb(84,84,84);">shopping_cart</i>
    		<div class="card-body">
      			<h5 class="card-title">Krok 1</h5>
      			<p class="card-text lead">Wybierz produkty, które Cię interesują.</p>
    		</div>
    		<div class="card-footer bg-white border-white">
      			<p><a class="btn btn-outline-secondary" href="{{ url('/naszaoferta') }}" role="button">Nasza oferta &raquo;</a></p>
    		</div>
  		</div>
  		<div class="card text-center border-white">
  			<i class="material-icons" style="font-size:160px;color:rgb(84,84,84);">forum</i>
    		<div class="card-body">
      			<h5 class="card-title">Krok 2</h5>
      			<p class="card-text lead">Skontaktuj się z nami aby złożyć zamówienie.</p>
    		</div>
    		<div class="card-footer bg-white border-white">
      			<p><a class="btn btn-outline-secondary" href="{{ url('/kontakt') }}" role="button">Kontakt &raquo;</a></p>
    		</div>
  		</div>
  		<div class="card text-center border-white">
    		<i class="material-icons" style="font-size:160px;color:rgb(84,84,84);">group_add</i>
    		<div class="card-body">
      			<h5 class="card-title">Krok 3</h5>
      			<p class="card-text lead">Odbierz paczkę i dołącz do grona zadowolonych klientów.</p>
    		</div>
    		<div class="card-footer bg-white border-white">
      			<p><a class="btn btn-outline-secondary" href="https://fb.com/miodywigor" role="button" target="_blank">Facebook &raquo;</a></p>
    		</div>
  		</div>
	</div>
	<hr class="featurette-divider">
</div>


































<!-- <div class="container marketing ">
  <div class="row paddTop15"></div>
  <div class="row featurette ramkab">
    <div class="col-md-4 d-flex  ramka">
      <i class="material-icons" style="font-size:120px;color:red;">cloud</i>
    </div>
    <div class="col-md-4 d-flex align-items-center ramka">
      
   
         
    </div>
    <div class="col-md-4 d-flex align-items-center ramka">
      
   
         
    </div>
  </div>
  <hr class="featurette-divider">
</div><!-- /.container --> 







@endsection