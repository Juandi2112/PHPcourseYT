<?php

$jsonContenido='[
    {"nombre":"Oscar", "apellido":"Jim"},
    {"nombre":"José", "apellido":"lim"}
    ]';

    $resultado= json_decode($jsonContenido);
    //print_r($resultado);

    foreach ($resultado as $persona){
        echo ($persona->nombre)." ".($persona->apellido)."</br>";
    }

?>