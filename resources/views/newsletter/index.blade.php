


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
  			<button type="submit" class="btn btn-sm btn-outline-secondary" id="btnNews"> Zapisz się </button>
  			@if ($errors->any())
  				@foreach ($errors->all() as $error)
                	<div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
  					<!-- Position it -->
  						<div style="position: absolute; top: 0; right: 0;">

    						<!-- Then put toasts within -->
    						<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
      							<div class="toast-header">
        							<img src="..." class="rounded mr-2" alt="...">
        							<strong class="mr-auto">Bootstrap</strong>
        							<small class="text-muted">just now</small>
        							<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
          								<span aria-hidden="true">&times;</span>
        							</button>
      							</div>
      							<div class="toast-body">
        							{{ $error }}
      							</div>
    						</div>
  						</div>
					</div>

					<script>
						$(document).ready(function(){
  							$("#btnNews").click(function(){
    							$('.toast').toast('show');
  							});
						});
					</script>




            	@endforeach	

    			<!-- <div class="alert alert-danger">
        			<ul>
            			@foreach ($errors->all() as $error)
                			<li>{{ $error }}</li>
            			@endforeach
        			</ul>
    			</div> -->
			@endif
		</form>
	</div><!-- end col-md-3 -->
	<div class="col-md-4 newsLeft"><!-- start col-md-3 -->
		<p><b>Nasz adres:</b>
		<p>
			Gospodarstwo pasieczne "Miody Wigor"</br>
			Piotr Wawryszczuk</br>
			Rogity 3AB</br>
			Woj. Warmińsko-Mazurskie
		</p>	
	</div><!-- end col-md-8 -->

	<div class="col-md-4 newsLeft"><!-- start col-md-3 -->
		<p><b>Zamówienia:</b>
		</p>
			+48 730 816 661</br>
		
		</p>
	</div>
</div> <!-- end row -->
