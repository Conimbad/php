<?php
namespace Html;
class Tabla {
  public $titulo = "";
  public $numFilas = 0;

  public function mensaje() {
    echo "<p>La tabla '{$this->titulo}' tiene '{$this->numFilas}' filas.</p>";
  }
}

class Fila {
  public $numCeldas = 0;
  public function mensaje() {
    echo "<p>La fila tiene {$this->numCeldas} celdas</p>";
  }
}