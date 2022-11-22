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

  <h2>Lista de deseos</h2>


  <ul>
  
  

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