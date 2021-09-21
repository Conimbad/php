<?php
  namespace Html;
  class Tabla {
    public $titulo = "";
    public $numFilas = 0;
    public function mensaje() {
      echo "<p>La tabla '{$this->titulo}' tiene '{$this->numFilas}' filas.</p>";
    }
  }

  $tabla = new Tabla();
  $tabla->titulo = "Mi tabla";
  $tabla->numFilas = 5;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HTML</title>
</head>
<body>
  <?php
    $tabla->mensaje();
  ?>
</body>
</html>