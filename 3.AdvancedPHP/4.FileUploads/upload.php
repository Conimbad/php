<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["archivo"]["name"]);
$uploadOK = 1;
$imageFileType = strtolower( pathinfo($target_file, PATHINFO_EXTENSION) );

// Verificar si la imagen seleccionada es una imagen real o es falsa:
if ( isset($_POST["enviar"]) ) {
  $check = getimagesize($_FILES['archivo']['tmp_name']);
  if ($check !== false) {
    echo "El archivo es una imagen - " . $check['mime'] . ". <br>";
    $uploadOK = 1;
  } else {
    echo "El archivo no es una imagen. <br>";
    $uploadOK = 0;
  }
}

// Verifica si la imagen existe en la carpeta uploads o no:
if ( file_exists($target_file) ) {
  echo "Lo sentimos, el archivo ya existe. <br>";
  $uploadOK = 0;
}

// Verifica si el tamaño del archivo es mayor a 500KB
if ( $_FILES['archivo']['size'] > 500000 ) {
  echo "Lo sentimos, su archivo es muy grande. <br>";
  $uploadOK = 0;
}

// Valida el tipo de archiovs a PNG, JPG, JPEG y GIF:
if ( $imageFileType != "jpg" && 
    $imageFileType != "png" && 
    $imageFileType != "jpeg" && 
    $imageFileType != "gif"
  ) {
  echo "Lo sentimos, solo se permiten formatos JPG, JPEG, PNG y GIF <br>";
  $uploadOK = 0;
}

// Verifica si $uploadOK esta configurada en 0 por un error:
if ($uploadOK == 0) {
  echo "Lo sentimos, su archivo no fue subido. <br>";

  // Si todo esta bien, intentará subir el archivo
} else {
  if ( move_uploaded_file($_FILES['archivo']['tmp_name'], $target_file) ) {
    echo "El archivo " . htmlspecialchars( basename( $_FILES['archivo']['name']) ) . " ha sido subido <br>";
  } else {
    echo "Lo sentimos, hubo un error al subir su archivo <br>";
  }
}