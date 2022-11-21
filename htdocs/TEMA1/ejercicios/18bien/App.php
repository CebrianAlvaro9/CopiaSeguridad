<?php

class App
{

  //metodo run carga la app y envia al metodo login

  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'login';
    }

    $this->$method();
  }
  // Si existe una cookie rederige directamente al home si no se va al login
  public function login()
  {
    if (isset($_COOKIE['name'])) {
      header('Location: ?method=home');
      return;
    }
    include('views/login.php');
  }

  //Metodo para comprobar si el campo nombre se envia y guarda los nombres y password en una variable
  // las utiliza para crear las cookies con la variables name y password
  public function auth()
  {

    //recoger datos POST
    if (isset($_POST['name'])) {
      $name = $_POST['name'];
      $password = $_POST['password'];
    } else {
      header('Location: ?method=login');
      return;
    }

    //guardar en cookie
    setcookie('name', $name, time() + 60 * 60 * 2);
    setcookie('password', $password, time() + 60 * 60 * 2);
    //reenviar a "home"

    //le dice al navegador que vaya a otro sitio:

    header('Location: index.php?method=home');
  }

  public function home()
  {
    if (!isset($_COOKIE['name'])) {
      header('Location: ?method=login');
      return;
    }
//include es que al ejecutar este metodo incluya la view home.php
    include('views/home.php');
  }

  //La funcion close basicamente borra las cookies creadas y reenvia al metodo login
  public function close()
  {

    setcookie('name', '',  1);
    setcookie('password', '',  1);
    header('Location: index.php?method=login');
  }
}
