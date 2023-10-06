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
        <section>
            <h2>¡Explora nuestro sitio!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fringilla massa vel risus posuere, ac vulputate libero tincidunt. Suspendisse potenti. Vestibulum ac est id lectus bibendum vulputate. Quisque hendrerit efficitur mi, at iaculis massa ullamcorper in. Fusce sit amet suscipit sapien. Phasellus eleifend justo at tortor hendrerit, vel iaculis erat malesuada. Nulla facilisi. In eget justo ipsum.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Mi Sitio Web</p>
    </footer>
</body>
</html>