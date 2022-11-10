<?php 
//my sql:dbname<nombre_bbdd>; host<ip | nombre>

$dsn = "mysql:dbname=demo;host=localhost";
$usuario= "root";


try{
    $bd = new PDO($dsn,$usuario);
    $sql = "select nombreusu, password from credenciales";
    $registros = $bd->query($sql);
    echo"<br> Numero de registros devueltos: ". $registros-> rowCount();
    if ($registros->rowCount()>0){
        foreach($registros as $fila){
            echo "<br> Nombre de usuario: " .$fila["nombreusu"];
            echo "<br> Password: " .$fila["password"];
        }
    }else{
        echo "No hay filas";
    }
    echo "<br>";

}catch(PDOException $e){
    echo "Mensaje de la excepcion : ". $e-> getMessage();
}

