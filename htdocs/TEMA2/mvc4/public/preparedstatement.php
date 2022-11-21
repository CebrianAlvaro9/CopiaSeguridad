<?php
$dsn = "mysql:dbname=demo;host=localhost";
$usuario= "root";

/**
 * 1- PREPARAR la consulta -> prepare
 * 2- vincular los datos -> bindParam/bindValue
 * 3- ejecutar la sentencia-> execute(); /query , exec)
 */


try{
    $bd = new PDO($dsn,$usuario);

    $bd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sentencia = $bd-> prepare("INSERT INTO credenciales (nombreusu, password, dni) VALUES (?,?,?)");
    $nombre = "alicia";
    $clave = "aaa";
    $dnii = "33";

    $sentencia->bindParam(1,$nombre);
    $sentencia->bindParam(2,$clave);
    $sentencia->bindParam(3,$dnii);
    $sentencia->execute();

    $sql = "select nombreusu, password, dni from credenciales";
    $registros = $bd->query($sql);
    echo"<br> Numero de registros devueltos: ". $registros-> rowCount();

    if ($registros->rowCount()>0){
        foreach($registros as $fila){
            echo "<br> Nombre de usuario: " .$fila[0];
            echo "<br> Password: " .$fila[1];
            echo "<br> Dni:". $fila[2];
        }
    }else{
        echo "No hay filas";
    }
    echo "<br>";

    echo "<br> Exito";


}catch(PDOException $e){
    echo "Mensaje de la excepcion : ". $e-> getMessage();
}
