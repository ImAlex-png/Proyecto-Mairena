<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Prueba 3</title>
    <script src="interactividad.js"></script>
    <link rel="stylesheet" href="styles/prueba3Style.css">
</head>

<body>
    <h1>Un poco de historia del Pueblo: El campanario Misterioso</h1>

    <h2>¡Veamos que tan bien sabes el pueblo y su historia!</h2>

    <p>Observas una vieja torre con campanas. Al pie de ella, una placa dice:</p>

    <p><b>“Aquí reposa el patrón que guía a los visueños.”</b></p>

    <p>Estoy hablando de....</p>


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
    $respuestaCorrecta = "la iglesia santa maria del alcor";
    $otraCorrecta = "santa maria del alcor";

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