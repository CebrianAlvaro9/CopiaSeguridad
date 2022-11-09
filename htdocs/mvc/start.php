<?php 
//echo "<h2> Contenido Privado</h2>";

// recurso/metodo/parametro
    // recurso: controladores
    //accion : metodo del controlador
    // parametros : find -> id producto.


require_once "../Controller.php";

$app = new Controller();

// defino variable de peticion url

if(isset($_GET["method"])){
    $method= $_GET["method"];// show, find, create,update
   
}else{
    $method = "home";
}

//2- verificar que el metodo introducido existe


if(method_exists($app,$method)){
    $app->$method();
}else{
    http_response_code(404);
    die("Metodo no enctrado"); //exit;
}

