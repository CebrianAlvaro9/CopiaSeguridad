<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Bienvenido a la app de colores</h1>
    
  <br>
  <h2><a href="?method=colores">click para cambiar de color </a></h2>
  <br><br>
  <h3><a href="?method=borrar">Borrar fondo y cookie </a></h3>

  <?php
    if(isset($_SESSION["color"])){
      echo "<body style='background-color: " . $_SESSION["color"] . " '>";
    }
  ?>
</body>
</html>