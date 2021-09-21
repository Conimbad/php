<?php
class Pi {
  public static $valor = 3.14159;
  public static function staticValue() {
    return self::$valor;
  }
}

class X extends Pi {
  public function xStatic() {
    return parent::$valor;
  }
}
// Obtener la propiedad estática:
echo Pi::$valor;
echo '<hr>';
$pi = new Pi();
echo $pi->staticValue();
echo '<hr>';
// Obtenemos el valor directamente de la clase hija:
echo X::$valor;
echo "<br>";
// O también obtenemos el valor por el método xStatic():
$x = new X();
echo $x->xStatic();

