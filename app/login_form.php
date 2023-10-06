<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <script src="js/login.js"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <header>
        <?php
            if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                echo "<h1>Bienvenido $username a la <a class='no-link-decoration' href='index.php'>Kings League</a></h1>";
            } else {
                echo "<h1>Bienvenido a la <a class='no-link-decoration' href='index.php'>Kings League</a></h1>";
            }
        ?>
        <nav>
            <ul>
                <li><a href="calendario.php">Calendario</a></li>
                <li><a href="mi_perfil.php">Mi Perfil</a></li>
                <li><a href="reglas.php">Reglas</a></li>
                <?php
                    if (isset($_SESSION['username'])) {
                        // Si hay una sesión iniciada, mostrar la opción de "Mi Perfil"
                        echo '<li><a href="connection/logout.php">Cerrar Sesión</a></li>';
                    } else {
                        // Si no hay sesión iniciada, mostrar la opción de "Iniciar Sesión"
                        echo '<li><a href="login_form.php">Iniciar Sesión</a></li>';
                    }
                ?>
            </ul>
        </nav>
    </header>

    <!-- Mostrar mensajes de error si existen -->
    <?php
        if (isset($_SESSION["error_message"])) {
            echo "<p style='color: red;'>" . $_SESSION["error_message"] . "</p>";
            unset($_SESSION["error_message"]); // Limpiar el mensaje de error
        }
    ?>

    <!-- Formulario de Inicio de Sesión -->
    <form id="login-form" action="connection/login.php" method="POST">
    <div><label for="login_username">Nombre de usuario o correo electrónico:</label></div>
    <div><input type="text" id="login_username" name="login_username" required><br><br></div>

    <div><label for="login_password">Contraseña:</label></div>
    <div><input type="password" id="login_password" name="login_password" required><br><br></div>

    <div><input type="submit" value="Iniciar Sesión"></div>
    </form>

    <!-- Botón para mostrar el formulario de registro -->
    <input class="login-register-button" id="register-button" type="button" value="Registrarse como nuevo usuario" onclick="mostrarFormularioRegistro()">

    <!-- Formulario de Registro (inicialmente oculto) -->
    <form id="register-form" action="connection/register.php" method="POST" style="display: none;" onsubmit="return validarRegistro();">
        <div><label for="register_username">Nombre de usuario:</label></div>
        <div><input type="text" id="register_username" name="register_username" required><br><br></div>

        <div><label for="register_email">Correo electrónico:</label></div>
        <div><input type="email" id="register_email" name="register_email" required><br><br></div>

        <div><label for="register_password">Contraseña:</label></div>
        <div><input type="password" id="register_password" name="register_password" required><br><br></div>

        <div><label for="confirm_password">Confirmar Contraseña:</label></div>
        <div><input type="password" id="confirm_password" name="confirm_password" required><br><br></div>

        <div><input type="submit" value="Registrar"></div>
    </form>

    <!-- Botón para mostrar el formulario de login -->
    <input class="login-register-button" id="login-button" type="button" value="Volver a Iniciar Sesión" onclick="mostrarFormularioLogin()">

    <!-- Contenedor para mostrar mensajes de error -->
    <div id="error-container" style="color: red;"></div>

    <footer>
            <p> Copyright &copy; 2023 , Kikus </p>
    </footer>

</body>
</html>
