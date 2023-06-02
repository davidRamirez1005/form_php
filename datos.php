<?php

function inputs(){

$nombre = $_POST["nombre"];
echo $nombre;
echo "<br><br><br>";


$selector =$_POST ["selector"];
    foreach ($selector as $contenido) {
        print_r($contenido."<br>");
}
echo "<br><br><br>";

$termino = $_POST["terminos"];
    foreach ($termino as $condicion) {
        print_r($condicion."<br>");
}
};
?>