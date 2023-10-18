<?php
session_start();

// Incluye la función conectarDB
require_once "../connection/connection.php"; // Asegúrate de especificar la ruta correcta

// Llama a la función conectarDB para obtener la conexión
$conn = conectarDB();

// Obtén el código del equipo desde la URL
if (isset($_GET['codigo_equipo'])) {
    $codigo_equipo = $_GET['codigo_equipo'];
} else {
    // Si no se proporciona el código del equipo, muestra un mensaje de error o redirige a otra página.
    echo "Código de equipo no proporcionado.";
    exit;
}

// Consulta SQL para obtener la información del equipo
$sql_equipo = "SELECT * FROM team WHERE team_code = '$codigo_equipo'";
$result_equipo = $conn->query($sql_equipo);

// Verifica si la consulta se ejecutó correctamente
if (!$result_equipo) {
    die("Error en la consulta: " . $conn->error);
}

// Obtiene la información del equipo
if ($row_equipo = $result_equipo->fetch_assoc()) {
    $nombre_equipo = $row_equipo["name"];
} else {
    // Si no se encuentra el equipo con el código proporcionado, muestra un mensaje de error o redirige a otra página.
    echo "Equipo no encontrado.";
    exit;
}

// Consulta SQL para obtener la lista de jugadores del equipo
$sql_jugadores = "SELECT * FROM player WHERE team_code = '$codigo_equipo'";
$result_jugadores = $conn->query($sql_jugadores);

// Verifica si la consulta se ejecutó correctamente
if (!$result_jugadores) {
    die("Error en la consulta: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Equipo - <?php echo $nombre_equipo; ?></title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
<header>
        <?php
            if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                echo "<h1>Bienvenido $username a la <a class='no-link-decoration' href='../index.php'>Kings League</a></h1>";
            } else {
                echo "<h1>Bienvenido a la <a class='no-link-decoration' href='../index.php'>Kings League</a></h1>";
            }
        ?>
        <nav>
            <ul>
                <li><a href="../calendario.php">Calendario</a></li>
                <li><a href="../mi_perfil.php">Mi Perfil</a></li>
                <li><a href="../reglas.php">Reglas</a></li>
                <?php
                    if (isset($_SESSION['username'])) {
                        // Si hay una sesión iniciada, mostrar la opción de "Mi Perfil"
                        echo '<li><a href="../connection/logout.php">Cerrar Sesión</a></li>';
                    } else {
                        // Si no hay sesión iniciada, mostrar la opción de "Iniciar Sesión"
                        echo '<li><a href="../login_form.php">Iniciar Sesión</a></li>';
                    }
                ?>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2><?php echo $nombre_equipo; ?></h2>
            <!-- Muestra el nombre del equipo centrado horizontalmente -->
            
            <!-- Muestra el capitán del equipo con un tamaño más grande -->
            <?php
                $capitan_query = "SELECT * FROM player WHERE team_code = '$codigo_equipo' AND is_captain = 1";
                $capitan_result = $conn->query($capitan_query);

                if ($capitan_result->num_rows > 0) {
                    $capitan_row = $capitan_result->fetch_assoc();
                    echo "<h1 id='header_captain'>Capitán: {$capitan_row['first_name']} {$capitan_row['last_name1']}</h1>";
                } else {
                    echo "<1>No se encontró un capitán para este equipo.</h1>";
                }
            ?>

            <!-- Muestra la lista de jugadores en una tabla -->
            <div id="div-list_players">
                <table>
                    <thead id="th-list_players">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Edad</th>
                            <th>Posición</th>
                            <!-- Agrega más encabezados según las columnas que desees mostrar -->
                        </tr>
                    </thead>
                    <tbody id="td-list_players">
                        <?php
                        while ($jugador_row = $result_jugadores->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>{$jugador_row['first_name']}</td>";
                            echo "<td>{$jugador_row['last_name1']}</td>";
                            echo "<td>{$jugador_row['age']}</td>"; // Muestra la edad
                            echo "<td>{$jugador_row['position']}</td>"; // Muestra la posición
                            // Agrega más columnas según los datos que desees mostrar
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </section>
    </main>

    <footer>
        <?php
            // Pie de página similar al de index.php
        ?>
    </footer>
</body>
</html>
