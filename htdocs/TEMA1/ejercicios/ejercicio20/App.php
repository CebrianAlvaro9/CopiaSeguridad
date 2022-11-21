<?php

class App
{

  //constructor de la sesion
  public function __construct()
  {
    session_start();
  }

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
    if (isset($_SESSION['name'])) {
      header('Location: ?method=home');
      return;
    } else {

      setcookie(session_name(), '', time() - 7200, '/');
      // este else es para borrar la sesion vacia que se crea al entrar al metodo login en el caso de estar los campos vacios de name y password
    }
    include('views/login.php');
  }

  // Comprueba que los campos se hayan enviado guardas los post en dos variables y crea las sesiones con ellas
  public function auth()
  {
    if (isset($_POST['name']) && !empty($_POST['name'])) {
      $name = $_POST['name'];
      $password = $_POST['password'];
    } else {
      header('Location: ?method=login');
      return;
    }
    $_SESSION['name'] = $name;
    $_SESSION['password'] = $password;
    $_SESSION['deseos'] = [];
    header('Location: index.php?method=home');
  }


  
  public function home()

  {


    if (!isset($_SESSION['name'])) {
      header('Location: ?method=login');
      return;
    }
    if (isset($_SESSION['deseos'])) {
      $deseos = ($_SESSION['deseos']);
    } else {
      // $deseos = array();
      $deseos = [];
    }
    include('views/home.php');
  }


  //añadir deseos a la lista en este caso un array deseos para posteriormente guardarlos dentro de la sesion deseos
  public function new()
  {


    if (!isset($_POST['new'])) {
      header('Location: index.php?method=home');
      return;
    }
    $new = $_POST['new'];
    if (isset($_SESSION['deseos'])) {
      $deseos = ($_SESSION['deseos']);
    } else {
      $deseos = [];
    }
    $deseos[] = $new;
    $_SESSION["deseos"] = ($deseos);
    header('Location: index.php?method=home');
  }

  // elimina el deseo de la lista que selecciones a traves de su id
  public function delete()
  {
    if (isset($_SESSION['deseos'])) {
      $deseos = $_SESSION['deseos'];
    } else {
      $deseos = [];
    }
    $id = $_GET['id'];
    unset($deseos[$id]);
    $_SESSION['deseos'] = $deseos;
    header('Location: index.php?method=home');
  }

  //para vaciar la lista de deseos g
  public function empty()
  {


    $_SESSION['deseos'] = [];
    // setcookie('deseos', '', time() - 1);
    header('Location: index.php?method=home');
  }
//borra todas las sessiones creadas y redirige al metodo login
  public function close()
  {

    session_destroy();
    setcookie(session_name(), '', time() - 7200, '/');
    header('Location: index.php?method=login');
  }
}
