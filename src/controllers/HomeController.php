<?php
namespace Juego\Ifriend\Controllers;

class HomeController extends Controller{
  
  public function index() {
    $router = $this->router;
    echo $this->blade->make('index', compact("router"))->render();
  }
}