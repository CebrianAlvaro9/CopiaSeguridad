<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicio10</title>
</head><body>
<?php
//inicializamos
echo "Array ordenado inicializado en la declaración <hr>";
$array1 = array (
    'BASES' => "Russell Westbrook",
    'ESCOLTAS' => "Austin Reaves",
    'ALEROS' => "Austin Reaves",
    'PIVOTS' => "Troy Brown Jr."
);


//foreach clave->elemento
echo "Recorrido mediante bucle foreach con posicion->elemento <br>";
foreach ($array1 as $position=>$element){
    echo $position . ": " . $element . '<br>';
}

?>
</body></html>