<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Arreglo de tipo Anidado</title>
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

function cargarIdiomas(){
    $idiomas = array(
        array(25,15,10),
        array(10,5,2),
        array(8,4,1),
        array(12,8,4),
        array(30,15,10),
        array(90,25,67)
    );
    return $idiomas;
}


function mostrarDatos(){
    $idiomas = cargarIdiomas();
    echo "<div class=\"table-responsive\">";
    foreach ($idiomas as $idioma => $niveles) {        
        echo "<table class=\"table table-bordered\">";
        echo "<thead>";
        echo "<tr>";
        if ($idioma == 0) {
            echo "<td class=\"table-primary\">Ingles</td>";
        }
        elseif ($idioma == 1) {
            echo "<td class=\"table-primary\">Frances</td>";
        }
        elseif ($idioma == 2) {
            echo "<td class=\"table-primary\">Mandarin</td>";
        }
        elseif ($idioma == 3) {
            echo "<td class=\"table-primary\">Ruso</td>";
        }
        elseif ($idioma == 4) {
            echo "<td class=\"table-primary\">Portugues</td>";
        }
        elseif ($idioma == 5) {
            echo "<td class=\"table-primary\">Japones</td>";
        }
        echo "</tr>";
        echo "<tr>";
        echo "<td class=\"table-info\">Nivel</td>";
        echo "<td class=\"table-info\">Alumnos</td>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach ($niveles as $nivel => $cantidad) {
            if ($nivel == 0) {
                echo "<tr class=\"table-success\">";
                echo "<td>Basico</td>";
            }
            elseif ($nivel == 1) {
                echo "<tr class=\"table-warning\">";
                echo "<td>Intermedio</td>";
            }
            else{
                echo "<tr class=\"table-danger\">";
                echo "<td>Avanzado</td>";
            }
                
                echo "<td>".$cantidad."</td>";
                echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";        
    }    
    echo "</div>";    
};

?>