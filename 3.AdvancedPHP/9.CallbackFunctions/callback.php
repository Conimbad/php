<?php
function my_callback ($var) {
  return strlen($var);
}

$arreglo = ["manzana", "naranja", "banana", "coco"];
$longitud = array_map("my_callback", $arreglo);

print_r($longitud);

// Con una función anónima:
$string = ["manzana", "naranja", "banana", "coco"];
$lengths = array_map(function($item) {return strlen($item);}, $string);
print_r($lengths);

// Callbacks en funciones definidas por el usuario:
function exclamacion ($var) {
  return $var . "! ";
}

function pregunta ($var) {
  return $var . "? ";
}

function impFormato ($formato, $var) {
  // Llamando a la funcion $formato:
    echo $formato($var);
}

// Pasando 'exclamacion' y 'pregunta' como función callback  a impFormato():
impFormato("exclamacion", "Hola");
impFormato("pregunta", "Hola");