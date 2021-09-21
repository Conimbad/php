<?php
class Car {
  public $nombre;
  public $color;

  function __construct($nombre, $color) {
    $this->nombre = $nombre;
    $this->color = $color;
  }
  function obtener_nombre() {
    return $this->nombre;
  }
  function obtener_color() {
    return $this->color;
  }
  function __destruct() {
    echo "<br>";
    echo "El carro es {$this->nombre} y el color es {$this->color}.";
  }
}

$toyota = new Car('Toyota', 'Azúl');
echo $toyota->obtener_nombre();
echo "<br>";
echo $toyota->obtener_color();
