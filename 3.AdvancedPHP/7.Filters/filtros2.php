<?php
// Validando un string

use function PHPSTORM_META\elementType;

$str = "<h1>Esto es un h1 en HTML</h1>";
echo $str;
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr . "<br>";

// Validar un número entero
$int = 0;
if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo "El entero es válido <br>";
} else {
  echo "El entero no es válido <br>";
}

// Corrigiendo si el número es cero 0:
if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo "El entero es válido <br>";
} else {
  echo "El entero no es válido <br>";
}

// Validando dirección IP: 
$ip = "8.8.8.8";
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
  echo "$ip es una dirección IP válida <br>";
} else {
  echo "$ip no es una dirección IP válida <br>";
}

// Validándo un e-mail:
$email = "<>mardo.esco@ejemplo.com/<>";
echo $email;
echo "<br>";

// Remover todos los caracteres ilegales de la dirección de correo
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
echo $email;
echo "<br>";

// Validando el correo electrónico:
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo "$email esta dirección es correcta. <br>";
} else {
  echo "$email esta dirección es inválida. <br>";
}

// Validar una URL
$url = "https://www.w3schools.com/";
echo $url;
echo "<br>";

//  Romover todos los caracteres inválidos en la URL:
$url = filter_var($url, FILTER_SANITIZE_URL);
echo $url;
echo "<br>";

// Validar el URL:
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
  echo "$url <strong>válido.</strong>";
} else {
  echo "$url no válido.";
}
