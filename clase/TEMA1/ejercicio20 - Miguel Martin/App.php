<?php

class App
{

  public function __construct()
  {
    session_start();    
  }

  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'home';
    }
  
    $this->$method();
  }

  public function home()
  {
    include('views/home.php');
  }

  public function colores()
  {
    include('views/colores.php');
  }

  public function cambio()
  {
    $color = $_GET['color'];
    $_SESSION["color"] = $color;
    header("Location: ?method=home");
  }

  public function borrar()
  {
    if (isset($_SESSION["color"])) {
      $_SESSION = array();
      session_destroy();
      setcookie(session_name(),'', time()-7200, '/');
    }
    header("Location: ?method=home");
  }
}
