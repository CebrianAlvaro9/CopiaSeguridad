<?php

class App
{

  //inicio de la app recoge el metodo home y lo ejecuta

  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'home';
    }

    $this->$method();
  }


  // Si existe la cookie rederige al metodo colores si no simplemente muestra la pestaña con los colores

  public function home()
  {

    if (isset($_COOKIE['color'])) {

      header('Location: index.php?method=colores');
    } else {
      include('views/colores.php');
    }
  }


  // recoge el id de la pestaña colores y crea una cookie con el

  public function cambio()
  {

    $id = $_GET['color'];

    setcookie('color', $id, time() + 60 * 60 * 2);

    header('Location: index.php?method=colores');
  }

  //Si existe la cookie con el color correspondiente cambia el color del fondo del home

  public function colores()
  {



    if (($_COOKIE['color']) == "red") {
      echo '<body style="background-color:red">';
    }
    if (($_COOKIE['color']) == "blue") {
      echo '<body style="background-color:blue">';
    }
    if (($_COOKIE['color']) == "green") {
      echo '<body style="background-color:green">';
    }
    include('views/home.php');
  }
}
