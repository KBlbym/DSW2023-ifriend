<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        @isset($_SESSION["id"])
        <li class="nav-item">
          <a class="nav-link" href="{{$router->generate('user')}}">Users</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="{{$router->generate('game')}}">Games</a>
        </li>
        @endisset
      </ul>
      
      @if(isset($_SESSION['id']))
      <span style="padding-right: 20px;">{{$_SESSION["user"]}}</span>
      <button class="btn btn-danger"><a class="nav-link" href="{{$router->generate('logout')}}">Logout</a></button>
      @else
      <form class="d-flex" role="login" method="post" action="{{$router->generate('validate')}}">
        <input class="form-control me-2" type="text" placeholder="User" aria-label="User" name="user">
        <input class="form-control me-2" type="password" placeholder="Password" aria-label="Password" name="password">
        <button class="btn btn-outline-success" type="submit">Login</button>
      </form>
      @endif
    </div>
  </div>
</nav>