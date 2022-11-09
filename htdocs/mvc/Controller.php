<?php

require_once "product.php";
class Controller 
{

    function __construct(){
        //const vacio
    }
    /*funcion que :
    - recoge a todos los productos
    - llama a vista de inventario
    */
    
    public function home(){
        $products= product::all();
        require "views/home.php";
    }

    /* funcion que:
    - mostrar un producto en particular, el id como parametro
    - llamar vista prodcuto en concreto.
    */

    public  function show(){

        $id = $_GET["id"];
        $product= product::find($id);
        require "views/show.php";
    }

}//fin_clase
 