<?php

class App
{
  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'login';
    }
  
    $this->$method();      
  }

  public function login()
  {
    if (isset($_COOKIE['name'])) {
      header('Location: ?method=home');
      return;
    }
    include('views/login.php');
  }

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
    //echo "xxxxx"; //al cuerpo del response. Ya no puedo usar header, ningun setcookie,....
    //guardar en cookie
    setcookie('name', $name, time() + 60*60*2);
    setcookie('password', $password, time() + 60*60*2);
    //reenviar a "home"
    //le dice al navegador que vaya a otro sitio:
    //http://ejercicios.local/ejemplos/20/index.php?method=home
    header('Location: index.php?method=home');
  }

  public function home()
  {
    if (!isset($_COOKIE['name'])) {
      header('Location: ?method=login');
      return;
    }
    
    include('views/home.php');
  }

  public function close()
  {
   
    setcookie('name', '',  1);
    setcookie('password', '',  1);
    header('Location: index.php?method=login');
  }

}