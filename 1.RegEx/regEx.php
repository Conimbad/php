<?php
  // preg_match() Nos devuelve un 1 si hay coincidencia y un 0 si no:
  $str = "Visit W3Schools";
  $pattern = "/w3schools/i";
  echo preg_match($pattern, $str) . "<br>"; 

  // preg_match_all() nos devuelve el número de items encontrados:
  $str2 = "The rain in SPAIN falls mainly on the plains.";
  $pattern2 = "/ain/i";
  echo preg_match_all($pattern2, $str2) . "<br>";

  // preg_replace() nos devuelve una nueva cadena donde los patrones coincidentes
  //se han reemplazado por otra cadena:
  $str3 = "Visit Apple";
  $pattern3 = "/apple/i";
  echo preg_replace($pattern3, "Microsoft", $str3) . "<br>";
  echo $str3 . "<br>";
 
  //Grouping regular expressions
  $str4 = "Apples and bananas.";
  $pattern4 = "/ba(na){2}/i";
  echo preg_match($pattern4, $str4);