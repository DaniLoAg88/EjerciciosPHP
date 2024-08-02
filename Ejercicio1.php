<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio1</title>
</head>
<body>
<?php
    echo "<b>EJERCICIO 1:</b><br><br>";

    $personas = ["Fernando", "Isabel", "Felipe", "Ricardo", "Sandra", "Cristina"];

    for($i = 0; $i < count($personas); $i++){
        echo "Hola $personas[$i]!<br>";
    }
?>
</body>
</html>
