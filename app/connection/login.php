<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login_username = $_POST["login_username"];
    $login_password = $_POST["login_password"];

    // Lógica para verificar las credenciales en la base de datos
    // Debes adaptar esta parte según cómo esté configurada tu base de datos

    // Conectar a la base de datos
    require_once "connection.php";
    $conn = conectarDB();

    // Verificar si el nombre de usuario o el correo electrónico existen en la base de datos
    $check_query = "SELECT * FROM users WHERE username='$login_username' OR mail='$login_username'";
    $result = $conn->query($check_query);

    if ($result->num_rows === 1) {
        // El usuario existe en la base de datos
        $row = $result->fetch_assoc();
        $stored_password = $row["password"];

        // Verificar si la contraseña es correcta
        if (password_verify($login_password, $stored_password)) {
            // Las credenciales son válidas, establecer la variable de sesión 'username'
            session_start();
            $_SESSION['username'] = $login_username; // Establecer el nombre de usuario en la variable de sesión
            header("Location: ../index.php");
            exit();
        } else {
            // Contraseña incorrecta
            session_start();
            $_SESSION["error_message"] = "Contraseña incorrecta. Por favor, inténtalo de nuevo.";
            header("Location: ../login_form.php");
        }
    } else {
        // El usuario no existe en la base de datos
        session_start();
        $_SESSION["error_message"] = "Usuario no encontrado. Por favor, regístrate si eres nuevo.";
        header("Location: ../login_form.php");
    }

    $conn->close();
}
?>