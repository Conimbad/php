<?php
class Saludo {
  public function __construct() {
    self::bienvenida();
  }

  public static function bienvenida() {
    echo "Hola mundo!";
  }

}

class Saludo2 {
  public function mensaje() {
    Saludo::bienvenida();
  }
}
// Llamando al método estático
//Saludo::bienvenida();
new Saludo();
$saludo = new Saludo2;
$saludo->mensaje();
echo "<br>";
echo "<hr>";

//------------------------------------------------//
class Dominio {
  protected static function obtenerSitioWeb() {
    return "Queo-software.biz";
  }
}

class DominioQS extends Dominio{
  public $nombreWeb;
  public function __construct() {
    $this->nombreWeb = parent::obtenerSitioWeb();
  }
}

$dominio = new DominioQS();
echo $dominio->nombreWeb;