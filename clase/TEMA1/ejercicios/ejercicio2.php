
<?php 

// poniendo const se declara una constante 

const PRODUCTO= 8;

//Basicamente lo q hace es un bucle de 10 iteraciones en el cual cada vez se multiplica por la constante 
// de forma que en el echo se vaya proyectando la tabla del 8

for ($multiplicador=1; $multiplicador <=10 ; $multiplicador++) { 
	echo PRODUCTO . " X " . $multiplicador . " = " . PRODUCTO * $multiplicador;
	echo "<br>";
}
 ?>