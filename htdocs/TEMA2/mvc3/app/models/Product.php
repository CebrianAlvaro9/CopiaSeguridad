<?php
namespace App\Models;
//fichero que simula el modelo con datos
use PDO;
use Core\Model;
require_once '../core/Model.php';

class Product extends Model{
    
    public static function all()
    {
        $db = Product::db();
        $statement = $db->query('SELECT * FROM products');
        $products = $statement->fetchAll(PDO::FETCH_CLASS, Product::class);

        return $products;
    }
        public static function find($id){  }
        public function insert(){  }
        public function delete(){  }
        public function save(){ }
    
}
        

