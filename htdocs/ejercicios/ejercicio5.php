<?php 


$numero=169;
$primo=0;

for($i = 2; $i < $numero; $i ++) {
        if ($numero % $i == 0) {
            echo $i. " ";
            $primo++;

        }
        

}
if($primo==0){
    echo " Es primo";
}
 ?>