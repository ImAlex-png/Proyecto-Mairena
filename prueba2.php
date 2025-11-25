<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Prueba 2 - Adivina por la imagen</title>
    <script src="interactvidad.js"></script>
    <link rel="stylesheet" href="styles/prueba2Style.css">
</head>

<body>

    <h1>¿Qué sitio importante es este?</h1>

    <img src="imagenes/piedra del Gallo.jpg" alt="Lugar misterioso" width="400">

    <form action="" method="post">
        <input type="text" id="respuesta" name="respuesta" placeholder="Escribe tu respuesta...">
        <br><br>
        <button type="submit">Comprobar</button>

    </form>

    <?php

    session_start();

    include "validacion.php";

    $respuestaCorrecta = "la piedra del gallo";

    $otraCorrecta = "piedra del gallo";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $respuestaUsuario = strtolower(trim($_POST['respuesta']));

        if (validar($respuestaUsuario, $respuestaCorrecta) || validar($respuestaUsuario, $otraCorrecta)) {
            header("Location: prueba3.php"); // siguiente prueba
            exit;
        } else {
      echo "<p style = color:red> " . "Respuesta incorrecta, intentalo de nuevo";
    }
    }
    ?>



</body>

</html>