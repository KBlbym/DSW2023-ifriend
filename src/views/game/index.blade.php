@extends("layouts.master")

@section("title", "Bienvenido a Lista de Partidas")

@section("content")
<form action="{{$router->generate('game_post')}}" method="post">
  <input type="text" name="name" placeholder="Nombre de partida...">
  <input type="submit" value="Crear nueva partida" class = "btn btn-success">
</form>
<h2>Partidas</h2>
<!-- <pre>{{$users}}</pre> -->
<table class="table table-success table-striped">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
    @foreach($games as $game)
    <tr>
      <th scope="row">{{$game->id}}</th>
      <td>{{$game->name}}</td>
      <td>
      <a href="{{$router->generate('user_edit',['id' => $game->id])}}" class="btn btn-warning">Editar</a>
      <a href="{{$router->generate('game_delete',['id' => $game->id])}}" class="btn btn-danger">Eliminar</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection