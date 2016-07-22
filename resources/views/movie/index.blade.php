@extends('app')
 
@section('content')
<div class="container">
    <h1>Tuxtla VideoClub</h1>
    <a href="{{url('/movie/create')}}" class="btn btn-success">Create movie</a>
    <hr>
    <?php 
        $movies = App\Movie::select()->orderBy('id', 'asc')->get();
        foreach($movies as $movie):
      
        ?>
        <table class="table">
            <tr>
            <!-- On rows -->
            <th class="warning">Nombre</th>
            <th class="success">Genero</th>
            <th class="danger">Acción</th>
            </tr>
            <tr>
            <!-- On cells 'td' or 'th' -->
            <td>{{$movie->name}}</td>
            <td>{{$movie->gender}}</td>
            <td>
                
            </td>
            </tr>
        </table>
        <?php endforeach ?>
</div>

 
@endsection