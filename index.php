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

    // Reiniciar la partida si se solicita
    if (isset($_GET['reset'])) {
        session_unset();
        session_destroy();
        header("Location: index.php");
        exit();
    };

    // Solo inicia el tiempo si aún no existe
    if (!isset($_SESSION['tiempo_inicio'])) {
        $_SESSION['tiempo_inicio'] = time(); // Guarda el momento de inicio (en segundos)
    };
    ?>


    <div class="contenedor">
        <h1>Escape Room: Misterios de El Viso del Alcor</h1>
        <p>Sumérgete en la historia, monumentos y tradiciones del Viso. Resuelve 3 pruebas para escapar este escape room 'visueño'.</p>
        <ol>
            <li>Prueba 1 — Sitio 'Historico' del Viso del Alcor</li>
            <li>Prueba 2 — Monumento Importante</li>
            <li>Prueba 3 — Pequeño enigma</li>
        </ol>
        <a class="boton" href="prueba1.php">Comenzar Escape Room</a>
    </div>
    <script src="interactividad.js"></script>
</body>

</html>