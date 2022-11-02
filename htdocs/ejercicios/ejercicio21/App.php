<?php

class App
{

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

    if (isset($_COOKIE['color'])) {
      
      header('Location: index.php?method=colores');
     
    }else{
      include('views/colores.php');
        
    }
    
    
  }

 


  public function cambio(){

    $id = $_GET['color'];

    setcookie('color', $id, time() + 60*60*2);
   
    header('Location: index.php?method=colores');

  }

  
  public function colores(){

    

    if(($_COOKIE['color']) == "red"){
        echo '<body style="background-color:red">';
    }
    if(($_COOKIE['color']) == "blue"){
        echo '<body style="background-color:blue">';
    }
    if(($_COOKIE['color']) =="green"){
        echo '<body style="background-color:green">';
    }
    include('views/home.php');

}
}
