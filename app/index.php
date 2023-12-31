<?php
    session_start();

    // Incluye la función conectarDB
    require_once "connection/connection.php"; // Asegúrate de especificar la ruta correcta madafaka

    // Llama a la función conectarDB para obtener la conexión
    $conn = conectarDB();

    // Consulta SQL para obtener la lista de equipos
    $sql = "SELECT team_code, name FROM team";
    $result = $conn->query($sql);

    // Verifica si la consulta se ejecutó correctamente
    if (!$result) {
        die("Error en la consulta: " . $conn->error);
    }

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
        <section>
            <h2>¡Explora nuestro sitio!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fringilla massa vel risus posuere, ac vulputate libero tincidunt. Suspendisse potenti. Vestibulum ac est id lectus bibendum vulputate. Quisque hendrerit efficitur mi, at iaculis massa ullamcorper in. Fusce sit amet suscipit sapien. Phasellus eleifend justo at tortor hendrerit, vel iaculis erat malesuada. Nulla facilisi. In eget justo ipsum.</p>
        </section>

        <div id="troll-button-container">
            <button id="troll-button" onmouseover="moveTrollButton()">ACTIVAR MODO DIOS</button>
        </div>
        
        <section>
            <h2>Equipos</h2>
            <ul>
                <?php
                    // Itera a través de los resultados de la consulta para mostrar la lista de equipos
                    while ($row = $result->fetch_assoc()) {
                        $codigo_equipo = $row["team_code"];
                        $nombre_equipo = $row["name"];
                        // Enlace al equipo con información enviada como parámetros GET
                        echo "<li><a href='team/team_details.php?codigo_equipo=$codigo_equipo'>$nombre_equipo <span>- $codigo_equipo</span></a></li>";
                    }
                ?>
            </ul>
        </section>
    </main>

    <footer>
        <p> Copyright &copy; 2023 , Kikus </p>
    </footer>
    <script src="js/troll.js"></script>
</body>
</html>
