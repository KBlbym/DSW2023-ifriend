<?php
namespace Juego\Ifriend\Controllers;

use Juego\Ifriend\Models\User_game;

require_once("../src/connection.php");

class UsergameController extends Controller{
  
  public function index() {
    $router = $this->router;
    $games = User_game::all();
    foreach($games as $game){
      echo "<p>$game</p>";
    }
    // echo $this->blade->make('game.index', compact("router","games"))->render();
  }

  // public function post(){
  //   //Validación de los datos
  //   $game = new User_game;
  //   $game->name = $_POST["name"];
  //   $game->id_admin = $_SESSION["id"];
  //   $game->save();
  //   header("Location: " . $this->router->generate("game"));
  // }

  // public function delete($params){
  //   $id = $params["id"];
  //   $game = Game::find($id);
  //   $game->delete();
  //   header("Location: /game");
  // }

}