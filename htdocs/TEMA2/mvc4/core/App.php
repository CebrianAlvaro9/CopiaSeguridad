<?php

class App {
    function __construct()

    {
        if(isset($_GET["url"])&& !empty($_GET["url"])){
            $url=$_GET["url"];
        
        }else{
            $url = "home";
        }
        // /product /show/5 -> product: recurso; show: accion ; 5: parametro

        $arguments = explode("/", trim($url,'/'));

        $controllerName = array_shift($arguments); //product; ProductController
        $controllerName = ucwords($controllerName). "Controller";
        
        if(count($arguments)){
            $method = array_shift($arguments); // show 

        }else{
            $method = 'index';
        }

        // voy a vargar el controlador. ProductController.php

        $file = "../app/controllers/$controllerName" . ".php";

        if(file_exists($file)){
            require_once $file;
        }else{
            http_response_code(404);
            die("No encontrado");
        }
    // existe el metodo en el controlador?
        $controllerObject = new $controllerName;
        
        if(method_exists($controllerObject,$method)){
            $controllerObject->$method($arguments);
        }else{
            http_response_code(404);
            die("No encontrado");
        }

    }// fin constructor
}