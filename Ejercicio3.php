<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio3</title>
</head>
<body>
<?php
    echo "<b>EJERCICIO 3:</b><br><br>";

    $mascotas = ["Pancho"=>"Golden", "Zeus"=>"Alaskan malamute", "Frankfurt"=>"Perro salchicha", "Manta"=>"Gato persa", "Koyak"=>"Gato egipcio"];

    foreach($mascotas as $nombre=>$raza){
        echo "$nombre es de raza $raza<br>";
    }
?>
</body>
</html>
