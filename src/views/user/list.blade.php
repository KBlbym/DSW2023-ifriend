@extends("layouts.master")

@section("title", "Bienvenido a Lista de Usuarios")

@section("content")
<h2>Tabla de usuarios</h2>
<!-- <pre>{{$users}}</pre> -->
<table class="table table-success table-striped">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th scope="col">Email</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->password}}</td>
      <td>{{$user->mail}}</td>
      <td><a href="/user/{{$user->id}}/delete" class="btn btn-danger">Eliminar</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection