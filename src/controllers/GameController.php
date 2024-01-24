<?php
namespace Juego\Ifriend\Controllers;

use Juego\Ifriend\Models\Game;

require_once("../src/connection.php");

class GameController extends Controller{
  
  public function index() {
    $router = $this->router;
    $games = Game::where([
      "id_admin" => $_SESSION["id"]
    ])->get();
    echo $this->blade->make('game.index', compact("router","games"))->render();
  }

  public function post(){
    //Validación de los datos
    $game = new Game;
    $game->name = $_POST["name"];
    $game->id_admin = $_SESSION["id"];
    $game->save();
    header("Location: " . $this->router->generate("game"));
  }

  public function delete($params){
    $id = $params["id"];
    $game = Game::find($id);
    $game->delete();
    header("Location: /game");
  }

}