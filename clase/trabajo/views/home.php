<?php

  session_start();

?>
<!DOCTYPE html>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
<link rel="stylesheet" href="views/views.css">
</head>
<body>




  <header>
  <h1>AGENDA CONTACTOS</h1>
  </header>

<div class="izq"><h1>Bienvenido <?= $_SESSION['name'] ?></h1>

<h3>LISTA DE CONTACTOS ACTUAL</h3>

<form action="?method=mostrar" method="post">
<input type="submit" value="mostrar">
</form>
<br>
<form action="?method=ocultar" method="post">
<input type="submit" value="ocultar">
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
 echo "<br>";
 
}

?>

</div>
<div class="right">
<h3>INSERTAR AGENDA DE CONTACTOS CON ARCHIVO XML</h3>
 <form action="?method=insertarXML" method="post">
 <input class="btn btn-dark" type="submit" value="insertar">
 </form>



  <h3>INSERTAR CONTACTO EN LA AGENDA</h3>
  
  <form action="?method=insertar" method="post">

    <label for="">Tipo </label>
    <input type="text" name="tipo">
    <br>
    <label for="">nombre </label>
    <input type="text" name="name">
    <br>
    <label for="">apellido  </label>
    <input type="text" name="apellido">
    <br>
    <label for="">email  </label>
    <input type="text" name="email">
    <br>
    <label for="">direccion </label>
    <input type="text" name="direccion">
    <br>
    <label for="">telefono  </label>
    <input type="number" name="telefono">
    <br>
    <input type="submit" value="insertar">
  </form>
  <?php echo $respuesta1?>
  <h3>ELIMINAR UN CONCTACTO POR NUMERO DE TELEFONO</h3>
  <form action="?method=eliminar" method="post">
  <label for="">telefono  </label>
  <input type="number" name="telefono">
    <input type="submit" value="borrar">
  </form>
  <?php echo $respuesta2?>
  <h3>VISUALIZAR INFORMACION DE UN CONTACTO</h3>
  <form action="?method=infoContacto" method="post">
  <label for="">telefono  </label>
  <input type="number" name="telefono">
  <input type="submit" value="mostrar">
  </form>
  <?php echo $respuesta4?>
  <?php

  foreach($contacto as $fila){

    
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



?>

<h3>ACTUALIZAR UN CONTACTO POR NUMERO DE TELEFONO</h3>
  
  <form action="?method=actualizar" method="post">
  
    <label for="">telefono  </label>
    <input type="text" name="telefono">
    <br>
    <label for="">Tipo </label>
    <input type="text" name="tipo">
    <br>
    <label for="">nombre </label>
    <input type="text" name="name">
    <br>
    <label for="">apellido  </label>
    <input type="text" name="apellido">
    <br>
    <label for="">email  </label>
    <input type="text" name="email">
    <br>
    <label for="">direccion </label>
    <input type="text" name="direccion">
    <br>
    <label for="">telefono  </label>
    <input type="number" name="telefono2">
    <br>
    <input type="submit" value="insertar">
  </form>
  <?php echo $respuesta3?>
  <form action="?method=subirfichero" method="post" enctype="multipart/form-data">
        <p>
        <label for="mifich" >Seleciona un fichero </label>
        <input type="file" name="myfile" id="mifich">
        <input type="submit" name= "envio" value="Enviar Fichero">
        </p>
     
    </form>
    <?php
    echo $flag
        
   ?>
</div>
 

    <h4><a href="?method=close">Cerrar sesión</a></h4>


</body>
</html>