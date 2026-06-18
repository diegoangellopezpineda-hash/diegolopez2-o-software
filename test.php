<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoevaluación - DB-Wiki</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>💻 DB-Wiki</h1>
        <p>Pon a prueba tus conocimientos</p>
    </header>

    <nav>
        <a href="index.html">Inicio</a>
        <a href="fundamentos.html">Fundamentos</a>
        <a href="modelo.html">Modelo Relacional</a>
        <a href="diseno.html">Diseño y Relaciones</a>
        <a href="sql.html">Lenguaje SQL</a>
        <a href="test.php" class="active">Autoevaluación</a>
    </nav>

    <main>
        <section class="card">
            <h2>📝 Cuestionario de Autoevaluación</h2>
            <p>Responde las preguntas fijas para medir tu nivel de aprendizaje sobre Bases de Datos.</p>
            <hr>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nombre = htmlspecialchars($_POST['nombre']);
                $p1 = $_POST['p1'] ?? '';
                $p2 = $_POST['p2'] ?? '';
                $p3 = $_POST['p3'] ?? '';

                $puntuacion = 0;

                if ($p1 === 'sgbd') $puntuacion += 10;
                if ($p2 === 'pk') $puntuacion += 10;
                if ($p3 === 'dml') $puntuacion += 10;

                echo "<div class='resultado'>";
                echo "<h3>¡Hola, $nombre! 👋</h3>";
                echo "<p>Has completado el cuestionario con éxito.</p>";
                echo "<p class='score'>Tu puntuación final es: <strong>$puntuacion / 30 puntos</strong></p>";
                
                if ($puntuacion === 30) {
                    echo "<p style='color: #27ae60;'><strong>¡Excelente! Eres un maestro del modelo relacional. 🚀</strong></p>";
                } elseif ($puntuacion >= 10) {
                    echo "<p style='color: #f39c12;'><strong>¡Buen intento! Dale un repaso a las lecturas para perfeccionar tus conocimientos. 📚</strong></p>";
                } else {
                    echo "<p style='color: #c0392b;'><strong>Sigue estudiando. ¡No te rindas, la práctica hace al maestro! 💪</strong></p>";
                }
                echo "<br><a href='test.php' class='btn-back'>Volver a intentar</a>";
                echo "</div>";
            } else {
            ?>
                <form action="test.php" method="POST">
                    <div class="form-group">
                        <label for="nombre"><strong>Tu Nombre:</strong></label>
                        <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre aquí" required>
                    </div>

                    <div class="form-group">
                        <p><strong>1. ¿Qué herramienta evita la redundancia de datos y permite concurrencia masiva?</strong></p>
                        <label><input type="radio" name="p1" value="txt" required> Un archivo de texto plano (.txt)</label><br>
                        <label><input type="radio" name="p1" value="sgbd"> Un SGBD (como MySQL)</label>
                    </div>

                    <div class="form-group">
                        <p><strong>2. ¿Qué campo identifica de manera única y sin repetir a cada fila de una tabla?</strong></p>
                        <label><input type="radio" name="p2" value="fk" required> Clave Foránea (FK)</label><br>
                        <label><input type="radio" name="p2" value="pk"> Clave Primaria (PK)</label>
                    </div>

                    <div class="form-group">
                        <p><strong>3. ¿A qué grupo pertenecen los comandos SELECT, INSERT y UPDATE?</strong></p>
                        <label><input type="radio" name="p3" value="ddl" required> DDL (Definición)</label><br>
                        <label><input type="radio" name="p3" value="dml"> DML (Manipulación)</label>
                    </div>

                    <button type="submit" class="btn-submit">Enviar Respuestas e Ir al Servidor</button>
                </form>
            <?php
            }
            ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 DB-Wiki - Proyecto de Desarrollo Web</p>
    </footer>
</body>
</html>