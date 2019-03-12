@extends('layouts.app')

@section('title')
    Kontakt &raquo;
@endsection

@section('content')

<div class="container marketing">
	<div class="row paddTop15"></div>

	<div class="row featurette">
    	<div class="offset-md-1 col-md-6 d-flex align-items-center">
            <div class="row featurette">
                <img class="featurette-image img-fluid mx-auto" src="pic/3miodyNew.jpg" alt="Bees">
            </div>
    	</div>
    


        <div class="col-md-4 newsLeft"> <!-- start col-md-4 d-flex align-items-center    -->
          
            
                    <form action="{{ route('send') }}" role="form" method="post">
                        {{ csrf_field() }}  
                        <div class="form-group">
                            <br>
                            <p><b>Sprawdź naszą ofertę.</b></p>
                            <small class="form-text text-muted">Wypełnij poniższy formularz aby otrzymać od nas e-maila z ofertą!</small>
                            <input type="email" name="email" class="form-control form-control-sm" placeholder="wpisz e-mail" required>
                            <!-- <small class="form-text text-muted">Nigdy nie udostępnimy Twojego e-maila.</small> -->
                        </div>
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
             
              
           
		</div><!-- end col-md-4 d-flex align-items-center    -->
    </div>
    <hr class="featurette-divider">
</div>
	


@endsection