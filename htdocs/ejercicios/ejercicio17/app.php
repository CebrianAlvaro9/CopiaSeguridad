<?php

class App
{
  public function __construct($name = "Aplicación PHP")
  {
    echo "Consturyendo la app <hr>";
    $this->name = $name;
    $this->module = "Desarrollo Web en Entorno Servidor";
    $this->teacher = "Rafael Cabeza";
    $this->student = "Alvaro Cebrian";
  }


public function index()
{
  echo "Estamos en el index<br>";
  echo "Estos es $this->name<br>";
  echo "Me llamo $this->student<br>";
  echo "Estamos estudiando $this->module con el profesor $this->teacher<br>";
}
public function fibonnaci(){

$num1=0;
$num2=1;
$suma=1;
echo"0";
do{ 

echo "<br>";
$suma = $num1 + $num2;
$num1 = $num2;
$num2 = $suma;
print $suma;
}while($suma<1000000);

}

public function potencias2(){
    for ($i=1; $i <=24; $i++) { 
        print pow(2,$i);
        echo "<br>";


}
}

public function obFactorial($numero){ 
    $factorial = 1; 
    for ($i = 1; $i <= $numero; $i++){ 
      $factorial = $factorial * $i; 
    } 
    return $factorial; 
} 

public function factorial(){
    $numero=1;
    $resultado=0;
    do{
        $resultado=obFactorial($numero);
        echo "factorial del " .$numero."! = ". $resultado;
        echo "<br>";
        $numero++;

    }while($resultado<1000000);
}

public function primo(){

    for ($i=1; $i <=10000; $i++) { 
       if(isPrime($i)){
        echo $i."<br>";
       }


}
}




}
 function obFactorial($numero){ 
    $factorial = 1; 
    for ($i = 1; $i <= $numero; $i++){ 
      $factorial = $factorial * $i; 
    } 
    return $factorial; 
} 

function isPrime($num){
    $cont = 0;
       for ($i=1; $i <= $num; $i++) {
          if ($num % $i==0) $cont = $cont + 1;
       }
    if ($cont==2) return true;
       return false;
    }