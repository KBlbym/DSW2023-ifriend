@extends("layouts.master")

@section("title", "Editar Usuario")

@section("content")
<form method="post" 
@if(isset($user))
action="{{$router->generate('user_update' , ['id' => $user->id])}}"
@else
action="{{$router->generate('user_post')}}"
@endif
>
<div class="mb-3">
    <label for="inputName" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="inputName" name="name" 
    @if(isset($user))
    value="{{$user->name}}"
    @endif
    >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" 
    @if(isset($user))
    value="{{$user->mail}}"
    @endif
    >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" 
    @if(isset($user))
    value="{{$user->password}}"
    @endif
    >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection