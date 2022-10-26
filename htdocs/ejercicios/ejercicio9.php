<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicio8</title>
</head><body>
<?php

echo "4 PAISES <hr>";

$array1 = ["España"];
array_push($array1,"Alemania" );
array_push($array1,"Francia" );
array_push($array1,"Rumania" );


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