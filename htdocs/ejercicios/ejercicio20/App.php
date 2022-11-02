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
      $method = 'login';
    }
  
    $this->$method();      
  }

  public function login()
  {
    
    if (isset($_SESSION['name'])) {
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
   
    //guardar en session
   
    $_SESSION['name']=$name;
    $_SESSION['password']=$password;
    //reenviar a "home"
    header('Location: index.php?method=home');
  }

  public function home()
  
  {
    
    
    if (!isset($_SESSION['name'])) {
      header('Location: ?method=login');
      return;
    }
    if (isset($_SESSION['deseos'])) {
      $deseos = unserialize($_SESSION['deseos']);
    } else {
      // $deseos = array();
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
      $deseos = unserialize($_SESSION['deseos']);
    } else {
      $deseos = [];
    }
    $deseos[] = $new;
    $_SESSION["deseos"] =serialize($deseos);
    header('Location: index.php?method=home');
  }

  public function delete()
  {
   
    
    // echo "<pre>";
    // print_r($_GET);
    if (isset( $_SESSION['deseos'])) {
      $deseos = unserialize( $_SESSION['deseos']);
    } else {
      $deseos = [];
    }
    $id = $_GET['id'];
    unset($deseos[$id]);
    
    session_destroy();
    setcookie(session_name('deseos',$deseos[$id]),'',time()-7200,'/');
  
    header('Location: index.php?method=home');
  }

  public function empty()
  {
   
   
    $_SESSION["deseos"] ='';
    // setcookie('deseos', '', time() - 1);
    header('Location: index.php?method=home');    
  }

  public function close()
  {
    session_start();
    session_destroy();
    setcookie(session_name(),'',time()-7200,'/');
    header('Location: index.php?method=login');
  }
}
