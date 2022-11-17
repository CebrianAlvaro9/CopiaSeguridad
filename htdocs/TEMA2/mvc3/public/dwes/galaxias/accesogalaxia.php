<?php

namespace Dwes\Galaxias;

echo "<br> Namespace actual : " . __NAMESPACE__;

/**
 * Direccionamiento namespace:
 * 1- Sin direccionamiento
 * 2- Direccionamiento relativo
 * 3- Direccionamiento absoluto
 */


 include "galaxia1.php";

 echo "<h2> Sin direccionamiento </h2>";
echo "<br> Radio de la galaxia: " . RADIO;
observar("via lactea");
$gl=new Galaxia();
Galaxia::muerte();


echo "<h2> Sin direccionamiento Realativo </h2>";
include "pegaso/pegaso.php";

echo "<br> Radio de la galaxia: " . Pegaso\RADIO;
Pegaso\observar("pegaso");
$gl=new Pegaso\Galaxia();
Pegaso\galaxia::muerte();

echo "<h2> Sin direccionamiento Absoluto </h2>";
echo "<br> Radio de la galaxia: " . \Dwes\Galaxias\Pegaso\RADIO;
\Dwes\Galaxias\Pegaso\observar("pegaso");
$gl=new \Dwes\Galaxias\Pegaso\Galaxia();
\Dwes\Galaxias\Pegaso\galaxia::muerte();


use const \Dwes\Galaxias\RADIO;
use function \Dwes\Galaxias\Pegaso\observar;
use \Dwes\Galaxias\Galaxia;
echo "<br> el radio es: " .RADIO;

echo "<br> observo en pegaso: " . observar("Otra galaxia");
echo "<br>";
echo "<br> objeto de galaxia generico ". new Galaxia();


//Apoder namespace ->class_alias
use \Dwes\Galaxias\Pegaso as Seiya;
use \Dwes\Galaxias as Galaxus;
echo"<br><br>";

Seiya\observar("Obserevando a Seiya");
Galaxus\observar("Obserevando a Galaxus");