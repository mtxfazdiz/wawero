


<div class="row"> 
	<div class="col-md-4 newsLeft"> 
		<br>
		<form action="{{ route('send') }}" role="form" method="post">

			{{ csrf_field() }}	

			<div class="form-group">
				<p><b>Zapisz się do newslettera a otrzymasz 10% zniżki na pierwsze zakupy</b></p>
				<input type="email" name="email" class="form-control form-control-sm" placeholder="wpisz e-mail" required>
			</div>
			<div class="form-group">
				<input type="text" name="name" class="form-control form-control-sm" placeholder="wpisz swoje imię" required>
			</div>
			<button type="submit" class="btn btn-sm btn-outline-secondary" id="btnNews"> Zapisz się </button>
		</form>
	</div>
	<div class="col-md-1"></div>
	<div class="col-md-4 newsLeft">
		<br>
		<p>
			<b>Nasz adres:</b><br>
			Gospodarstwo pasieczne "Miody Wigor"<br>
			Piotr Wawryszczuk<br>
			Rogity 3AB<br>
			Woj. Warmińsko-Mazurskie
		</p>	
	</div>
	<div class="col-md-3 newsLeft">
		<br>
		<p>
			<b>Zamówienia:</b><br>
			+48 730 816 661<br>
			kontakt@miodywigor.pl
		</p>
	</div>
</div> 
