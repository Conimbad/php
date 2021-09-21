<?php
$cookie_name = "usuario";
$cookie_value = "Eva";
// Se configura la cookei:
//setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/');

// Se elimina la cookei:
setcookie($cookie_name, $cookie_value, time() - 3600, '/');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookie</title>
</head>
<body>
  <?php
  if ( !isset($_COOKIE[$cookie_name]) ) {
    echo "La cockie llamada '" . $cookie_name ."' no está configurada!";
  } else {
    echo "La cookie '" . $cookie_name . "' está configurada <br>";
    echo "Su valor es: " . $_COOKIE[$cookie_name];
  }
  ?>
</body>
</html>