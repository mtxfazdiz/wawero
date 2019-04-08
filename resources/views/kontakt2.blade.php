  @extends('layouts.app')

  @section('title')
  Kontakt &raquo;
  @endsection


  @section('face')
  @include('include.face')
  @endsection




  @section('content')

  <div class="container marketing">
  	<div class="row paddTop100"></div>
  	<h2 class="featurette-heading">Kontakt</h2>

  	<div class="row featurette">
  		<div class="col-md-7">
  			<h2 class="featurette-heading kon">+48 730 816 661</h2>
  			<p class="lead">
  				pon. - pt. 9:00 - 18:00</br>
  				sob. 9:00 - 15:00
  			</p>
  		</div>
  		<div class="col-md-5">
  			
  		</div>
  	</div>

  




  	
  	<hr class="featurette-divider">
  	<div class="card-group">
  		<div class="card text-center border-white">
  			<i class="fa fa-facebook-square" style="font-size:140px;color:rgb(84,84,84);"></i>
  			<div class="card-body">
  				<p class="card-text lead">Dołącz do nas na facebooku</p>
  			</div>
  			<div class="card-footer bg-white border-white">
  				<p><a class="btn btn-outline-secondary" href="https://fb.com/miodywigor" role="button" target="_blank">Facebook &raquo;</a></p>
  			</div>
  		</div>
  		<div class="card text-center border-white">
  			<i class="	fa fa-instagram" style="font-size:140px;color:rgb(84,84,84);"></i>
  			<div class="card-body">
  				<p class="card-text lead">Zobacz nas na instagramie</p>
  			</div>
  			<div class="card-footer bg-white border-white">
  				<p><a class="btn btn-outline-secondary" href="https://instagram.com/miody_wigor" role="button" target="_blank">Instagram &raquo;</a></p>
  			</div>
  		</div>
  		<div class="card text-center border-white">
  			<img class="featurette-image img-fluid mx-auto" src="pic/qr.svg" alt="QR" width="140">
  			<div class="card-body">
  				<p class="card-text lead">Zeskanuj kod aby dodać kontakt</p>
  			</div>
  			<div class="card-footer bg-white border-white">

  			</div>
  		</div>
  	</div>




  	<hr class="featurette-divider">
  </div>











  @endsection