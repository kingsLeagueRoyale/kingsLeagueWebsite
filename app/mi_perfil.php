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
        <h2>Mi Perfil</h2>
        <p>En esta sección se mostrará la información de mi perfil</p>
    </main>

      <section id="partidos">
        <h1>Partidos de la Kings League</h1>
        <div class="partido">
            <h2>Partido 1</h2>
            <p>Equipo A vs. Equipo B</p>
            <p>Fecha: 01 de enero de 2024</p>
        </div>
        
        <div class="partido">
            <h3>Partido 2</h3>
            <p>Equipo C vs. Equipo D</p>
            <p>Fecha: 05 de enero de 2024</p>
        </div>
        
        
        <section id="mvp-semana">
          <h2>MVP de la Semana</h2>
          <div class="mvp-card">
              <img src="mvp-image.jpg" alt="Imagen del MVP de la Semana">
              <h3>Nombre del Jugador</h3>
              <p>Equipo: Equipo MVP</p>
              <p>X goles etc</p>
          </div>
          
        </section>
        <section id="estadisticas-partidos">
          <h2>Estadísticas de Partidos</h2>
          <div class="partido-estadisticas">
              <h3>Partido 1</h3>
              <ul>
                  <li>Goles: 3-2</li>
                  <li>Asistencias: 2-1</li>
                  <li>Posesión: 60% - 40%</li>
                  <li>Tiros al arco: 8-5</li>
              </ul>
          </div>
          
          <div class="partido-estadisticas">
              <h3>Partido 2</h3>
              <ul>
                  <li>Goles: 2-2</li>
                  <li>Asistencias: 1-2</li>
                  <li>Posesión: 55% - 45%</li>
                  <li>Tiros al arco: 6-6</li>
              </ul>
          </div>
          
         
      </section>
    </head>
    <body>
        <h2>Subir una Imagen</h2>
        <form action="procesar_subida.php" method="post" enctype="multipart/form-data">
            <label for="imagen">Selecciona una imagen:</label>
            <input type="file" name="imagen" id="imagen" accept="image/*" required>
            <br>
            <input type="submit" value="Subir Imagen">
        </form>
      <footer>
        <p> Copyright &copy; 2023 , Kikus </p>
      </footer>
    
    
    </body>

    
</html>