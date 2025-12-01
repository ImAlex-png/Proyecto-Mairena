<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Prueba 3</title>
    <script src="interactividad.js"></script>
    <link rel="stylesheet" href="styles/prueba3Style.css">
</head>

<body>
<h1>Un poco de historia del pueblo: El Pozo Encantado</h1>

<h2>¿Cuánto sabes sobre los rincones antiguos de Mairena?</h2>

<p>Te encuentras frente a un viejo pozo de piedra, rodeado de leyendas.  
En una placa medio borrada puede leerse:</p>

<p><b>"Aquí brotó el agua que dio vida a los primeros maireneros."</b></p>

<p>Estoy hablando de...</p>


    <form method="post" action="">
        <input type="text" id="respuesta" name="respuesta" placeholder="Escribe tu respuesta...">
        <br><br>
        <button type="submit">Comprobar</button>

        <button type="button" onclick="mostrarPista2()">Pedir pista</button>

        <p id="pista2"></p>
    </form>

    <?php
    session_start();
    include "validacion.php";

    // Respuesta correcta
    $respuestaCorrecta = "el pozo del arca";
    $otraCorrecta = "pozo del arca";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $respuestaUsuario = strtolower(trim($_POST["respuesta"]));

        if (validar($respuestaUsuario, $respuestaCorrecta) || validar($respuestaUsuario, $otraCorrecta)) {
            header("Location: final.php");
            exit;
        } else {
            echo "<p style = color:red> " . "Respuesta incorrecta, intentalo de nuevo";
        }
    }
    ?>



</body>

</html>