@extends('app')

@section('content')
<div class="container">
	<div class="row">
		
            <div class="jumbotron">
                <h1>Hola, bienvenido {{Auth::user()->name}}!</h1>
                <p></p>
            </div>
	</div>
</div>
@endsection

