<?php
session_start();

// Incluye la función conectarDB
require_once "connection/connection.php"; // Asegúrate de especificar la ruta correcta

// Llama a la función conectarDB para obtener la conexión
$conn = conectarDB();

// Consulta SQL para obtener la lista de partidos ordenados por fecha
$sql = "SELECT DATE_FORMAT(date, '%d/%m/%Y') AS FormattedDate, DATE_FORMAT(date, '%H:%i') AS FormattedTime, local_team_code, visitor_team_code FROM calendar ORDER BY date";
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
        <h2>Calendario</h2>
        <p>En esta sección se mostrará el calendario de partidos de la liga.</p>
        
        <section>
            <h2>Calendario de Partidos</h2>
            <?php
                $currentDate = ""; // Variable para controlar la fecha actual
                echo '<table id="th-calendar">'; // Agrega el id "th-calendar" a la tabla
                while ($partido = $result->fetch_assoc()) {
                    if ($partido['FormattedDate'] != $currentDate) {
                        // Nueva fecha encontrada, cierra la tabla anterior y comienza una nueva
                        if ($currentDate != "") {
                            echo '</table>';
                        }
                        $currentDate = $partido['FormattedDate'];
                        echo "<h1 id='h3-date-calendar'>$currentDate</h1>";
                        echo '<table id="th-calendar">'; // Agrega el id "th-calendar" a la nueva tabla
                    }
                    echo '<tr>';
                    echo "<td>{$partido['FormattedTime']}</td>";
                    echo "<td>{$partido['local_team_code']} vs {$partido['visitor_team_code']}</td>";
                    echo '</tr>';
                }
                echo '</table>';
            ?>
        </section>

            

    </main>
    <footer>
        <p> Copyright &copy; 2023 , Kikus </p>
    </footer>
</body>
</html>
