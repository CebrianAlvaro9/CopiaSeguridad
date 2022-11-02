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

    if (isset($_SESSION['color'])) {
      
      header('Location: index.php?method=colores');
     
    }else{
      include('views/colores.php');
        
    }
    
    
  }

 


  public function cambio(){

    $id = $_GET['color'];

    $_SESSION['color'] = $id;
   
    header('Location: index.php?method=colores');

  }

  
  public function colores(){

    

    if(($_SESSION['color']) == "red"){
        echo '<body style="background-color:red">';
    }
    if(($_SESSION['color']) == "blue"){
        echo '<body style="background-color:blue">';
    }
    if(($_SESSION['color']) =="green"){
        echo '<body style="background-color:green">';
    }
    include('views/home.php');

}
}
