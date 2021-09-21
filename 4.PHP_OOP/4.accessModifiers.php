<?php

// Propiedades con modificadores de acceso
/*class Verdura {
  public $nombre;
  protected $color;
  private $peso;
}

$papa = new Verdura();
$papa->nombre = "Papa"; // OK
$papa->color = "Amarillo"; // ERROR
$papa->peso = "100g"; // ERROR
*/

class Verdura {
  public $nombre;
  public $color;
  public $peso;

  function set_nombre($n) {
    $this->nombre = $n;
  }

  protected function set_color ($c) {
    $this->color = $c;
  }

  private function set_peso ($p) {
    $this->peso = $p;
  }
}

$tomate = new Verdura();
$tomate->set_nombre('Tomate'); // OK
//$tomate->set_color('rojo'); // ERROR
//$tomate->set_peso('50g'); // ERROR