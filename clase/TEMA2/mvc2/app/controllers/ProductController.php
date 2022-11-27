<?php

require "../app/models/Products.php";
//
class ProductController{
    function __construct()
    {
        echo "<br> Constructor clase PRODUCTCONTROLLER";

    }//FIN CONSTRUCCTOR

    function index(){
        echo "<br> index clase PRODUCTCONTROLLER";
        $products= Product::all();
        require "../app/views/home.php";
    }// metodo home de Controller de mvc

    function show(){

        echo "<br> show clase PRODUCTCONTROLLER";
        $id = $_GET["id"];
        $product = Product::find($id);
        require "../app/views/show.php";

    }// 
}