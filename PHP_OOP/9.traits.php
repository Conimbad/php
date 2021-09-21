<?php
trait mensaje1 {
  public function msj1() {
    echo "POO se divertida! ";
  }
}
trait mensaje2 {
  public function msj2() {
    echo "POO reduce el código duplicado";
  }
}

class Bienvenida {
  use mensaje1;
}

class Bienvenida2 {
  use mensaje1, mensaje2;
}

$obj = new Bienvenida();
$obj->msj1();
echo "<br>";

$obj2 = new Bienvenida2();
$obj2->msj1();
$obj2->msj2();