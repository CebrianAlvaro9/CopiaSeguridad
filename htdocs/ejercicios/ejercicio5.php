<?php 

/**
 * para saber si es primo divido todo el numero por todos los divisores que tiene si solo tiene 0 y y el mismo sera primo
 * si tiene 1 el mismo y alguno mas no sera primo.
 */
$numero=169;
$primo=0;

echo "1 ";

for($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            echo $i. " ";
            $primo++;

        }
        

}

echo $numero;

if($primo==0){
    echo " Es primo";
}
