<?php
$router->map('GET', '/', 'HomeController#index', 'index');
$router->map('POST', '/login', 'LoginController#validate', 'validate');
$router->map('GET', '/logout', 'LoginController#logout', 'logout');

if(isset($_SESSION["id"])){
  $router->map('GET', '/user', 'UserController#index', 'user');
  $router->map('GET', '/user/[i:id]/delete', 'UserController#delete', 'user_delete');
  $router->map('GET', '/user/create', 'UserController#create', 'user_create');
  $router->map('POST', '/user', 'UserController#post', 'user_post');
  $router->map('GET', '/user/[i:id]', 'UserController#edit', 'user_edit');
  $router->map('POST', '/user/[i:id]', 'UserController#update', 'user_update');
 
 
 
  $router->map('GET', '/game', 'GameController#index', 'game');
  $router->map('POST', '/game', 'GameController#post', 'game_post');
  $router->map('GET', '/game/[i:id]/delete', 'GameController#delete', 'game_delete');


  $router->map('GET', '/usergame', 'UsergameController#index', 'usergame');
  
}

