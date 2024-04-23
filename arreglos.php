<?php

$lenguajes = ["PHP", "Java", "Python"];

foreach($lenguajes as $lenguaje){
  echo $lenguaje.'<br>';
}


$persona = [
  "nombre" => "Edd",
  "apellido" => "Rosales",
  "colores" => ["rojo","verde","azul"],
];

foreach($persona as $p){
  echo $p;
}

?>