<?php
$nombre= 'Juan'; 
$apellidos='Cebrian';
$edad= 20;
$telefono= 666888999;

//En este ejercicio lo hago directamente con echos y prints y usando las comillas simples y normales 
// en los echos pongo lo que seria la parte del html y en los prints la parte del php
//Utilizo el table con los tr y td para dar ese aspecto de tabla

echo'
    <table class="default">
        <tr><td>Nombre</td><td>';print($nombre);echo'</td></tr>';
       echo'<tr><td>Apellidos</td><td>';print($apellidos);echo'</td></tr>';
       echo'<tr><td>Edad</td><td>';print($edad);echo'</td></tr>';
       echo'<tr><td>telefono</td><td>';print($telefono);echo'</td></tr> </table>';


