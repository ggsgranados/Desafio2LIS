<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Arreglo de tipo asociativo</title>
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

function cargarIngles(){
    $ingles['Basico'] = 25;
    $ingles['Intermedio'] = 15;
    $ingles['Avanzado'] = 10;
    return $ingles;
}

function cargarFrances(){
    $frances['Basico'] = 10;
    $frances['Intermedio'] = 5;
    $frances['Avanzado'] = 2;
    return $frances;
}

function cargarMandarin(){
    $mandarin['Basico'] = 8;
    $mandarin['Intermedio'] = 4;
    $mandarin['Avanzado'] = 1;
    return $mandarin;
}

function cargarRuso(){
    $ruso['Basico'] = 12;
    $ruso['Intermedio'] = 8;
    $ruso['Avanzado'] = 4;
    return $ruso;
}

function cargarPortugues(){
    $portugues['Basico'] = 30;
    $portugues['Intermedio'] = 15;
    $portugues['Avanzado'] = 10;
    return $portugues;
}

function cargarJapones(){
    $japones['Basico'] = 90;
    $japones['Intermedio'] = 25;
    $japones['Avanzado'] = 67;
    return $japones;
}

function cargarIdiomas(){
    $idiomas["Ingles"] = cargarIngles();
    $idiomas["Frances"] = cargarFrances();
    $idiomas["Mandarin"] = cargarMandarin();
    $idiomas["Ruso"] = cargarRuso();
    $idiomas["Portugues"] = cargarPortugues();
    $idiomas["Japones"] = cargarJapones();
    return $idiomas;
}

function mostrarDatos(){
    $idiomas = cargarIdiomas();
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