<?php
// Definiendo interface
interface Animal {
  public function haceSonido();
}

// Definiendo las clases
class Gato implements Animal {
  public function haceSonido() {
    echo "Miau";
  }
}

class Perro implements Animal {
  public function haceSonido() {
    echo "Guau";
  }
}

class Raton implements Animal {
  public function haceSonido() {
    echo "Squik";
  }
}

// Creando una lista de animales:
$gato = new Gato();
$perro = new Perro();
$raton = new Raton();
$animales = array($gato, $perro, $raton);

// Diciendo al animal qué haga un sonido :
foreach($animales as $animal) {
  $animal->haceSonido();
  echo "<br>";
}