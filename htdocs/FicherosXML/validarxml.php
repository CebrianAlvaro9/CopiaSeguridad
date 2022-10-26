<?php

    $dept = new DOMDocument();
    $dept -> load("empleados.xml");
    $respuesta = $dept->schemaValidate("departamento.xsd");
    echo $respuesta ? "Documento valido" : "Documento INVALIDO";
