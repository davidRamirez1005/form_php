<?php
// Incluir el contenido del archivo "datos.php"
include("datos.php");

// Incluir el contenido del archivo "fecha.php"
include("fecha.php");

// El contenido de "datos.php" y "fecha.php" se ejecuta y las variables y funciones definidas allí están disponibles aquí.

// Llamar a la función inputs()
inputs();


echo "<br><br><br>";
echo fecha_espanol_larga();
echo "<br>";
// echo fecha_espanol_corta();
?>
