<?php

namespace App\Controllers;

require "../models/Product.php";

class ProductController{
    function __construct()
    {
        echo "<br> Constructor clase PRODUCTCONTROLLER";

    }//FIN CONSTRUCCTOR

    public function index()
    {
        //buscar datos
        $products = \App\Models\Product::all();
        //pasar a la vista
        require('../app/views/home.php');
    }// metodo home de Controller de mvc

   
}