<?php
//Validándo un entero entre un rango de números:
// Variable a evaluar:
$int = 108;

// Valor mínimo:
$min = 1;

// Valor máximo:
$max = 200;

if (filter_var($int, FILTER_VALIDATE_INT, array("options"=>
    array("min_range"=>$min, "max_range"=>$max))) === false) {
  echo "La variable a valuar no está en el rango legal.<br>";
} else {
  echo "La variable está en el rango legal. <br>";
}

// Validándo una dirección IPv6:
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
  echo "$ip es una dirección IPv6 válida <br>";
} else {
  echo "$ip es una dirección IPv6 inválida <br>";
}

// Validando una URL de consulta:
$url = "https://www.w3schools.com/n/form/3kjsdlssl?email=esco@ejemplo.com";

if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
  echo "$url <strong> válida</strong>";
} else {
  echo "$url <strong> no válida</strong>";
}

// Remover caracteres con valor ASCII > 127:
$str = "<h1>Hello WorldÆØÅúñé</h1>";
echo $str . "<br>";
$nuevostr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $nuevostr;