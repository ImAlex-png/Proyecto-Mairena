<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Escape Room - Mairena del Alcor</title>
    <link rel="stylesheet" href="styles/indexStyle.css">
</head>

<body>

    <?php

    // Iniciamos la sesion
    session_start();

    ?>


    <div class="contenedor">
        <h1>Escape Room: Misterios de Mairena del Alcor</h1>
        <p>Sumérgete en la historia, monumentos y tradiciones de Mairena. Resuelve estas 3 pruebas para escapar de este
            desafío mairenero.</p>

        <ol>
            <li>Prueba 1 — Sitio 'Histórico' de Mairena del Alcor</li>
            <li>Prueba 2 — Monumento Importante</li>
            <li>Prueba 3 — Pequeño Enigma</li>
        </ol>

        <a class="boton" href="prueba1.php">Comenzar Escape Room</a>
    </div>
    <script src="interactividad.js"></script>
</body>

</html>