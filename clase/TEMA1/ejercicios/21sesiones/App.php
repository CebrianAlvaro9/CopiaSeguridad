<?php

class App
{

   //inicio de la app recoge el metodo home y lo ejecuta
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



  // Si existe la session rederige al metodo colores si no simplemente muestra la pestaña con los colores
     
    public function home()
    {

    if (isset($_SESSION['color'])) {
      
      header('Location: index.php?method=colores');
     
    }else{
      include('views/colores.php');
        
    }
    
    
  }

 
  // recoge el id de la pestaña colores y crea una cookie con el

  public function cambio(){

    $id = $_GET['color'];

    $_SESSION['color'] = $id;
   
    header('Location: index.php?method=colores');

  }
 //Si existe la cookie con el color correspondiente cambia el color del fondo del home
  
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
