<?php
namespace Html; // <-- Cuando utilizamos namespace ya no es necesario instanciar la clase así *
include 'namespaces1.php';

// $tabla = new Html\Tabla(); * Se utiliza cuando el namespace no está agregado
$tabla = new Tabla();
$tabla->titulo = "Taba 1";
$tabla->numFilas = "10";

// $fila = new Html\Fila(); * Se utiliza cuando el namespace no está agregado
$fila = new Fila();
$fila->numCeldas = 5;
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
    $fila->mensaje();
  ?>
</body>
</html>