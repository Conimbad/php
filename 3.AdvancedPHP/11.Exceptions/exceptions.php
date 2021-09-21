<?php
function divide($dividendo, $divisor) {
  if ($divisor == 0) {
    throw new Exception("División entre cero", 1);
  }
  return $dividendo / $divisor;
}


// Utilizando try...catch:

try {
  echo divide(5, 0);
  
} catch (Exception $e) {
  $codigo = $e->getCode();
  $mensaje = $e->getMessage();
  $archivo = $e->getFile();
  $linea = $e->getLine();
  
  echo "Excepción lazada en $archivo en la línea $linea: [Código $codigo] $mensaje. <br>";
} finally {
  echo "Proceso finalizado.";
} // Cuando se utiliza finally el bloque catch es opcional.
