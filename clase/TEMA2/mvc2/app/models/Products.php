<?php

//fichero que simula el modelo con datos

use Core\Model;

class Product extends Model{
    const PRODUCTS = [
        array(1,'cortacesped'),
        array(2,'Pizarra'),
        array(3,'billar'),
        array(4,'Dardos'),
    ];

function __construct(){/*cons vacio*/}

public static function all(){
    return Product::PRODUCTS;
}

//devolver productos
public static function find($id){
    return Product::PRODUCTS[$id-1];
}

}

