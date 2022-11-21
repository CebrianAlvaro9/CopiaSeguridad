<?php 
    class Conexion {

        public static function getConection() {
            $dsn = "mysql:dbname=pdo.sql;host=localhost";
            $usuario= "root";
            $con = null;

            try {

                // Conexión
                $con= new PDO($dsn,$usuario);
               
        
                // Errores
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                // Caracteres utf8
                $con->exec("SET CHARACTER SET utf8");
        
            } catch(Exception $e) {
        
                $con = "ERROR";
        
            } finally {
        
                return $con;
                
            }
        }

    }
?>