<?php
require_once "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["register_username"];
    $email = $_POST["register_email"];
    $password = $_POST["register_password"];
    $confirm_password = $_POST["confirm_password"];

    // Verificar que las contraseñas coincidan y cumplan los requisitos
    if ($password !== $confirm_password) {
        die("Las contraseñas no coinciden.");
    } elseif (strlen($password) < 8 || !preg_match("/[A-Z]/", $password) || !preg_match("/[0-9]/", $password)) {
        die("La contraseña debe tener al menos 8 caracteres, una mayúscula y un número.");
    }

    // Validar el formato del correo electrónico
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("El correo electrónico no es válido.");
    }

    // Conectar a la base de datos
    $conn = conectarDB();

    // Verificar si el nombre de usuario o el correo electrónico ya existen en la base de datos
    $check_query = "SELECT * FROM users WHERE username='$username' OR mail='$email'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        die("El nombre de usuario o el correo electrónico ya están registrados.");
    }

    // Hashear la contraseña antes de almacenarla en la base de datos (puedes usar password_hash)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insertar el nuevo usuario en la base de datos
    $insert_query = "INSERT INTO users (username, mail, password) VALUES ('$username', '$email', '$hashed_password')";
    
    if ($conn->query($insert_query) === TRUE) {
        // Redirigir al usuario a la página de inicio de sesión después de registrar
        header("Location: ../index.php");
        exit();
    } else {
        echo "Error al registrar al usuario: " . $conn->error;
    }

    $conn->close();
}
?>