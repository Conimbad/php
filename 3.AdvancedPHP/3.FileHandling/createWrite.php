<?php
// Escribiendo archivo
$myFile = fopen("newfile.txt", "w") or die("Archivo no encontrado");
$txt = "Estoy escribiendo dentro del archivo\n";
fwrite($myFile, $txt);
$txt = "Esto es otra línea de text dentro del archivo";
fwrite($myFile, $txt);
fclose($myFile);

// Sobreescribiendo archivo
$myFile = fopen("newfile.txt", "w") or die("Archivo no encontrado");
$txt = "Una nueva línea de texto.\n";
fwrite($myFile, $txt);
$txt = "Una nueva segunda línea de texto.\n";
fwrite($myFile, $txt);
fclose($myFile);

// Añadiendo texto
$myFile = fopen("newfile.txt", "a") or die("Archivo no encontrado");
$txt = "Esta es la cuarta líne de texto\n";
fwrite($myFile, $txt);
$txt = "Esta es la quinta líne de texto\n";
fwrite($myFile, $txt);
fclose($myFile);