<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Arreglo de tipo mixto</title>
</head>
<body>
<?php
    mostrarDatos();
?>
        <div class="col-auto">
            <a href = "index.html" class = "btn btn-success">Volver</a>
        </div>
        
</body>
</html>

<?php

function cargarDatos(){
    $idiomas = array(
        "Ingles" => array(
            'Basico' => 25,
            'Intermedio' => 15,
            'Avanzado' => 10
        ),
        "Frances" => array(
            'Basico' => 10,
            'Intermedio' => 5,
            'Avanzado' => 2
        ),
        "Mandarin" => array(
            'Basico' => 8,
            'Intermedio' => 4,
            'Avanzado' => 1
        ),
        "Ruso" => array(
            'Basico' => 12,
            'Intermedio' => 8,
            'Avanzado' => 4
        ),
        "Portugues" => array(
            'Basico' => 30,
            'Intermedio' => 15,
            'Avanzado' => 10
        ),
        "Japones" => array(
            'Basico' => 90,
            'Intermedio' => 25,
            'Avanzado' => 67
        )
    );
    return $idiomas;
};

function mostrarDatos(){
    $idiomas = cargarDatos();
    echo "<div class=\"table-responsive\">";
    foreach ($idiomas as $idioma => $niveles) {        
        echo "<table class=\"table table-bordered\">";
        echo "<thead>";
        echo "<tr>";
        echo "<td class=\"table-primary\">".$idioma."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td class=\"table-info\">Nivel</td>";
        echo "<td class=\"table-info\">Alumnos</td>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach ($niveles as $nivel => $cantidad) {
            if ($nivel == "Basico") {
                echo "<tr class=\"table-success\">";
            }
            elseif ($nivel == "Intermedio") {
                echo "<tr class=\"table-warning\">";
            }
            else{
                echo "<tr class=\"table-danger\">";
            }
                echo "<td>".$nivel."</td>";
                echo "<td>".$cantidad."</td>";
                echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";        
    }    
    echo "</div>";    
};

?>