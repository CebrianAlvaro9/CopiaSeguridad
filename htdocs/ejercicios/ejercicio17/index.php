<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
  <p>Elige la funcion que quieres realizar</p>
  <p>
    <input type="submit" name="respuesta" value="Index">
    <input type="submit" name="respuesta1" value="Fibionnaci">
    <input type="submit" name="respuesta2" value="Potencias de 2">
    <input type="submit" name="respuesta3" value="factoriales">
    <input type="submit" name="respuesta4" value="primos">
    
  </p>
</form>
<?php

require_once "App.php";
$app = new App;

if (isset($_GET['respuesta'])) {

$app->index();
}
if (isset($_GET['respuesta1'])) {

    $app->fibonnaci();
    }

    if (isset($_GET['respuesta2'])) {

        $app->potencias2();
        }
    
        if (isset($_GET['respuesta3'])) {

            $app->factorial();
            }
            if (isset($_GET['respuesta4'])) {

                $app->primo();
                }

?>
</body>
</html>


