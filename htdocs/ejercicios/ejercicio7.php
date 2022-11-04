<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicio7</title>
</head><body>
<?php

echo "4 PAISES <hr>";

$array1 = ["España","Alemania","Francia","Rumania"];


//accedemos a los elementos del array con corchetes y su posición.

echo "<hr> Recorrido mediante bucle foreach simple <br>";
echo"<ul>";
foreach ($array1 as $element){
    echo "<li>".$element . "</li>";
}
echo"</ul>";

?>
</body></html>