<?php
$router->map('GET', '/', 'HomeController#index', 'index');
$router->map('GET', '/user', 'UserController#index', 'user');
$router->map('GET', '/user/[i:id]/delete', 'UserController#delete', 'user_delete');
$router->map('GET', '/user/create', 'UserController#create', 'user_create');
$router->map('POST', '/user', 'UserController#post', 'user_post');


