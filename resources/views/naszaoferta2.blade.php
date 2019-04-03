@extends('layouts.app')


@section('title')
Nasza oferta &raquo;
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
				<div class="row paddTop100"></div>
				<h2 class="featurette-heading">Nasza oferta</h2>
				<div class="row paddTop50"></div>
				<div class="card-group">
				  <div class="card text-center border-white">
				    <img class="card-img-top mx-auto d-block widthCIT" src="/pic/kw/KwadratSredniLipowy.jpg" alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title">Miód lipowy</h5>
				      
				    </div>
				    <div class="card-footer bg-white border-white">
				      <p><a class="btn btn-outline-secondary" href="{{ url('/naszaoferta/lipowy') }}" role="button">Zobacz &raquo;</a></p>
				    </div>
				  </div>
				  <div class="card text-center border-white">
				    <img class="card-img-top mx-auto d-block widthCIT" src="/pic/kw/KwadratSredniWielokwiat.jpg" alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title">Miód wielokwiatowy</h5>
				      
				    </div>
				    <div class="card-footer bg-white border-white">
				      <p><a class="btn btn-outline-secondary" href="{{ url('/naszaoferta/wielokwiatowy') }}" role="button">Zobacz &raquo;</a></p>
				    </div>
				  </div>
				  <div class="card text-center border-white">
				    <img class="card-img-top mx-auto d-block widthCIT" src="/pic/kw/KwadratSredniRzepak.jpg" alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title">Miód rzepakowy</h5>
				    </div>
				    <div class="card-footer bg-white border-white">
				      <p><a class="btn btn-outline-secondary" href="{{ url('/naszaoferta/rzepakowy') }}" role="button">Zobacz &raquo;</a></p>
				    </div>
				  </div>
				</div>
		


			
				<div class="card-group">
				  <div class="card text-center border-white">
				    <img class="card-img-top mx-auto d-block widthCIT" src="/pic/kw/KwadratSredniGryczany.jpg" alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title">Miód gryczany</h5>
				      
				    </div>
				    <div class="card-footer bg-white border-white">
				      <p><a class="btn btn-outline-secondary" href="{{ url('/naszaoferta/gryczany') }}" role="button">Zobacz &raquo;</a></p>
				    </div>
				  </div>
				  <div class="card text-center border-white">
				    <img class="card-img-top mx-auto d-block widthCIT" src="/pic/kw/KwadratSredniZPylkiem.jpg" alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title">Miód z pyłkiem kwiatowym</h5>
				    </div>
				    <div class="card-footer bg-white border-white">
				      <p><a class="btn btn-outline-secondary" href="{{ url('/naszaoferta/zpylkiem') }}" role="button">Zobacz &raquo;</a></p>
				    </div>
				</div>
				    <div class="card text-center border-white">
				    <img class="card-img-top mx-auto d-block widthCIT" src="/pic/kw/KwadratSredniNektarSpadz.jpg" alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title">Miód nektarowo - spadziowy</h5>
				      
				    </div>
				    <div class="card-footer bg-white border-white">
				      <p><a class="btn btn-outline-secondary" href="{{ url('/naszaoferta/nektar') }}" role="button">Zobacz &raquo;</a></p>
				    </div>
				  </div>


				</div>
		


			
				<div class="card-group">
				  
				  <div class="card text-center border-white">
				    <img class="card-img-top mx-auto d-block widthCIT" src="{{ url('/') }}/pic/kw/KwadratSredniPylekKwiatowy.jpg" alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title">Pyłek kwiatowy</h5>
				      
				    </div>
				    <div class="card-footer bg-white border-white">
				      <p><a class="btn btn-outline-secondary" href="{{ url('/naszaoferta/pylek') }}" role="button">Zobacz &raquo;</a></p>
				    </div>
				  </div>

				  <div class="card text-center border-white">
				    
				    <div class="card-body">
				      
				      
				    </div>
				    <div class="card-footer bg-white border-white">
				      
				    </div>
				  </div>

				  <div class="card text-center border-white">
				    
				    <div class="card-body">
				      
				      
				    </div>
				    <div class="card-footer bg-white border-white">
				      
				    </div>
				  </div>

				</div>





		

			<hr class="featurette-divider">
		</div>






@endsection