<?php

namespace App\Controllers;

use Product;

require "../app/models/Product.php";

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
    public function show($id)
    {
        //args es un array, tomamos el id con uno de estos métodos
        // $id = (int) $args[0];
        $id = $_GET["id"]; 
        $product = \App\Models\Product::find($id);
        require('../app/views/show.php');        
    }
    //show que no funciona nose porq preguntar a cabeza
    public function showDefectuoso($args)
    {
        //args es un array, tomamos el id con uno de estos métodos
        // $id = (int) $args[0];
        $id = $args[0];
        $product = \App\Models\Product::find($id);
        require('../app/views/show.php');        
    }
    public function create()
{
    require '../app/views/create.php';
}

public function store()
{
    $product = new Product();
    $product->name = $_REQUEST['name'];
    $product->type_id = $_REQUEST['type_id'];
    $product->price = $_REQUEST['price'];
    $product->fecha_compra = $_REQUEST['fecha_compra'];
    $product ->insert();
 
    header('Location:../public/product/show');
}
}