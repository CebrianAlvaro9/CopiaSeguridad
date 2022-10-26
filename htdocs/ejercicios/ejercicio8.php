<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicio 8</title>
</head><body>
<?php
//inicializamos
// $array1 = array();
// $array1 = [];

$array1[]="Lonnie Walker IV";
array_push($array1,"Russell Westbrook" );
array_push($array1,"Patrick Beverley" );
array_push($array1,"Kendrick Nunn" );
array_push($array1,"Dennis Schroder" );

//la podemos recorrer con el bucle foreach de dos maneras:

foreach ($array1 as $element){
    echo $element . '<br>';
}

?>
</body></html>