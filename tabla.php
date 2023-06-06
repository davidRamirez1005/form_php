<!DOCTYPE html>
<html>
<head>
    <title>Tabla de datos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Tabla de datos</h1>
    <?php
    include("fecha.php");
    $fecha = fecha_espanol_larga();
    // Obtener los datos de la cadena de consulta
    $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : "";
    $apellido = isset($_GET['apellido']) ? $_GET['apellido'] : "";
    $email = isset($_GET['email']) ? $_GET['email'] : "";
    $password = isset($_GET['password']) ? $_GET['password'] : "";
    $selector = isset($_GET['selector']) ? $_GET['selector'] : [];
    $termino = isset($_GET['termino']) ? $_GET['termino'] : [];

    // Crear la tabla con los datos obtenidos
    echo "<table>";
    echo '<a href="index.html">Volver</a>';
    echo "<br><br><br>";
    echo "<tr><th>Fecha</th><td>$fecha</td></tr>";
    echo "<tr><th>Nombre</th><td>$nombre</td></tr>";
    echo "<tr><th>Apellido</th><td>$apellido</td></tr>";
    echo "<tr><th>Email</th><td>$email</td></tr>";
    echo "<tr><th>Contraseña</th><td>$password</td></tr>";
    echo "<tr><th>Selector</th><td>";
    foreach ($selector as $contenido) {
        echo $contenido . "<br>";
    }
    echo "</td></tr>";
    echo "<tr><th>Términos</th><td>";
    foreach ($termino as $condicion) {
        echo $condicion . "<br>";
    }
    echo "</td></tr>";
    echo '<a href="index.html">enviar</a>';
    echo "<br><br><br>";
    echo "</table>";
    ?>
</body>
</html>
