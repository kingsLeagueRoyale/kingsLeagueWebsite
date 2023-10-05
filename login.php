<?php
// Incluir el archivo de conexión a la base de datos
include("conexion.php");

$username = $_POST['username'];
$password = $_POST['password'];

// Realizar una consulta para verificar las credenciales
$query = "SELECT * FROM usuarios WHERE (username = '$username' OR email = '$username') AND password = '$password'";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    // Las credenciales son correctas, iniciar sesión
    session_start();
    $_SESSION['username'] = $username;

    // Redireccionar al perfil del usuario
    header("Location: Miperfil.html");
    exit(); // Asegúrate de que no haya nada más después de esto en el script
} else {
    // Credenciales incorrectas, mostrar mensaje de error
    echo "Nombre de usuario, correo electrónico o contraseña incorrectos. Inténtalo de nuevo.";
}


// Cerrar la conexión a la base de datos
$conn->close();
?>