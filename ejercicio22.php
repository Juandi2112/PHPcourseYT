<?php

$frutas = array ("f"=>"fresa", "m"=>"Manzana", "p"=>"Pera");
 
print_r($frutas);

echo $frutas["m"],"</br>";

foreach($frutas as $indice=>&$valor){

    echo $valor."</br>";

    echo $frutas[$indice]."</br>";

}


?>