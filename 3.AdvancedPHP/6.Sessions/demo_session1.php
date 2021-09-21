<?php
// Inicio de la sesión
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sesiones</title>
</head>
<body>
  <?php
  // Configurando las variables de sesión
  $_SESSION['favcolor'] = "verde";
  $_SESSION['favanimal'] = "perro";
  $_SESSION['favcolor'] = "amarillo";
  if (!empty($_SESSION)) {
    
    echo "Variables de sesión configuradas. <br>";
    print_r($_SESSION);
  } else {
    echo "Variables de sesión no configuradas.";

  }
  // Elimina todas las claves y valores de la variable $_SESSION
  session_unset();
  // Destruye una sesión
  session_destroy();
  $_SESSION['favanimal'] = 'gato';
  ?>
</body>
</html>