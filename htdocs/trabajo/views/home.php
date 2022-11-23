<?php

  session_start();

?>
<!DOCTYPE html>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Bienvenido <?= $_SESSION['name'] ?></h1>

  <h1>LISTA DE CONTACTOS ACTUAL</h1>

  <form action="?method=mostrar" method="post">
  <input type="submit" value="mostrar">
  </form>

<?php
  foreach($registros as $fila){

    
    echo "<br> TIPO: " .$fila[0];
    echo "<br> nombre: " .$fila[1];
    if(!empty($fila[2])){
      echo "<br> apellido:". $fila[2];
    }else{
      echo "<br> email: ". $fila[3];
    }
    echo "<br> direccion: " .$fila[4];
    echo "<br> telefono: " .$fila[5];
    
}
echo "<br><br>NUMERO CONTACTOS:". $registros->rowCount();
?>

  <h1>INSERTAR AGENDA DE CONTACTOS CON ARCHIVO XML</h1>
  <form action="?method=insertarXML" method="post">
  <input type="submit" value="insertar">
  </form>

  <ul>
  <h1>INSERTAR CONTACTO EN LA AGENDA</h1>
  
  <form action="?method=insertar" method="post">

    <label for="">Tipo </label>
    <select name="mtipo" id="sexo">
    <option value="empresa">empresa</option>
    <option value="persona">persona</option>
    </select>
    <br>
    <label for="">nombre </label>
    <input type="text" name="name">
    <br>
    <label for="">apellido  </label>
    <input type="text" name="apellido">
    <br>
    <label for="">direccion </label>
    <input type="text" name="apellido">
    <br>
    <label for="">telefono  </label>
    <input type="text" name="apellido">
    <br>
    <input type="submit" value="insertar">
  </form>

  <h1>ELIMINAR UN CONCTACTO POR NUMERO DE TELEFONO</h1>
  <form action="?method=insertar" method="post">
  <label for="">telefono  </label>
    <input type="text" name="apellido">
    <br>
    <input type="submit" value="borrar">
  </form>
 

  <form action="?method=subirfichero" method="post" enctype="multipart/form-data">
        <p>
        <label for="mifich" >Seleciona un fichero </label>
        <input type="file" name="myfile" id="mifich">
        <input type="submit" name= "envio" value="Enviar Fichero">
        </p>
     
    </form>
    <h4><a href="?method=close">Cerrar sesión</a></h4>
</body>
</html>