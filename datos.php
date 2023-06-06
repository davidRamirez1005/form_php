<?php

function inputs(){

    if(isset($_POST["nombre"])){
        $nombre = $_POST["nombre"];

        if (preg_match("/^[a-zA-Z\s]{3,20}$/", $nombre)) {
            echo $nombre;
        } else {
            echo "El nombre debe contener solo letras y tener entre 3 y 20 caracteres.";
            exit();
        }
    }
echo "<br><br><br>";
if (isset($_POST["apellido"])) {
    $apellido = $_POST["apellido"];
        if (preg_match("/^[a-zA-Z\s\s]{3,20}$/",$apellido)) {
            echo $apellido;
        }else {
            echo "El apellido debe contener solo letras y tener entre 3 y 25 caracteres.";
            exit();
        }
};
echo "<br><br><br>";
if (isset($_POST["email"])) {
    $email = $_POST["email"];
        if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/",$email)) {
            echo $email;
        }else {
            echo "Email invalido";
            exit();
        }
};
echo "<br><br><br>";

if (isset($_POST["password"])) {
    $password = $_POST["password"];
        if (preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/",$password)) {
            echo "Contraseña válida";
             $contrasena = 'contrasena123';
             $hash = password_hash($contrasena, PASSWORD_DEFAULT);
            //  echo $hash;
        }else {
            echo "La contraseña debe tener al menos 8 caracteres, al menos una letra y al menos un dígito.";
            exit();
        }
};
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

setcookie("nombre", $nombre, 2147483647, '/'); // Establece la cookie

};

// $contrasena = 'contrasena123';
// $hash = password_hash($contrasena, PASSWORD_DEFAULT);
// echo $hash;

/**
 * ! verificar si es correcta la contraseña
 */
// $contrasena_ingresada = 'contrasena123';
// echo "<hr>";

// if (password_verify($contrasena_ingresada, $hash)) {
//     echo 'La contraseña es correcta';
// } else {
//     echo 'La contraseña es incorrecta';
// };


// Mostrar el contenido de la cookie si está presente
if(isset($_COOKIE["nombre"])){
    echo "Contenido de la cookie: ".$_COOKIE["nombre"];
}


?>