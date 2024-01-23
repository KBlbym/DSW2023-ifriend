<?php
namespace Juego\Ifriend\Controllers;
use Juego\Ifriend\Models\User;

require_once("../src/connection.php");

class UserController extends Controller{
  
  public function index() {
    $users = User::all();
    $router = $this->router;
    echo $this->blade->make("user.list", compact('users' , 'router'))->render();
  }

  public function delete($params){
    $id = $params["id"];
    $user = User::find($id);
    $user->delete();
    header("Location: /user");
  }

  public function create(){
    $router = $this->router;
    echo $this->blade->make("user.create", compact("router"))->render();
  }

  public function edit($params){
    $id = $params["id"];
    $user = User::find($id);
    $router = $this->router;
    echo $this->blade->make("user.edit", compact("user","router"))->render();
  }

  public function update($params){
    //Validación de los datos
    $id = $params["id"];
    $user = User::find($id);
    $user->name = $_POST["name"];
    $user->password = $_POST["password"];
    $user->mail = $_POST["mail"];
    $user->save();
    $router = $this->router;
    header("Location: /user");
  }

  public function post(){
    //Validación de los datos
    $user = new User();
    $user->name = $_POST["name"];
    $user->password = $_POST["password"];
    $user->mail = $_POST["mail"];
    $user->save();
    header("Location: /user");
  }
}