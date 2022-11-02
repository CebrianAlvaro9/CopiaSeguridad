<?php 



// Para saber los numeros divisibles de un numero utilizamos % ya que nos dice si el resto de una division es 0
// Por tanto realizo un bucle que recorra del 1-10 y vaya comprobando en un if si al dividirlo por 3 el resto es 0
// Si esto se cumple entra dentro del if y lo imprime en la pantalla


for ($i=1; $i <=10 ; $i++) { 
if($i%3==0){
    print($i);
    echo"<br>";
}
}
