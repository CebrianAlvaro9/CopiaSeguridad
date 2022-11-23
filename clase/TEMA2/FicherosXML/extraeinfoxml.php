<?php 
$datos = simplexml_load_file("empleados.xml");

$apellidos = $datos->xpath("//apellidos");
$atri = $datos->xpath("//apellidos");

foreach ($datos->children() as $fila) {
    $atributo = $fila->attributes(); 
    $nombre = $fila->nombre;
    $apellido = $fila->apellidos;
    $edad = $fila->edad;
   echo "atributo = ".$atributo['codEmple']." ,nombre=$nombre , apellido = $apellido, edad= $edad <br>";
}

foreach($apellidos as $apellido){
    echo "<br> Apellido";
    print_r($apellido);

}
