<?php

$archivo="contenido.txt";

$archivoAbierto=fopen($archivo, "r");

$contenido=fread($archivoAbierto, filesize($archivo));

echo $contenido;

?>