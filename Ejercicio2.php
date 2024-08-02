<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio2</title>
</head>
<body>
<?php
    echo "<b>EJERCICIO 2:</b><br><br>";

    $paises = ["ES"=>["España","español"], "US"=>["EEUU", "inglés"], "EN"=>["Inglaterra", "inglés"], "PT"=>["Portugal", "portugués"], "IT"=>["Italia", "italiano"]];

    foreach($paises as $abreviatura=>$valor){
        echo "La abreviatura $abreviatura ";
        for($i = 0; $i < count($valor); $i++){
            if($i == 0){
                echo "corresponde al país $valor[$i] ";
            }else{
                echo "y se habla el idioma $valor[$i]<br>";
            }
        }
    }
?>
    <table>
        <tr>
            <th>Abreviatura</th>
            <th>País</th>
            <th>Idioma</th>
        </tr>
        
        <?php
        foreach($paises as $abreviatura=>$valor) {
            echo "<tr>";

            echo "<td>$abreviatura</td>";

            foreach ($valor as $celda){
                echo "<td>$celda</td>";
            }
            echo "</tr>";
        }
        ?>
        
    </table>
</body>
</html>
