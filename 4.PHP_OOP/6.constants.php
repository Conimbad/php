<?php
class Adios {
  const MENSAJE_DESPEDIDA = "Gracias por visitarme!<br>";

  public function adios() {
    echo self::MENSAJE_DESPEDIDA;
  }
}
 // :: <-- scope resolution operator
//echo Adios::MENSAJE_DESPEDIDA;
$adios = new Adios();
$adios->adios();