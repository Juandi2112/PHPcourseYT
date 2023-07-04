<?php

session_start();

$_SESSION["usuario"]="Juandi";
$_SESSION["estatus"]="logged";

echo "Sesión iniciada".":</br>";

echo "Ususario:".$_SESSION["usuario"]." Estatus: ".$_SESSION["estatus"];


?>