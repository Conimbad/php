<?php
include "namespaces1.php";
use Html as H;
$tabla = new H\Tabla();
$tabla->titulo = "Tabla 2";
$tabla->numFilas = "5";

?>
<html>
<body>

<?php $tabla->mensaje(); ?>

</body>
</html>
