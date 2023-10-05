<?php
// Incluir el archivo de conexión a la base de datos
include("conexion.php");

// Obtener los datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Realizar una verificación para evitar usuarios duplicados
$query = "SELECT * FROM usuarios WHERE username = '$username' OR email = '$email'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "El nombre de usuario o correo electrónico ya están registrados. Por favor, elige otro.";
} else {
    // Si no hay duplicados, procede con la inserción en la base de datos
    $insertQuery = "INSERT INTO usuarios (username, password, email) VALUES ('$username', '$password', '$email')";

    if ($conn->query($insertQuery) === TRUE) {
        echo "Registro exitoso. ¡Bienvenido, $username!";
    } else {
        echo "Error al registrar el usuario: " . $conn->error;
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
