<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicio6</title>
</head><body>
<?php

echo "4 PAISES <hr>";

$array1 = ["España","Alemania","Francia","Rumania"];


//accedemos a los elementos del array con corchetes y su posición.



//la podemos recorrer con el bucle foreach de dos maneras:
echo "<hr> Recorrido mediante bucle foreach simple <br>";
echo"<ul>";
foreach ($array1 as $element){
    echo "<li>".$element . "</li>";
}
echo"</ul>";

?>
</body></html>