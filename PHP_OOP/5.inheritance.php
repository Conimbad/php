<?php
/*class Fruta {
  public $nombre;
  public $color;

  public function __construct($nombre, $color) {
    $this->nombre = $nombre;
    $this->color = $color;
  }

  public function intro () {
    echo "La fruta es {$this->nombre} y el color es {$this->color}.";
  }
}

// Esta clase hereda de Fruta:
class Fresa extends Fruta {
  public function mensaje () {
    echo "Soy una fruta o soy una baya <br>";
  }
}

$fresa = new Fresa('fresa', 'rojo');
$fresa->mensaje();
$fresa->intro();
*/
/*class Fruta {
  public $nombre;
  public $color;

  public function __construct($nombre, $color) {
    $this->nombre = $nombre;
    $this->color = $color;
  }
  protected function intro () {
    echo "La fruta es {$this->nombre} y el color es {$this->color}.";
    echo "<br>";
  }
}
class Fresa extends Fruta {
  public function mensaje () {
    echo "Soy una fruta o soy una baya <br>";
    // LLamando un método protegido desde dentro de la clase derivada
    $this -> intro();
  }
}

$fresa = new Fresa('fresa', 'rojo'); // OK 
$fresa->mensaje(); // OK. mensaje() es un método público y llama a intro() 
//(que está protegido) desde dentro de la clase derivada

//$fresa->intro(); // ERROR
*/
class Fruta {
  public $nombre;
  public $color;

  public function __construct($nombre, $color) {
    $this->nombre = $nombre;
    $this->color = $color;
  }
  protected function intro () {
    echo "La fruta es {$this->nombre} y el color es {$this->color}.";
    echo "<br>";
  }
}
class Fresa extends Fruta {
  public $peso;
  public function __construct($nombre, $color, $peso) {
    $this->nombre = $nombre;
    $this->color = $color;
    $this->peso = $peso;
  }

  public function intro () {
    echo "La fruta es {$this->nombre}, el color es {$this->color} y el peso es {$this->peso}";
  }
}

$fresa = new Fresa('fresa', 'rojo', '10g');
$fresa->intro(); 
echo "<br>";
echo "<br>";
// Palabra reservada final:

// Esta clase con la palabra "final" no heredaráa ninguna otra.
/*final class Moto {

}*/
class Moto {
  final public function correr () {
    echo "Este método es final";
  }

}

class Motoneta extends Moto {
  public $motor;
  public function __construct($motor) {
    $this->motor = $motor;
  }

  // Esto me retornaría un error ya que los métodos finales
  // no pueden ser anulados o sobre escritos pero si son heredados.
  /*public function correr() {
    // Code here...
  }*/
  public function get_motor() {
    return $this->motor;
  }
}

$honda = new Motoneta(125);
echo $honda->get_motor();
$honda->correr();