<?php
$router->map('GET', '/', 'HomeController#index', 'index');
$router->map('GET', '/user', 'UserController#index', 'user');
