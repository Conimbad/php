<?php
function imprimirIterable(iterable $miIterable) {
  foreach($miIterable as $item) {
    echo $item;
  }
}
$arr = ['a ', 'b ', 'c'];

imprimirIterable($arr);
echo "<hr>";
function obtenerIterable():iterable { // <-- Especifíca el tipo de dato a retornar
  return ['d ', 'e ', 'f'];
}

$obterIterable = obtenerIterable();

foreach($obterIterable as $item) {
  echo $item;
}
echo "<hr>";
// ---------------------------------- //
// Hacer iterable un objeto heredando de la interfaz Iterator:
class MyIterator implements Iterator {
  private $items = [];
  private $pointer = 0;

  public function __construct($items) {
    // array_values() hace seguro que las claves sean números
    $this->items = array_values($items);
  }

  public function current() {
    return $this->items[$this->pointer];
  }

  public function key() {
    return $this->pointer;
  }

  public function next() {
    return $this->pointer++;
  }

  public function rewind() {
    return $this->pointer = 0;
  }

  public function valid() {
    return $this->pointer < count($this->items);
  }
}

// Función que usa iterables:
function printIterable(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item;
  }
}

// Usa el iterador como iterable:
$iterabel = new MyIterator(["a", "b", "c", "d", "e", "f", "g", "h"]);
/*
echo $iterabel->valid();
echo "<br>";
var_dump($iterabel->valid());
echo "<br>";
*/
printIterable($iterabel);
