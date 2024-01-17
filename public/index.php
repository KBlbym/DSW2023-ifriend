<?php
use Jenssegers\Blade\Blade;

require_once "../vendor/autoload.php";
//blade
$views = "../src/views";
$cache = "../cache";

$blade = new Blade($views, $cache);

$dotenv = Dotenv\Dotenv::createImmutable("../");
$dotenv->load();
$namespace = $_ENV['NAMESPACE'];
//echo $namespace;
// Router system
$router = new AltoRouter();
// List of routes
require_once '../src/routers/router.php';

// End of list
$match = $router->match();

if($match) {
 $target = $match["target"];
 if(is_string($target) && strpos($target, "#") !== false) {
     list($controller, $action) = explode("#", $target);
     $controller = $namespace."Controllers\\" . $controller;
     $controller = new $controller($blade, $router);
     $controller->$action($match["params"]);
 } else {
     if(is_callable($match["target"])) 
call_user_func_array($match["target"], $match["params"]);
     else require $match["target"];
 }
} else {
 echo "Ruta no válida";
 die();
}
