<?php
namespace Juego\Ifriend;
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
  "driver" => "mysql",
  "host" => $_ENV["DB_HOST"],
  "database" => $_ENV["DATABASE"],
  "username" =>  $_ENV["DB_USER"],
  "password" =>  $_ENV["DB_PASSWORD"],
  "charset" => "utf8mb4",
]);

$capsule->bootEloquent();