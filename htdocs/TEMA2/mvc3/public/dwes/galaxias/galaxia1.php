<?php 
namespace Dwes\Galaxias;

const RADIO = 1.25;

function observar($mensaje){
    echo"<br> Estoy mirando a la galaxia $mensaje";


}

class galaxia{
    function __construct()
    {
        $this->nacimiento();
    }

    function nacimiento(){
        echo "<br> Soy una galaxia";
    }


    static function  muerte(){
        echo "<br>Me destruyo";
    }
    function __toString()
    {
        return "esto son galaxias";
    }
}