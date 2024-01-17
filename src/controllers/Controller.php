<?php
namespace Juego\Ifriend\Controllers;

class Controller {
  protected $blade;
  protected $router;

  public function __construct($blade, $router){
    $this->blade = $blade;
    $this->router = $router;
  }
  
}