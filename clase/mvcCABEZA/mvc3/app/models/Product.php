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
    public static function find($id)
    {
        $db = Product::db();
        $statement = $db->query("SELECT * FROM products WHERE id=$id");
        $product = $statement->fetchAll(PDO::FETCH_CLASS, Product::class);

        return $product;
    }
    //find con execute pero no me funciona
    public static function findDefectuoso($id)
    {
        $db = Product::db();
        $stmt = $db->prepare('SELECT * FROM products WHERE id = :id');
        $stmt->bindValue(':id', $id);
    ;
        $stmt->setFetchMode(PDO::FETCH_CLASS, Product::class);
        $product = $stmt->fetch(PDO::FETCH_CLASS);

        return $product;
    }
    
    public function insert()
    {
        $db = Product::db();
        $stmt = $db->prepare('INSERT INTO products(name,type_id, price, fecha_compra) VALUES(:name, :type_id, :price, :fecha_compra)');
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':type_id', $this->type_id);
        $stmt->bindValue(':price', $this->price);
        $stmt->bindValue(':fecha_compra', $this->fecha_compra);
        
        return $stmt->execute();

    }
        public function delete(){  }
        public function save(){ }
    
}
        

