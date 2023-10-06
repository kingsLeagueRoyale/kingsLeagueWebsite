<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kings League</title>
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

    <main>
        <h2>Reglas</h2>
        <p>En esta sección se mostrarán las reglas</p>
    </main>

    <section>
        <div class="regla">
            <h2>Regla 1</h2>
            <p>Texto de la regla 1. Puedes escribir aquí las condiciones o detalles de esta regla.</p>
        </div>

        <div class="regla">
            <h2>Regla 2</h2>
            <p>Texto de la regla 2. Agrega aquí las condiciones o detalles de esta regla.</p>
        </div>

        <!-- Puedes agregar más reglas según sea necesario -->
    </section>

    <!-- Resto del contenido de la página -->

    <footer>
        <p> Copyright &copy; 2023 , Kikus </p>
    </footer>
</body>
</html>
