<?php

function inputs(){
    $nombre = "";
    $apellido = "";
    $email = "";
    $selector = [];
    $termino = [];

    if(isset($_POST["nombre"])){
        $nombre = $_POST["nombre"];

        if (preg_match("/^[a-zA-Z\s]{3,20}$/", $nombre)) {
        } else {
            echo '<a href="index.html">Volver</a>';
            echo "<br><br><br>";
            echo "El nombre debe contener solo letras y tener entre 3 y 20 caracteres.";
            exit();
        }
    }
    echo "<br><br><br>";

    if (isset($_POST["apellido"])) {
        $apellido = $_POST["apellido"];
        if (preg_match("/^[a-zA-Z\s\s]{3,20}$/",$apellido)) {
        }else {
            echo '<a href="index.html">Volver</a>';
            echo "<br><br><br>";
            echo "El apellido debe contener solo letras y tener entre 3 y 25 caracteres.";
            exit();
        }
    };
    echo "<br><br><br>";

    if (isset($_POST["email"])) {
        $email = $_POST["email"];
        if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/",$email)) {
        }else {
            echo '<a href="index.html">Volver</a>';
            echo "<br><br><br>";
            echo "Email inválido";
            exit();
        }
    };
    echo "<br><br><br>";

    if (isset($_POST["password"])) {
        $password = $_POST["password"];
        if (preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/",$password)) {
            
            $contrasena = 'contrasena123';
            $hash = password_hash($contrasena, PASSWORD_DEFAULT);
        }else {
            echo '<a href="index.html">Volver</a>';
            echo "<br><br><br>";
            echo "La contraseña debe tener al menos 8 caracteres, al menos una letra y al menos un dígito.";
            exit();
        }
    };
    echo "<br><br><br>";

    if (isset($_POST["selector"])) {
        $selector = $_POST["selector"];
        foreach ($selector as $contenido) {
        }
    }
    echo "<br><br><br>";

    if (isset($_POST["terminos"])) {
        $termino = $_POST["terminos"];
        foreach ($termino as $condicion) {
        }
    }

    return [
        'nombre' => $nombre,
        'apellido' => $apellido,
        'email' => $email,
        'password' => "Contraseña válida",
        'selector' => $selector,
        'termino' => $termino
    ];
}

// Obtener los datos del formulario
$datos = inputs();

// Redirigir a la página "tabla.php" y pasar los datos mediante una cadena de consulta
header("Location: tabla.php?" . http_build_query($datos));
exit();
?>
