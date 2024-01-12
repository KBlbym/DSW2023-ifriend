<?php
namespace Juego\Ifriend\Controllers;

class HomeController {
  
  public function index() {
    global $blade;
    echo $blade->make('home.index')->render();

  }

  
}