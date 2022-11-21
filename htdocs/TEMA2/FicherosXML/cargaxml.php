<?php 
    $datos = simplexml_load_file("empleados.xml");
    var_dump($datos);

    if ($datos==false){
        echo "<br> No se ha podido leer el xml";
        exit();

    }
    var_dump($datos);
    echo "<br> Recorro el fichero: ";
    foreach($datos as $dato){
        print_r($dato);
    }

