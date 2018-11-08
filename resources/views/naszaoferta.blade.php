@extends('layouts.app')


@section('title')
Nasza oferta &raquo;
@endsection

@section('content')







<div class="container marketing">


<div class="row paddTop15"></div> <!-- lipowy -->
	<div class="row featurette">
		<div class="col-md-1"></div>
        <div class="col-md-5">
        	<div class="card text-center border-white d-flex align-items-center">
  					<div class="card-header bg-white border-white">
    					<ul class="nav  card-header-pills border-white">
      						<li class="nav-item">
        						<a class="nav-link" data-toggle="tab" role="tab" href="#lipa_maly">Mały</a>
      						</li>
      						<li class="nav-item active">
        						<a class="nav-link" data-toggle="tab" role="tab" href="#lipa_sredni">Średni</a>
      						</li>
      						<li class="nav-item">
        						<a class="nav-link" data-toggle="tab" role="tab" href="#lipa_duzy">Duży</a>
      						</li>
    					</ul>
  					</div>

  					<div class="card-body tab-content" >
    					<div role="tabpanel" class="tab-pane" id="lipa_maly">
    						<div class="card border-white" style="width: 200px;">
  								<img class="card-img-top" src="pic/maly_lipa.jpg" alt="Card image cap">
  								<ul class="list-group list-group-flush">
    								<li class="list-group-item border-white">Waga: 250 g </li>
    								<li class="list-group-item border-white"><b>Cena: 15 zł</b></li>
    							</ul>
							</div>
    					</div>
    					<div role="tabpanel" class="tab-pane active" id="lipa_sredni">
    						<div class="card border-white" style="width: 200px;">
  								<img class="card-img-top" src="pic/sredni_lipa.jpg" alt="Card image cap">
  								<ul class="list-group list-group-flush border-white">
    								<li class="list-group-item border-white">Waga: 400 g </li>
    								<li class="list-group-item border-white"><b>Cena: 20 zł</b></li>
    							</ul>
							</div>
    					</div>
    					<div role="tabpanel" class="tab-pane" id="lipa_duzy">
    						<div class="card border-white" style="width: 200px;">
  								<img class="card-img-top" src="pic/duzy_lipa.jpg" alt="Card image cap">
  								<ul class="list-group list-group-flush border-white">
    								<li class="list-group-item border-white">Waga: 950 g </li>
    								<li class="list-group-item border-white"><b>Cena: 40 zł</b></li>
    							</ul>
							</div>
    					</div>
					</div>
			</div>	

        </div>
        <div class="col-md-5 d-flex align-items-center">
        	<span>
        			<h2>Miód lipowy</h2>
            		<p class="lead">Miód lipowy działa antyseptycznie i uspokajająco, stosowany w leczeniu chorób układu oddechowego. Wskazany przy zapaleniu oskrzeli i płuc, usuwa kaszel, stosowany przy przeziębieniach, grypie, stanach zapalnych błon śluzowych.</p>	
    		</span>
    	</div>
    	<div class="col-md-1"></div>
	</div> <!-- lipowy end -->

	<hr class="featurette-divider">

	<div class="row paddTop15"></div> <!-- wielokwiatowy -->
	<div class="row featurette">
		<div class="col-md-1"></div>
        <div class="col-md-5">
        	<div class="card text-center border-white d-flex align-items-center">
  					<div class="card-header bg-white border-white">
    					<ul class="nav  card-header-pills border-white">
      						<li class="nav-item">
        						<a class="nav-link" data-toggle="tab" role="tab" href="#wielokwiat_maly">Mały</a>
      						</li>
      						<li class="nav-item active">
        						<a class="nav-link" data-toggle="tab" role="tab" href="#wielokwiat_sredni">Średni</a>
      						</li>
      						<li class="nav-item">
        						<a class="nav-link" data-toggle="tab" role="tab" href="#wielokwiat_duzy">Duży</a>
      						</li>
    					</ul>
  					</div>

  					<div class="card-body tab-content" >
    					<div role="tabpanel" class="tab-pane" id="wielokwiat_maly">
    						<div class="card border-white" style="width: 200px;">
  								<img class="card-img-top" src="pic/maly_wielokwiat.jpg" alt="Card image cap">
  								<ul class="list-group list-group-flush">
    								<li class="list-group-item border-white">Waga: 250 g </li>
    								<li class="list-group-item border-white"><b>Cena: 13 zł</b></li>
    							</ul>
							</div>
    					</div>
    					<div role="tabpanel" class="tab-pane active" id="wielokwiat_sredni">
    						<div class="card border-white" style="width: 200px;">
  								<img class="card-img-top" src="pic/sredni_wielokwiat.jpg" alt="Card image cap">
  								<ul class="list-group list-group-flush border-white">
    								<li class="list-group-item border-white">Waga: 400 g </li>
    								<li class="list-group-item border-white"><b>Cena: 18 zł</b></li>
    							</ul>
							</div>
    					</div>
    					<div role="tabpanel" class="tab-pane" id="wielokwiat_duzy">
    						<div class="card border-white" style="width: 200px;">
  								<img class="card-img-top" src="pic/duzy_wielokwiat.jpg" alt="Card image cap">
  								<ul class="list-group list-group-flush border-white">
    								<li class="list-group-item border-white">Waga: 950 g</li>
    								<li class="list-group-item border-white"><b>Cena: 36 zł</b></li>
    							</ul>
							</div>
    					</div>
					</div>
			</div>	

        </div>
        <div class="col-md-5 d-flex align-items-center">
        	<span>
        			<h2>Miód wielokwiatowy</h2>
            		<p class="lead">Miód wielokwiatowy znajduje zastosowanie w stanach przeziębienia, wzmacnia organizm przed infekcjami oraz łagodzi objawy alergii i kataru. Wspomaga pracę wątroby, zapobiega chorobom woreczka żółciowego oraz minimalizuje problemy z jelitami. Stosuje się go jako naturalny antybiotyk, hamujący rozwój niepożądanych bakterii.</p>	
    		</span>
    	</div>
    	<div class="col-md-1"></div>
	</div> <!-- wielokwiatowy end -->

	<hr class="featurette-divider">


	<div class="row paddTop15"></div> <!-- rzepakowy -->
	<div class="row featurette">
		<div class="col-md-1"></div>
        <div class="col-md-5">
        	<div class="card text-center border-white d-flex align-items-center">
  					<div class="card-header bg-white border-white">
    					<ul class="nav  card-header-pills border-white">
      						<li class="nav-item">
        						<a class="nav-link" data-toggle="tab" role="tab" href="#rzepak_maly">Mały</a>
      						</li>
      						<li class="nav-item active">
        						<a class="nav-link" data-toggle="tab" role="tab" href="#rzepak_sredni">Średni</a>
      						</li>
      						<li class="nav-item">
        						<a class="nav-link" data-toggle="tab" role="tab" href="#rzepak_duzy">Duży</a>
      						</li>
    					</ul>
  					</div>

  					<div class="card-body tab-content" >
    					<div role="tabpanel" class="tab-pane" id="rzepak_maly">
    						<div class="card border-white" style="width: 200px;">
  								<img class="card-img-top" src="pic/maly_rzepak.jpg" alt="Card image cap">
  								<ul class="list-group list-group-flush">
    								<li class="list-group-item border-white">Waga: 250 g </li>
    								<li class="list-group-item border-white"><b>Cena: 13 zł</b></li>
    							</ul>
							</div>
    					</div>
    					<div role="tabpanel" class="tab-pane active" id="rzepak_sredni">
    						<div class="card border-white" style="width: 200px;">
  								<img class="card-img-top" src="pic/sredni_rzepak.jpg" alt="Card image cap">
  								<ul class="list-group list-group-flush border-white">
    								<li class="list-group-item border-white">Waga: 400 g </li>
    								<li class="list-group-item border-white"><b>Cena: 18 zł</b></li>
    							</ul>
							</div>
    					</div>
    					<div role="tabpanel" class="tab-pane" id="rzepak_duzy">
    						<div class="card border-white" style="width: 200px;">
  								<img class="card-img-top" src="pic/duzy_rzepak.jpg" alt="Card image cap">
  								<ul class="list-group list-group-flush border-white">
    								<li class="list-group-item border-white">Waga: 950 g </li>
    								<li class="list-group-item border-white"><b>Cena: 36 zł</b></li>
    							</ul>
							</div>
    					</div>
					</div>
			</div>	

        </div>
        <div class="col-md-5 d-flex align-items-center">
        	<span>
        			<h2>Miód rzepakowy</h2>
            		<p class="lead">Miód rzepakowy posiada wyraźny wpływ leczniczy w chorobach serca, zwłaszcza: wieńcowych (dusznica sercowa) działa leczniczo na niewydolność naczyniową. Cholina w nim zawarta usuwa tłuszcze wątroby i wzmaga działanie pęcherzyka żółciowego. Przyśpiesza leczenie wrzodów trawiennych żołądka i dwunastnicy.</p>	
    		</span>
    	</div>
    	<div class="col-md-1"></div>
	</div> <!-- rzepakowy end -->

	<hr class="featurette-divider">


	<div class="row paddTop15"></div> <!-- gryczany -->
	<div class="row featurette">
		<div class="col-md-1"></div>
        <div class="col-md-5">
        	<div class="card text-center border-white d-flex align-items-center">
  					<div class="card-header bg-white border-white">
    					<ul class="nav  card-header-pills border-white">
      						<li class="nav-item">
        						<a class="nav-link" data-toggle="tab" role="tab" href="#gryczany_maly">Mały</a>
      						</li>
      						<li class="nav-item active">
        						<a class="nav-link" data-toggle="tab" role="tab" href="#gryczany_sredni">Średni</a>
      						</li>
    					</ul>
  					</div>

  					<div class="card-body tab-content" >
    					<div role="tabpanel" class="tab-pane" id="gryczany_maly">
    						<div class="card border-white" style="width: 200px;">
  								<img class="card-img-top" src="pic/maly_gryczany.jpg" alt="Card image cap">
  								<ul class="list-group list-group-flush">
    								<li class="list-group-item border-white">Waga: 250 g </li>
    								<li class="list-group-item border-white"><b>Cena: 16 zł</b></li>
    							</ul>
							</div>
    					</div>
    					<div role="tabpanel" class="tab-pane active" id="gryczany_sredni">
    						<div class="card border-white" style="width: 200px;">
  								<img class="card-img-top" src="pic/sredni_gryczany.jpg" alt="Card image cap">
  								<ul class="list-group list-group-flush border-white">
    								<li class="list-group-item border-white">Waga: 400 g </li>
    								<li class="list-group-item border-white"><b>Cena: 22 zł</b></li>
    							</ul>
							</div>
    					</div>
					</div>
			</div>	

        </div>
        <div class="col-md-5 d-flex align-items-center">
        	<span>
        			<h2>Miód gryczany</h2>
            		<p class="lead">Miód gryczany zwany "przedłużaczem życia", pomaga przy przyswajaniu witaminy C, reguluje przepustowość ścianek włosowatych naczyń krwionośnych, tym samym przeciwdziała miażdżycy. Zalecany w nerwicach i stanach wyczerpania psychicznego. Reguluje rytm pracy serca.</p>	
    		</span>
    	</div>
    	<div class="col-md-1"></div>
	</div> <!-- gryczany end -->

	<hr class="featurette-divider">



	<div class="row paddTop15"></div> <!-- pylek -->
	<div class="row featurette">
		<div class="col-md-1"></div>
        <div class="col-md-5">
        	<div class="card text-center border-white d-flex align-items-center">
  					<div class="card-header bg-white border-white">
    					<ul class="nav  card-header-pills border-white">
      						<li class="nav-item">
        						<a class="nav-link" data-toggle="tab" role="tab" href="#pylek_maly">Mały</a>
      						</li>
      						<li class="nav-item active">
        						<a class="nav-link" data-toggle="tab" role="tab" href="#pylek_sredni">Średni</a>
      						</li>
    					</ul>
  					</div>

  					<div class="card-body tab-content" >
    					<div role="tabpanel" class="tab-pane" id="pylek_maly">
    						<div class="card border-white" style="width: 200px;">
  								<img class="card-img-top" src="pic/maly_pylek.jpg" alt="Card image cap">
  								<ul class="list-group list-group-flush">
    								<li class="list-group-item border-white">Waga: 250 g </li>
    								<li class="list-group-item border-white"><b>Cena: 18 zł</b></li>
    							</ul>
							</div>
    					</div>
    					<div role="tabpanel" class="tab-pane active" id="pylek_sredni">
    						<div class="card border-white" style="width: 200px;">
  								<img class="card-img-top" src="pic/sredni_pylek.jpg" alt="Card image cap">
  								<ul class="list-group list-group-flush border-white">
    								<li class="list-group-item border-white">Waga: 400 g </li>
    								<li class="list-group-item border-white"><b>Cena: 25 zł</b></li>
    							</ul>
							</div>
    					</div>
					</div>
			</div>	

        </div>
        <div class="col-md-5 d-flex align-items-center">
        	<span>
        			<h2>Miód z pyłkiem kwiatowym</h2>
            		<p class="lead">Miód z pyłkiem kwiatowym jest niezwykle cennym źródłem składników odżywczych. Zawiera makro i mikro elementy (wapń, żelazo, magnez). Stanowi bogate źródło witamin B1, B2 oraz witaminy C. Wskazany jest przy leczeniu anemii. Spożywanie go wzmacnia organizm oraz podnosi jego odporność. Zalecany przy leczeniu między innymi dróg żółciowych, miażdżycy, w chorobie wrzodowej żołądka i dwunastnicy. Ma działanie przeciwbakteryjne.</p>	
    		</span>
    	</div>
    	<div class="col-md-1"></div>
	</div> <!-- pylek end -->

	<hr class="featurette-divider">



	<div class="row paddTop15"></div> <!-- propolis -->
	<div class="row featurette">
		<div class="col-md-1"></div>
        <div class="col-md-5">
        	<div class="card text-center border-white d-flex align-items-center">
  					<div class="card-header bg-white border-white">
    					<ul class="nav  card-header-pills border-white">
      						<li class="nav-item">
        						<a class="nav-link" data-toggle="tab" role="tab" href="#propolis_maly">Mały</a>
      						</li>
      						<li class="nav-item active">
        						<a class="nav-link" data-toggle="tab" role="tab" href="#propolis_sredni">Średni</a>
      						</li>
    					</ul>
  					</div>

  					<div class="card-body tab-content" >
    					<div role="tabpanel" class="tab-pane" id="propolis_maly">
    						<div class="card border-white" style="width: 200px;">
  								<img class="card-img-top" src="pic/maly_propolis.jpg" alt="Card image cap">
  								<ul class="list-group list-group-flush">
    								<li class="list-group-item border-white">Waga: 250 g </li>
    								<li class="list-group-item border-white"><b>Cena: 18 zł</b></li>
    							</ul>
							</div>
    					</div>
    					<div role="tabpanel" class="tab-pane active" id="propolis_sredni">
    						<div class="card border-white" style="width: 200px;">
  								<img class="card-img-top" src="pic/sredni_propolis.jpg" alt="Card image cap">
  								<ul class="list-group list-group-flush border-white">
    								<li class="list-group-item border-white">Waga: 400 g </li>
    								<li class="list-group-item border-white"><b>Cena 25 zł</b></li>
    							</ul>
							</div>
    					</div>
					</div>
			</div>	

        </div>
        <div class="col-md-5 d-flex align-items-center">
        	<span>
        			<h2>Miód z propolisem</h2>
            		<p class="lead">Miód z propolisem działa wzmacniająco, odtruwająco oraz pomaga w leczeniu wątroby. Dzięki swoim właściwościom przeciwzapalnym stosowany jest w stanach zapalnych górnych i dolnych dróg oddechowych. Ma silne działanie przeciwbakteryjne i przeciwgrzybiczne.</p>	
    		</span>
    	</div>
    	<div class="col-md-1"></div>
	</div> <!-- propolis end -->

	<hr class="featurette-divider">




  <div class="row paddTop15"></div> <!-- nektarowo-spadziowy -->
    <div class="row featurette">
      <div class="col-md-1"></div>
        <div class="col-md-5">
          <div class="card text-center border-white d-flex align-items-center">
            <div class="card-header bg-white border-white">
              <ul class="nav  card-header-pills border-white">
                  <li class="nav-item active">
                    <a class="nav-link" data-toggle="tab" role="tab" href="#nektar_sredni">Średni</a>
                  </li>
              </ul>
            </div>

            <div class="card-body tab-content" >
              
              <div role="tabpanel" class="tab-pane active" id="nektar_sredni">
                <div class="card border-white" style="width: 200px;">
                  <img class="card-img-top" src="pic/sredni_nektarowo_spadziowy.jpg" alt="Card image cap">
                  <ul class="list-group list-group-flush border-white">
                    <li class="list-group-item border-white">Waga: 400 g </li>
                    <li class="list-group-item border-white"><b>Cena 20 zł</b></li>
                  </ul>
              </div>
              </div>
          </div>
      </div>  

        </div>
        <div class="col-md-5 d-flex align-items-center">
          <span>
            <h2>Miód nektarowo - spadziowy</h2>
              <p class="lead">Miód nektarowo - spadziowy jest stosowany w schorzeniach serca, układu krążenia, leczeniu dróg oddechowych, zaburzeniach trawienia i stanach zapalnych organizmu. Jest to produkt odrzywczy i odnawiający w stanach wyczerpania fizycznego i psychicznego organizmu.
              </p>  
          </span>
      </div>
    <div class="col-md-1"></div>
  </div> <!-- propolis end -->

  <hr class="featurette-divider">




  <div class="row paddTop15"></div> <!-- pyłek kwiatowy -->
    <div class="row featurette">
      <div class="col-md-1"></div>
        <div class="col-md-5">
          <div class="card text-center border-white d-flex align-items-center">
            <div class="card-header bg-white border-white">
              <ul class="nav  card-header-pills border-white">
                  <li class="nav-item active">
                    <a class="nav-link" data-toggle="tab" role="tab" href="#pylek_kwiatowy_sredni">Średni</a>
                  </li>
              </ul>
            </div>

            <div class="card-body tab-content" >
              
              <div role="tabpanel" class="tab-pane active" id="pylek_kwiatowy_sredni">
                <div class="card border-white" style="width: 200px;">
                  <img class="card-img-top" src="pic/sredni_pylek_kwiatowy.jpg" alt="Card image cap">
                  <ul class="list-group list-group-flush border-white">
                    <li class="list-group-item border-white">Waga: 200 g </li>
                    <li class="list-group-item border-white"><b>Cena 22 zł</b></li>
                  </ul>
              </div>
              </div>
          </div>
      </div>  

        </div>
        <div class="col-md-5 d-flex align-items-center">
          <span>
            <h2>Pyłek kwiatowy</h2>
              <p class="lead">Pyłek kwiatowy jest tak zwaną bombą witaminową. Uzupełnia dzienne racje żywnościowe w aminokwasy, biopierwiastki, witaminy. Wzmacnia apetyt, reguluje przemianę materii, wzmacnia organizm. Podnosi odporność organizmu oraz działa przeciwmiażdżycowo.
              </p>  
          </span>
      </div>
    <div class="col-md-1"></div>
  </div> <!-- propolis end -->

  <hr class="featurette-divider">





</div>











	






@endsection