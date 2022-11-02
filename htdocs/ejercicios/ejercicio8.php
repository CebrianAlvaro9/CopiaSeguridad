<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicio 8</title>
</head><body>
<?php
//inicializamos
// $array1 = array();
// $array1 = [];

//array_push para añadir elementos a un array en concreto

$array1[]="Lonnie Walker IV";
array_push($array1,"Russell Westbrook" );
array_push($array1,"Patrick Beverley" );
array_push($array1,"Kendrick Nunn" );
array_push($array1,"Dennis Schroder" );

//simplemente recorro y proyecto

foreach ($array1 as $element){
    echo $element . '<br>';
}

?>
</body></html>