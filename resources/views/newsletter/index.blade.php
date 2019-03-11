


<div class="row"> <!-- start row -->
	<div class="col-md-4 newsLeft"> <!-- start col-md-3 -->
		<form action="{{ route('send') }}" role="form" method="post">
			<!-- <input name="_method" type="hidden" value="PATCH"> -->
			{{ csrf_field() }}	
			<!-- <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"> -->
  				<div class="form-group">
    				<p><b>Zapisz się do newslettera!</b></p>
    				<input type="email" name="email" class="form-control form-control-sm" placeholder="wpisz e-mail" required>
    				<!-- <small class="form-text text-muted">Nigdy nie udostępnimy Twojego e-maila.</small>
    				 @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif -->
  				</div>
  		<!-- 	</div> -->
  			<div class="form-group">
    			<input type="text" name="name" class="form-control form-control-sm" placeholder="wpisz swoje imię" required>
  			</div>
  			<button type="submit" class="btn btn-sm btn-outline-secondary"> Zapisz się </button>
  			@if ($errors->any())
    			<div class="alert alert-danger">
        			<ul>
            			@foreach ($errors->all() as $error)
                			<li>{{ $error }}</li>
            			@endforeach
        			</ul>
    			</div>
			@endif
		</form>
	</div><!-- end col-md-3 -->
	<div class="col-md-4 offset-md-1 newsLeft"><!-- start col-md-3 -->
		<p><b>Nasz adres:</b>
		<p>
			Gospodarstwo pasieczne "Miody Wigor"</br>
			Piotr Wawryszczuk</br>
			Rogity 3AB</br>
			Woj. Warmińsko-Mazurskie
		</p>	
	</div><!-- end col-md-8 -->

	<div class="col-md-2"><!-- start col-md-3 -->
		<p><b>Zamówienia:</b>
		</p>
			+48 730 816 661</br>
		
		</p>
	</div>
</div> <!-- end row -->













<!-- <p class=" lead"></p>
    	<p class=" paddLeft10 lead"></p> -->