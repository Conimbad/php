<?php
include "namespaces1.php";

use Html\Tabla as T;

$tabla = new T();
$tabla->titulo = "Tabla 3";
$tabla->numFilas = 5;
?>
<html>
<body>

<?php $tabla->mensaje(); ?>

</body>
</html>