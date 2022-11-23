<?php

class Login{
    protected $nombreusu= null;
    protected $password = null;


    // recuperar filas:

    /*
    1- prerarar la consulta -> prepare
    2- establecer el modo de recuperacion: FETCH_CLASS, FETCH_ASSOC
    3- ejecutar la consulta -> execute
    4- Recuperar los registros: fetch (un registro) / fetchAll(devuelve todos llos registros)*/ 

    public static function all(){
        $dsn = "mysql:dbname=demo;host=localhost";
        $usuario= "root";

        try{
            $db= new PDO($dsn,$usuario);
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql="SELECT * FROM credenciales";
            $sentencia = $db->prepare($sql);
           
            //establece la forma de recuperar registros.
            $sentencia->setFetchMode(PDO:: FETCH_CLASS,"Login");
            $sentencia->execute(); //3 ejecuta la sentencia

            //primera forma de hacerlo

          /*
           while($obj=$sentencia->fetch()){
            echo "<br> NOMBRE : " . $obj->nombreusu;
            echo "<br> PASSWORD : " . $obj->password;
           
           }
           */
          
           echo "<br> FILAS:". $sentencia->rowCount();
            //Forma de hacerlo con fetch all
            
            $credenciales=$sentencia->fetchAll(PDO::FETCH_CLASS,"Login");

           foreach($credenciales as $credencial){
            echo "<br> NOMBRE : ". $credencial->nombreusu;
            echo "<br> CONTRASEÑA : ". $credencial->password;
           }



        }catch(PDOException $e){
            echo"<br> error conexion : " .$e->getMessage();
        }

    }//fin_all



}

//recuperando registros esta PARTE VA EN EL EL CONTROLLER;

echo "<h2> Recuperando registros</h2>";
Login::all();