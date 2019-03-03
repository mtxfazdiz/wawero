@extends('layouts.app')

@section('title')
HOME &raquo;
@endsection

@section('content')


	<div class="container">
		<div class="row featurette">
        	<div class="col-md-2"></div>
        	<div class="col-md-8 newsCenter">
            	<h2 class="featurette-heading">Usunięcie subskrybcji</h2>
            	<p class="lead">{{ $email }}</p>
          	</div>
          	<div class="col-md-2"></div>
        </div>	
        <hr class="featurette-divider">
	</div>

        


@endsections