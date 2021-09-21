<?php
class Fruta {
  public $nombre;
  public $color;
  public $peso;

  function __construct ($nombre, $color, $peso) {
    $this->nombre = $nombre;
    $this->color = $color;
    $this->peso = $peso;
  }

  function get_nombre () {
    return $this->nombre;
  }

  function get_color () {
    return $this->color;
  }
  function get_peso () {
    return $this->peso;
  }
}

$manzana = new Fruta('Manzana', 'rojo', '100g');
echo "Nombre: " . $manzana->get_nombre();
echo "<br>";
echo "Color: " . $manzana->get_color();
echo "<br>";
echo "Peso: " . $manzana->get_peso();
echo "<br>";
echo "<br>";
$pera = new Fruta('Pera', 'verde', '120g');
echo "Nombre: " . $pera->get_nombre();
echo "<br>";
echo "Color: " . $pera->get_color();
echo "<br>";
echo "Peso: " . $pera->get_peso();

echo "<br>";

$json = json_encode($manzana);
echo $json;