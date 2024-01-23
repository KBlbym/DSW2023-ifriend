<?php
namespace Juego\Ifriend\Controllers;

use Juego\Ifriend\Models\User;

require_once("../src/connection.php");

class LoginController extends Controller{

  public function validate() {
    //SELECT * FROM user WHERE name = $_POST["user"] AND password =  $_POST["password"]
    $user = User::where([
      ["name", $_POST["user"]],
      ["password" , $_POST["password"]]
    ])->first();

    if($user){
      $_SESSION["id"] = $user->id;
      $_SESSION["user"] = $user->name;
    }
    header("Location: /");
  }

  public function logout(){
    session_destroy();
    header("Location: /");
  }
}