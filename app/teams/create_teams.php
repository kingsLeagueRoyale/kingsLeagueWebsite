<?php
function crearPaginasEquipos() {
    // Incluye la función conectarDB
    require_once "connection/connection.php"; // Asegúrate de especificar la ruta correcta

    // Llama a la función conectarDB para obtener la conexión
    $conn = conectarDB();

    // Consulta SQL para obtener la lista de equipos
    $sql = "SELECT team_code FROM team";
    $result = $conn->query($sql);

    // Verifica si la consulta se ejecutó correctamente
    if (!$result) {
        die("Error en la consulta: " . $conn->error);
    }

    // Directorio donde se guardarán los archivos de equipos
    $directory = "teams/";

    // Itera a través de los equipos y crea archivos si no existen
    while ($row = $result->fetch_assoc()) {
        $codigo_equipo = $row["team_code"];
        $file_path = $directory . "$codigo_equipo.php";

        // Verifica si el archivo no existe
        if (!file_exists($file_path)) {
            // Crea el archivo vacío si no existe
            touch($file_path);
        }
    }

    // Cierra la conexión
    $conn->close();
}
?>