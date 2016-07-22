@extends('app')
 
@section('content')

<h1>Showing {{ $movie->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $movie->name }}</h2>
        <p>
            <strong>Name:</strong> {{ $movie->name }}<br>
            <strong>Gender:</strong> {{ $movie->gender}}
        </p>
    </div>
 
@endsection
