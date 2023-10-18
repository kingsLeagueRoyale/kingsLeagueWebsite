<?php
    session_start();

    // Incluye la función conectarDB
    require_once "../connection/connection.php"; // Asegúrate de especificar la ruta correcta madafaka

    // Llama a la función conectarDB para obtener la conexión
    $conn = conectarDB();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
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
                    if ($_SESSION['role'] == 'admin') {
                        // Si el rol es administrador, mostrar la opción de "Administrar"
                        echo '<li><a href="admin/main_admin.php">Administrar</a></li>';
                    }
                ?>
                <?php
                    if (isset($_SESSION['username'])) {
                        // Si hay una sesión iniciada, mostrar la opción de "Cerrar Sesión"
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
        <div id="admin-panel">
            <h3 id="admin-panel-header">Panel de Administración</h3>
            <div id="admin-panel-options">
                <div class="admin-option">
                    <a href="admin_teams.php">Administrar Equipos</a>
                </div>
                <div class="admin-option">
                    <a href="admin_players.php">Administrar Jugadores</a>
                </div>
                <div class="admin-option">
                    <a href="admin_calendar.php">Administrar Calendario</a>
                </div>
            </div>
        </div>
    </main>


    <footer>
        <p> Copyright &copy; 2023 , Kikus </p>
    </footer>
</body>
</html>
