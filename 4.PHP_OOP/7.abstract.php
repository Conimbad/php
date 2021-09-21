<?php
abstract class Car {
  public $nombre;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}

// Clase hija
class Audi extends Car {
  public function intro() : string {
    return "Elija calidad Alemana! Soy un {$this->name}";
  }
}

class Volvo extends Car {
  public function intro(): string {
    return "Orgullo de ser sueco! Soy un {$this->name}";
  }
}

class Citroen extends Car {
  public function intro(): string {
    return "Extravagancia francesa! Soy un {$this->name}";
  }
}

// Creando objetos de las clases hijas:
$audi = new Audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new Volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new Citroen("Citroen");
echo $citroen->intro();
echo "<br>";

// Otro ejemplo:
/*
abstract class ClasePadre {
  // Método abstracto con un argumento:
  abstract protected function prefijo ($nombre);
}

class ClaseHijo extends ClasePadre {
  public function prefijo($nombre) {
    if ($nombre == "Carlos") {
      $prefijo = "Sr.";
    } elseif ($nombre == "Ana") {
      $prefijo = "Sra.";
    } else {
      $prefijo = "";
    }
    return "{$prefijo} {$nombre}";
  }
}

$clase = new ClaseHijo;
echo $clase->prefijo('Carlos');
echo "<br>";
echo $clase->prefijo('Ana');
*/
abstract class ClasePadre {
  // Método abstracto con un argumento:
  abstract protected function prefijo ($nombre);
}

class ClaseHijo extends ClasePadre {
  // La clase hijo puede definir argumentos opcionales que no están en el 
  // método abstracto padre:
  public function prefijo($nombre, $separador = '.', $saludo = 'Hola') {
    if ($nombre == "Carlos") {
      $prefijo = "Sr";
    } elseif ($nombre == "Ana") {
      $prefijo = "Sra";
    } else {
      $prefijo = "";
    }
    return "{$saludo} {$prefijo}{$separador} {$nombre}";
  }
}

$clase = new ClaseHijo;
echo $clase->prefijo('Carlos');
echo "<br>";
echo $clase->prefijo('Ana');