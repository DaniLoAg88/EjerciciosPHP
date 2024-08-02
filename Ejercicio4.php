<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4</title>
</head>
<body>
<?php
    echo "<b>EJERCICIO 4:</b><br><br>";

    $abecedario = "A B C D E F G H I J K L M N Ñ O P Q R S T U V W X Y Z";
    $arrayABC = explode(" ", $abecedario);

    //Método alternativo (pero no coge la Ñ): 
    //$abecedario = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    //$arrayABC = str_split($abecedario);

    for($i = count($arrayABC)-1; $i >= 0; $i--){
        echo "$i: $arrayABC[$i]<br>";
    }
?>
</body>
</html>
