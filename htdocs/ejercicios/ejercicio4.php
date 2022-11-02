<?php 


/** Se trata de una secuencia infinita de números naturales; a partir del 0 y el 1, se van 
 * sumando a pares, de manera que cada número es igual a la suma de sus dos anteriores, de manera que: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55…
 * para ello recorro del 1 al 0 y declaro las variables num1=0 num2=1 y suma=1
 * y cada vez q recorre un numero hace la suma y se le asigna num1 = num2 y num2 = suma
 */

$num1=0;
$num2=1;
$suma=1;
echo"0";

for ($i=1; $i <=9 ; $i++) { 

echo "<br>";
$suma = $num1 + $num2;
$num1 = $num2;
$num2 = $suma;
print $suma;
}
 ?>