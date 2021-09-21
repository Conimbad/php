<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sesión 2</title>
</head>
<body>
  <?php
  echo "El color favorito es " . $_SESSION['favcolor'] . ".<br>";
  echo "El animal favorito es " . $_SESSION['favanimal'] . ".<br>";

  print_r($_SESSION);
  
  // Elimina todas las variables de sesión creadas
  session_unset();
  // Destruye la sesión completa
  session_destroy();
  /*$_SESSION['favcolor'] = "rojo";
  print_r($_SESSION);*/
  ?>
</body>
</html>