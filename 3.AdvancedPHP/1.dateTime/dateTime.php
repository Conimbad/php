<?php
// Estableciendo zona horaria por defecto
date_default_timezone_set("America/Guatemala");

echo "Hoy estamos " . date("d/m/Y") . "<br>";
echo "Hoy estamos " . date("d.m.Y") . "<br>";
echo "Hoy estamos " . date("d-m-Y") . "<br>";
echo "Hoy es " . date("l") . "<br>";

//Copyright automático
echo "&copy; 2010-" . date("Y") . "<br>";

//Hora
echo "La hora es: " . date("h:i:sa") . "<br>";
echo "La hora es: " . date("H:i:s") . "<br>";

//Creando una fecha con mktime(hora,min,seg,mes,día,año): 
$d = mktime(16, 14, 54, 9, 13, 2021);
echo "La fecha creada es: " . date("d-m-Y h:i:sa", $d) . "<br>";

//Creando una fecha a partir de un string con strtotime():
$r = strtotime("8:30am march 23 2021");
echo "Fecha creada: " . date("d-m-Y h:i:sa", $r) . "<br>";

$r = strtotime("tomorrow");
echo date("d-m-Y h:i:sa", $r) . "<br>";

$r = strtotime("next Saturday");
echo date("d-m-Y h:i:sa", $r) . "<br>";

$r = strtotime("+3 Months");
echo date("d-m-Y h:i:sa", $r) . "<br>";

// Mostrando fecha de los siguientes 6 sábados:
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}

// Muestra el número de días hasta el 4 de Julio:
$d1 = strtotime("July 4");
$d2 = ceil(($d1-time())/60/60/24);
echo "Hay " . $d2 . " días entre el 4 de julio y hoy";

