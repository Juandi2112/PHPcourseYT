<?php

if($_POST){

    $valorA=$_POST["ValorA"];
    $valorB=$_POST["ValorB"];
 
    if(($valorA > $valorB) && ($valorA != $valorB)){
        echo "El valor A es diferente y mayor que el valor B";
    
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritméticos</title>
</head>

<body>
    <form action="ejercicio9.php" method="post">
        Valor A:
        <input type="text" name="ValorA" id="">
        </br>
        Valor B:
        <input type="text" name="ValorB" id="">

        <input type="submit" value="Calcular">
    </form>
</body>

</html>