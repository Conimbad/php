<?php
setcookie("cookie_prueba", "test", time() + 3600, "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Check Cookie</title>
</head>
<body>
  <?php
  if (count($_COOKIE) > 0) {
    echo "Las cookies están habilitadas";
  } else {
    echo "Las cookies están deshabilitadas";

  }
  ?>
</body>
</html>