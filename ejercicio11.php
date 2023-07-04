<?php

if($_POST){

    $valorA=$_POST["ValorA"];
    $valorB=$_POST["ValorB"];
    //Suma
    $suma= $valorA + $valorB;

    echo $suma;

    if($valorA==$valorB){
        echo "El valor de A es igual que el valor de B";

        if($valorA == 4 ){
            echo "El valor es 4";

        }

        if($valorA == 5 ){
            echo "El valor es 5";

        }

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
    <form action="ejercicio11.php" method="post">
        Valor A:
        <input type="text" name="ValorA" id="">
        </br>
        Valor B:
        <input type="text" name="ValorB" id="">

        <input type="submit" value="Calcular">
    </form>
</body>

</html>