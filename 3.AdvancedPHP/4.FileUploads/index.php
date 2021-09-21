<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sube tu archivo</title>
</head>
<body>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    Seleccione una imagen para subirla:
    <input type="file" name="archivo" id="archivo">
    <input type="submit" value="Subir imagen" name="enviar">
  </form>
</body>
</html>