<?php
// Iniciar la sesión si aún no está iniciada
session_start();

// Destruir todas las variables de sesión
$_SESSION = array();

// Destruir la sesión
session_destroy();

// Redirigir al usuario a la página de inicio o a donde desees después de cerrar sesión
header("Location: ../index.php");
exit();
?>

