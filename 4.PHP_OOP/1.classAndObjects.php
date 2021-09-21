<?php
class Fruta {
  // Propiedades de la clase 
  public $nombre;
  public $color;

  // Métodos
  function set_name ($nombre) {
    $this->nombre = $nombre;
  }
  function get_name () {
    return $this->nombre;
  }

  function set_color ($color) {
    $this->color = $color;
  }
  function get_color () {
    return $this->color;
  }
}

$manzana = new Fruta();
$banana = new Fruta();
$manzana->set_name('Manzana');
$manzana->set_color('Rojo');

$banana->set_name('Banana');
$banana->set_color('Amarillo');

echo "Nombre: " . $manzana->get_name();
echo "<br>";
echo "Color: " . $manzana->get_color();
echo "<br>";
echo "<br>";
echo "Nombre: " . $banana->get_name();
echo "<br>";
echo "Color: " . $banana->get_color();
echo "<br>";

//También podemos cambiar el valor de las propiedades de la clase así:
/* $manzana->nombre = 'Apple';
 *$manzana->color = 'Verde';*/

 // Utilizando instaceof:
 var_dump($manzana instanceof Fruta);
 if ($manzana instanceof Fruta) {
   echo "$manzana->nombre es una fruta.";
 }