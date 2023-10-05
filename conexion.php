<?php
$servername = "localhost"; // Cambia esto si tu servidor MySQL no se encuentra en localhost
$username = "root";
$password = "";
$database = "kIngsLeague"; // Nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Establecer el conjunto de caracteres a UTF-8 (opcional, dependiendo de tus necesidades)
if (!$conn->set_charset("utf8")) {
    die("Error al configurar el conjunto de caracteres UTF-8: " . $conn->error);
}
?>
