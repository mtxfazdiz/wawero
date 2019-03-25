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
  theme_color="#6699cc"
  logged_in_greeting="Dzień dobry! Jak mogę Ci pomóc?"
  logged_out_greeting="Dzień dobry! Jak mogę Ci pomóc?">
</div>
@endsection




@section('content')

<div class="container marketing">
	<div class="row paddTop15"></div>

	<div class="row featurette">
		<div class="col-md-1"></div>
    	<div class="col-md-6 d-flex align-items-center">

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
    


    <div class="col-md-4 d-flex align-items-center">
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