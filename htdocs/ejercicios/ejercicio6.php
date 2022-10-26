<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicio6</title>
</head><body>
<?php

echo "15 incial de los lakers <hr>";

$array1 = ["Russell Westbrook",	"Patrick Beverley",	"Kendrick Nunn","Dennis Schroder","Austin Reaves"];

$array2 = array("Russell Westbrook",	"Patrick Beverley",	"Kendrick Nunn","Dennis Schroder","Austin Reaves");
//accedemos a los elementos del array con corchetes y su posición.



//la podemos recorrer con el bucle foreach de dos maneras:
echo "<hr> Recorrido mediante bucle foreach simple <br>";
echo"<ul>";
foreach ($array1 as $element){
    echo "<li>".$element . "</li>";
}
echo"</ul>";
//foreach clave->elemento
echo "<hr> Recorrido mediante bucle foreach con posicion->elemento <br>";
echo"<ul>";
foreach ($array2 as $position=>$element){
    echo "<li>".$position . ": " . $element . "</li>";
}
echo"</ul>";
?>
</body></html>