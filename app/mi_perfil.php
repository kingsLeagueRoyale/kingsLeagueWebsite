<?php
    session_start();
?>

<!DOCTYPE html>

<html>
   <head>
   <meta charset="UTF-8">
   <title>King League (beta)</title>

    </head>

    <body>
      <h1>Kings League</h1>
      <p>Beta</p>
      <header>
        <div class="logo">
          <img src="img/logo.png">
      </div>
      <nav>
          <ul>
              <li><a href="#">Inicio</a></li>
              <li><a href="#">Calendario</a></li>
              <li><a href="#">Equipos</a></li>
              <li><a href="#">Mercado</a></li>
              <li><a href="Reglas.php">Reglas</a></li>
          </ul>
      </nav>
      </header>

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