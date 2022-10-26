<?php 


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