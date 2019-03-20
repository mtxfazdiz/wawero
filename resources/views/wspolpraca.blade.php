@extends('layouts.app')

@section('title')
Współpraca &raquo;
@endsection

@section('content')





     

<div class="container marketing ">
  <div class="row paddTop15"></div>
  <div class="row featurette">
    <div class="col-md-5">
      <img class="featurette-image img-fluid mx-auto" src="pic/3miodyNew.jpg" alt="Miody"> 
    </div>
    <div class="col-md-7 d-flex align-items-left">
      
        <form action="{{ route('send') }}" role="form" method="post">
        {{ csrf_field() }}  
          <div class="form-group">
            <h2 class="featurette-heading">Jesteś zainteresowany współpracą?</h2>
            <p class="lead">Wypełnij i wyślij poniższy formularz aby otrzymać ofertę!</p>
            <input type="email" name="email" class="form-control form-control" placeholder="wpisz e-mail" required>
          </div>
          <div class="form-group">
            <input type="text" name="name" class="form-control form-control" placeholder="wpisz swoje imię" required>
          </div>
          <button type="submit" class="btn btn-sm btn-outline-secondary">Wyślij</button>
        </form> 
         
    </div>
  </div>
  <hr class="featurette-divider">
</div><!-- /.container -->




@endsection