<?php

class unaClase {

    public static function unMetodo(){
        echo "Hola soy un método estático";
    }

}

$obj = new unaClase();
$obj -> unMetodo();

unaClase::unMetodo();

?>