<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Biblioteca</title>
</head>
<body class="container">
    <form method="post">
        
        <div class="form-group">
          <label for="autor">Autor:</label>
          <input type="text" name="autor" class="form-control" id="autor" placeholder="Ingrese el autor" required>
        </div>

        <div class="form-group">
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Ingrese el titulo" required>
        </div>

        <div class="form-group">
            <label for="edicion">Numero de edicion:</label>
            <input type="number" name="edicion" class="form-control" id="edicion" placeholder="Ingrese el numero de edicion" min="1" step="1" required>
        </div>

        <div class="form-group">
            <label for="lugar">Lugar de publicacion:</label>
            <input type="text" name="lugar" class="form-control" id="lugar" placeholder="Ingrese el lugar de publicacion" required>
        </div>

        <div class="form-group">
            <label for="editorial">Editorial:</label>
            <input type="text" name="editorial" class="form-control" id="editorial" placeholder="Ingrese la editorial" required>
        </div>

        <div class="form-group">
            <label for="anyo">Año de la edicion:</label>
            <input type="number" name="anyo" class="form-control" id="anyo" placeholder="Ingrese el año de la edicion" min="1300" step="1" required>
        </div>

        <div class="form-group">
            <label for="paginas">Numero de paginas:</label>
            <input type="number" name="paginas" class="form-control" id="paginas" placeholder="Ingrese el numero de paginas" min="1" step="1" required>
        </div>

        <div class="form-group">
            <label for="notas">Notas:</label>
            <input type="text" name="notas" class="form-control" id="notas" placeholder="Notas adicionales" required>
        </div>

        <div class="form-group">
            <label for="isbn">ISBN:</label>
            <input type="text" name="isbn" class="form-control" id="isbn" placeholder="Ingrese el ISBN" required>
        </div>
        
        <button type="submit" name="ingresar" class="btn btn-primary">Ingresar</button>

      </form>

      <div class="container">
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["ingresar"]) ) {
            

            $d= new ListaLibros();
            $listadatos = $d->agregarLibro();
            echo '<hr/>';
            if ($listadatos==500) {
                echo("Compruebe los datos, ERROR");
            }
            else {
                foreach($listadatos as $valores){
                    echo "  <div class='card' style='width: 18rem;''>";
                    echo "  <div class='card-body'>";
                    echo "    <h5 class='card-title'>Datos del libro</h5>";
                    echo "    <p class='card-text'>";
                    echo "       ". $valores->get_autor().". "."".$valores->get_titulo().".<sup>".$valores->get_edicion()."</sup> (".$valores->get_anyo().")";
                    echo '       <br>';
                    echo "       Lugar: ".$valores->get_lugar();
                    echo '       <br>';
                    echo "       Editorial: ". $valores->get_editorial();
                    echo '       <br>';
                    echo "       Paginas: ". $valores->get_paginas();
                    echo '       <br>';
                    echo "       Notas: ".$valores->get_notas();
                    echo '       <br>';
                    echo "       ISBN: ". $valores->get_isbn();
                    echo '       <br>';
                    echo "    </p>";
                    echo "  </div>";
                    echo "</div>";
                }
            }
            
        }
      ?>
      </div>
</body>
</html>


<?php    
    
    function validarAutor(){
        $regex = "/^[A-ZÑÁÉÍÓÚ][a-zA-ZñÑáéíóúÁÉÍÓÚ,]*$/";
        if (preg_match($regex, $_POST["autor"])) {
            return true;
        }
    }

    function validarTitulo(){
        $regex = "/^[A-ZÑÁÉÍÓÚ][a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/";
        if (preg_match($regex, $_POST["titulo"])) {
            return true;
        }
    }

    function validarEdicion(){
        $regex = "/^[1-9][0-9-]*$/";
        if (preg_match($regex, $_POST["edicion"])) {
            return true;
        }
    }

    function validarLugar(){
        $regex = "/^[A-ZÑÁÉÍÓÚ][a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/";
        if (preg_match($regex, $_POST["lugar"])) {
            return true;
        }
    }

    function validarEditorial(){
        $regex = "/^[A-ZÑÁÉÍÓÚ][a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/";
        if (preg_match($regex, $_POST["editorial"])) {
            return true;
        }
    }

    function validarAnyo(){
        $regex = "/^[1-2][0-9]{3}$/";
        if (preg_match($regex, $_POST["anyo"])) {
            return true;
        }
    }

    function validarPaginas(){
        $regex = "/^[1-9][0-9-]*$/";
        if (preg_match($regex, $_POST["paginas"])) {
            return true;
        }
    }    

    function validarNotas(){
        $regex = "/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ,.]+$/";
        if (preg_match($regex, $_POST["notas"])) {
            return true;
        }
    }

    function validarISBN(){
        $regex = "/^(?=(?:\D*\d){10}(?:(?:\D*\d){3})?$)[\d-]+$/";
        if (preg_match($regex, $_POST["isbn"])) {
            return true;
        }
    }

    class Libro {
        public $autor;
        public $titulo;
        public $edicion;
        public $lugar;
        public $editorial;
        public $anyo;
        public $paginas;
        public $notas;
        public $isbn;

        public function __construct($autor,$titulo,$edicion,$lugar,$editorial,$anyo,$paginas,$notas,$isbn){
            $this->autor=$autor;
            $this->titulo=$titulo;
            $this->edicion=$edicion;
            $this->lugar=$lugar;
            $this->editorial=$editorial;
            $this->anyo=$anyo;
            $this->paginas=$paginas;
            $this->notas=$notas;
            $this->isbn=$isbn;
        }

        public function get_autor(){
            return $this->autor;
        }

        public function get_titulo(){
            return $this->titulo;
        }

        public function get_edicion(){
            return $this->edicion;
        }

        public function get_lugar(){
            return $this->lugar;
        }

        public function get_editorial(){
            return $this->editorial;
        }

        public function get_anyo(){
            return $this->anyo;
        }

        public function get_paginas(){
            return $this->paginas;
        }

        public function get_notas(){
            return $this->notas;
        }

        public function get_isbn(){
            return $this->isbn;
        }

    }

    class ListaLibros{               

        function agregarLibro(){
            $arreglo = array();
            if (validarAutor() && validarTitulo() && validarEdicion() && validarLugar() && validarEditorial() && validarAnyo() && validarPaginas() && validarNotas() && validarISBN()) {
                $dato = new Libro($_POST["autor"], $_POST["titulo"], $_POST["edicion"], $_POST["lugar"], $_POST["editorial"], $_POST["anyo"], $_POST["paginas"], $_POST["notas"], $_POST["isbn"]);
                array_push($arreglo,$dato);
                return $arreglo;
            }
            else{
                return 500;
            }
        }
    }

?>