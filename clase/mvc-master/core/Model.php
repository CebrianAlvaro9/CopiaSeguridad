<?php
namespace Core;

use PDO;
use PDOException;


class Model
{
   protected static function db()
    {
        $dsn = 'mysql:dbname=mvc;host=localhost';
        $usuario = 'root';
       
        try {
            $db = new PDO($dsn, $usuario);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
        return $db;
    }
}