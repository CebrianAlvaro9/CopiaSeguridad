<?php

class App
{

  function __construct()
  {
    session_start();   
  }

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
    if (isset($_SESSION['name'])) 
    {
      header('Location: ?method=home');
      return;
    }
    include('views/login.php');
  }

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
    if (isset($_SESION['deseos'])) {
      $deseos = $_SESION['deseos'];
    } else {
      $deseos = [];
    }
    include('views/home.php');
  }

  public function new()
  {
    if (!isset($_POST['new'])) {
      header('Location: index.php?method=home');
      return;
    }
    $new = $_POST['new'];
    if (isset($_SESSION['deseos'])) {
      $deseos = $_SESSION['deseos'];
    } else {
      $deseos = [];
    }
    $deseos[] = $new;
    $_SESSION['deseos'] = $deseos;
    header('Location: index.php?method=home');
  }

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

  public function empty()
  {
    $_SESSION['deseos']=[];
    header('Location: index.php?method=home');    
  }

  public function close()
  {
    session_destroy();
    header('Location: index.php?method=login');
  }
}
