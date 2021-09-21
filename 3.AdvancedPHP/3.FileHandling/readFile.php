<?php
echo readfile("webdictionary.txt");
echo "<br><br>";

//Utilizanod fopen():
$myFile = fopen("webdictionary.txt", "r") or die("Imposible abrir el archivo");
echo fread($myFile, filesize("webdictionary.txt"));
fclose($myFile);
echo "<br><br>";
// Utilizando fgets():
$myFile2 = fopen("webdictionary.txt", "r") or die("Imposible abrir el archivo");
echo fgets($myFile2) . "<br>";
echo fgets($myFile2) . "<br>";
echo fgets($myFile2) . "<br><br>";
fclose($myFile2);

// Utilizando feof():
$myFile3 = fopen("webdictionary.txt", "r") or die("Imposible abrir el archivo");
while (!feof($myFile3)) {
  echo fgets($myFile3) . "<br>"; 
}
fclose($myFile3);
echo "<br>";

// Utilizando fgetc():
$myFile4 = fopen("webdictionary.txt", "r") or die("Imposible abrir el archivo");
while (!feof($myFile4)) {
  echo fgetc($myFile4);
}
fclose($myFile4);
echo "<br>";