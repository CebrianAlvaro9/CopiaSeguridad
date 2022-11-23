<?php 
namespace Dwes\Galaxias\Pegaso;

const RADIO = 0.75;

function observar($mensaje){
    echo"<br> Estoy dirigiendome a la galaxia $mensaje";


}

class galaxia{
    function __construct()
    {
        $this->nacimiento();
    }

    function nacimiento(){
        echo "<br> Soy una galaxia NUEVA";
    }


    static function  muerte(){
        echo "<br>Me destruyo";
    }
}