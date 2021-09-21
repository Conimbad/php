<?php
//json_encode():
$edad = array("Pedro"=>35, "Juan"=>37, "Jose"=>43);
echo json_encode($edad);
echo "<br>";

$auto = array("Volvo", "BMW", "Toyota");
echo json_encode($auto);
echo "<br>";

//json_decode():
$objetojson = '{"Pedro":35,"Juan":37,"Jose":43}';
var_dump(json_decode($objetojson)); //Devuelve un objeto
echo "<br>";
var_dump(json_decode($objetojson, true)); // Devuelve un arreglo asociativo
echo "<br>";

// Accediendo a los valores:
$obj = json_decode($objetojson);
echo $obj->Pedro;
echo "<br>";
echo $obj->Juan;
echo "<br>";
echo $obj->Jose;
echo "<br>";
echo "<br>";

$arr = json_decode($objetojson, true);
echo $arr["Pedro"];
echo "<br>";
echo $arr["Juan"];
echo "<br>";
echo $arr["Jose"];
echo "<br>";

// Recorriendo los valores del objeto con foreach():
$objeto = json_decode($objetojson);
foreach($objeto as $key => $value) {
  echo $key . " =>" . $value . "<br>";
}

// Recorreindo los valores del arreglo asociativo con foreach():
$arreglo = json_decode($objetojson, true);
foreach($arreglo as $key => $value) {
  echo $key . " =>" . $value . "<br>";
}