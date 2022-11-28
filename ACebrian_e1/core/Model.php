<?php

namespace Core;

use PDO;
use PDOException;

//
/**
*
*/
class Model
{

    function __construct()
    {
        # code...
    }

    protected static function db()
    {
        
        try {
            $db = new PDO('mysql:dbname=mvc;host=localhost', 'root');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
        return $db;
    }
}
