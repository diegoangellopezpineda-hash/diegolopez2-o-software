<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lenguaje SQL - DB-Wiki</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>💻 DB-Wiki</h1>
        <p>Introducción al Lenguaje SQL</p>
    </header>

    <nav>
        <a href="index.php">Inicio</a>
        <a href="fundamentos.php">Fundamentos</a>
        <a href="modelo.php">Modelo Relacional</a>
        <a href="diseno.php">Diseño y Relaciones</a>
        <a href="sql.php" class="active">Lenguaje SQL</a>
        <a href="test.php">Autoevaluación</a>
    </nav>

    <main>
        <section class="card">
            <h2>📊 Estructura del Lenguaje SQL</h2>
            <p>SQL (Structured Query Language) es el idioma que usamos para hablar con MySQL. Sus comandos se dividen principalmente en dos sublenguajes esenciales:</p>

            <table class="sql-table">
                <thead>
                    <tr>
                        <th style="background-color: #2c3e50; color: white;">DDL (Data Definition Language)</th>
                        <th style="background-color: #16a085; color: white;">DML (Data Manipulation Language)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <strong>¿Qué es?</strong> Se usa para definir, modificar y alterar la <strong>estructura</strong> de la base de datos (las estructuras de las tablas). No altera los datos directamente, sino los contenedores.
                        </td>
                        <td>
                            <strong>¿Qué es?</strong> Se usa para <strong>manipular y gestionar los datos</strong> que ya existen dentro de las estructuras creadas por DDL. Es el que usas en el día a día para la lógica de tu app.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li><code>CREATE</code>: Crea nuevas bases de datos o tablas.</li>
                                <li><code>ALTER</code>: Modifica la estructura de una tabla existente (ej. añadir una columna).</li>
                                <li><code>DROP</code>: Elimina permanentemente una tabla o base de datos.</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><code>SELECT</code>: Consulta y extrae datos de las tablas.</li>
                                <li><code>INSERT</code>: Añade nuevos registros o filas a una tabla.</li>
                                <li><code>UPDATE</code>: Modifica los datos ya existentes.</li>
                                <li><code>DELETE</code>: Borra registros específicos de una tabla.</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 DB-Wiki - Proyecto de Desarrollo Web</p>
    </footer>
</body>
</html>