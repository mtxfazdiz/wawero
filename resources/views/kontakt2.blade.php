  @extends('layouts.app')

  @section('title')
  Kontakt &raquo;
  @endsection


  @section('face')
  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>
  	window.fbAsyncInit = function() {
  		FB.init({
  			xfbml            : true,
  			version          : 'v3.2'
  		});
  	};

  	(function(d, s, id) {
  		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
  		js = d.createElement(s); js.id = id;
  		js.src = 'https://connect.facebook.net/pl_PL/sdk/xfbml.customerchat.js';
  		fjs.parentNode.insertBefore(js, fjs);
  	}(document, 'script', 'facebook-jssdk'));</script>

  	<!-- Your customer chat code -->
  	<div class="fb-customerchat"
  	attribution=setup_tool
  	page_id="589035351513119"
  	theme_color="#545454"
  	logged_in_greeting="Dzień dobry! Napisz do nas!"
  	logged_out_greeting="Dzień dobry! Napisz do nas!">
  </div>
  @endsection










  @section('content')

  <div class="container marketing">
  	<div class="row paddTop100"></div>
  	<h2 class="featurette-heading">Kontakt</h2>
  	<div class="row paddTop50"></div>
  	<div class="row featurette">
  		<div class="col-md-2 "></div>
  		<div class="col-md-4">
  			<br>
  			<h5 class="card-title">Dzień dobry! Jak możemy Ci pomóc?</h5>
  			
  			<p class="lead">
  				
  				+48 730 816 661</br>
  				kontakt@miodywigor.pl
  			
  		</p>
  	</div>
  	
  	<div class="col-md-4">
  		<br>
  		<h5 class="card-title">Jesteśmy do Państwa dyspozycji</h5>
  		<p class="lead"></p>
  		<p class="lead">
  			
  			pon. - pt. 9:00 - 18:00</br>
  			sob. 9:00 - 15:00
  		
  	</p>
  </div>
  <div class="col-md-1 "></div>
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