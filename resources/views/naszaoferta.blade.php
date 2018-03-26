@extends('layouts.app')


@section('title')
HOME &raquo;
@endsection

@section('content')







<div class="container marketing">


<div class="row paddTop15"></div> <!-- lipowy -->
	<div class="row featurette">
		<dic class="col-md-1"></dic>
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
  								<img class="card-img-top" src="pic/maly_gryczany.jpg" alt="Card image cap">
  								<ul class="list-group list-group-flush">
    								<li class="list-group-item border-white">Waga: 250 g </li>
    								<li class="list-group-item border-white"><b>Cena: 15 zł</b></li>
    							</ul>
							</div>
    					</div>
    					<div role="tabpanel" class="tab-pane active" id="lipa_sredni">
    						<div class="card border-white" style="width: 200px;">
  								<img class="card-img-top" src="pic/sredni_gryczany.jpg" alt="Card image cap">
  								<ul class="list-group list-group-flush border-white">
    								<li class="list-group-item border-white">Waga: 400 g </li>
    								<li class="list-group-item border-white"><b>Cena: 20 zł</b></li>
    							</ul>
							</div>
    					</div>
    					<div role="tabpanel" class="tab-pane" id="lipa_duzy">
    						<div class="card border-white" style="width: 200px;">
  								<img class="card-img-top" src="pic/duzy_rzepak.jpg" alt="Card image cap">
  								<ul class="list-group list-group-flush border-white">
    								<li class="list-group-item border-white">Waga: 1000 g </li>
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
            		<p>Miód lipowy uznawany jest przez wielu znawców za najlepszy w smaku miód. Wynika to z jego bogatej zawartości. Miód ten jest trudny w produkcji i zarazem bogaty w składniki wszechstronnie poprawiające nasze zdrowie.</p>	
    		</span>
    	</div>
    	<dic class="col-md-1"></dic>
	</div> <!-- lipowy end -->

	<hr class="featurette-divider">

	<div class="row paddTop15"></div> <!-- wielokwiatowy -->
	<div class="row featurette">
		<dic class="col-md-1"></dic>
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
  								<img class="card-img-top" src="pic/maly_gryczany.jpg" alt="Card image cap">
  								<ul class="list-group list-group-flush">
    								<li class="list-group-item border-white">Waga: 250 g </li>
    								<li class="list-group-item border-white"><b>Cena: 13 zł</b></li>
    							</ul>
							</div>
    					</div>
    					<div role="tabpanel" class="tab-pane active" id="wielokwiat_sredni">
    						<div class="card border-white" style="width: 200px;">
  								<img class="card-img-top" src="pic/sredni_gryczany.jpg" alt="Card image cap">
  								<ul class="list-group list-group-flush border-white">
    								<li class="list-group-item border-white">Waga: 400 g </li>
    								<li class="list-group-item border-white"><b>Cena: 18 zł</b></li>
    							</ul>
							</div>
    					</div>
    					<div role="tabpanel" class="tab-pane" id="wielokwiat_duzy">
    						<div class="card border-white" style="width: 200px;">
  								<img class="card-img-top" src="pic/duzy_rzepak.jpg" alt="Card image cap">
  								<ul class="list-group list-group-flush border-white">
    								<li class="list-group-item border-white">Waga: 1000 g </li>
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
            		<p>Miód lipowy uznawany jest przez wielu znawców za najlepszy w smaku miód. Wynika to z jego bogatej zawartości. Miód ten jest trudny w produkcji i zarazem bogaty w składniki wszechstronnie poprawiające nasze zdrowie.</p>	
    		</span>
    	</div>
    	<dic class="col-md-1"></dic>
	</div> <!-- wielokwiatowy end -->

	<hr class="featurette-divider">


	<div class="row paddTop15"></div> <!-- rzepakowy -->
	<div class="row featurette">
		<dic class="col-md-1"></dic>
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
  								<img class="card-img-top" src="pic/maly_gryczany.jpg" alt="Card image cap">
  								<ul class="list-group list-group-flush">
    								<li class="list-group-item border-white">Waga: 250 g </li>
    								<li class="list-group-item border-white"><b>Cena: 13 zł</b></li>
    							</ul>
							</div>
    					</div>
    					<div role="tabpanel" class="tab-pane active" id="rzepak_sredni">
    						<div class="card border-white" style="width: 200px;">
  								<img class="card-img-top" src="pic/sredni_gryczany.jpg" alt="Card image cap">
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
    								<li class="list-group-item border-white">Waga: 1000 g </li>
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
            		<p>Miód lipowy uznawany jest przez wielu znawców za najlepszy w smaku miód. Wynika to z jego bogatej zawartości. Miód ten jest trudny w produkcji i zarazem bogaty w składniki wszechstronnie poprawiające nasze zdrowie.</p>	
    		</span>
    	</div>
    	<dic class="col-md-1"></dic>
	</div> <!-- rzepakowy end -->

	<hr class="featurette-divider">


	<div class="row paddTop15"></div> <!-- gryczany -->
	<div class="row featurette">
		<dic class="col-md-1"></dic>
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
            		<p>Miód lipowy uznawany jest przez wielu znawców za najlepszy w smaku miód. Wynika to z jego bogatej zawartości. Miód ten jest trudny w produkcji i zarazem bogaty w składniki wszechstronnie poprawiające nasze zdrowie.</p>	
    		</span>
    	</div>
    	<dic class="col-md-1"></dic>
	</div> <!-- gryczany end -->

	<hr class="featurette-divider">



	<div class="row paddTop15"></div> <!-- pylek -->
	<div class="row featurette">
		<dic class="col-md-1"></dic>
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
  								<img class="card-img-top" src="pic/maly_gryczany.jpg" alt="Card image cap">
  								<ul class="list-group list-group-flush">
    								<li class="list-group-item border-white">Waga: 250 g </li>
    								<li class="list-group-item border-white"><b>Cena: 18 zł</b></li>
    							</ul>
							</div>
    					</div>
    					<div role="tabpanel" class="tab-pane active" id="pylek_sredni">
    						<div class="card border-white" style="width: 200px;">
  								<img class="card-img-top" src="pic/sredni_gryczany.jpg" alt="Card image cap">
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
            		<p>Miód lipowy uznawany jest przez wielu znawców za najlepszy w smaku miód. Wynika to z jego bogatej zawartości. Miód ten jest trudny w produkcji i zarazem bogaty w składniki wszechstronnie poprawiające nasze zdrowie.</p>	
    		</span>
    	</div>
    	<dic class="col-md-1"></dic>
	</div> <!-- pylek end -->

	<hr class="featurette-divider">



	<div class="row paddTop15"></div> <!-- propolis -->
	<div class="row featurette">
		<dic class="col-md-1"></dic>
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
  								<img class="card-img-top" src="pic/maly_gryczany.jpg" alt="Card image cap">
  								<ul class="list-group list-group-flush">
    								<li class="list-group-item border-white">Waga: 250 g </li>
    								<li class="list-group-item border-white"><b>Cena: 16 zł</b></li>
    							</ul>
							</div>
    					</div>
    					<div role="tabpanel" class="tab-pane active" id="propolis_sredni">
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
        			<h2>Miód z propolisem</h2>
            		<p>Miód lipowy uznawany jest przez wielu znawców za najlepszy w smaku miód. Wynika to z jego bogatej zawartości. Miód ten jest trudny w produkcji i zarazem bogaty w składniki wszechstronnie poprawiające nasze zdrowie.</p>	
    		</span>
    	</div>
    	<dic class="col-md-1"></dic>
	</div> <!-- propolis end -->

	<hr class="featurette-divider">
</div>











	






@endsection