<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Mini Prueba - Escape Room</title>
  <script src="interactividad.js"></script>
  <link rel="stylesheet" href="styles/prueba1Style.css">
</head>

<body>

  <h1>Adivina el sitio 'historico'</h1>
  <p>Intenta adivinar el sitio 'historico' del Viso del Alcor.
  </p>

  <form action="" method="post">
    <input type="text" id="respuesta" name="respuesta" placeholder="Escribe tu respuesta...">

    <br>

    <button type="submit">Comprobar</button>

    <button type="button" onclick="mostrarPista()">Pedir pista</button>

    <p id="pista"></p>

  </form>

  <?php

  session_start();

  include "validacion.php";

  $respuestaCorrecta = "los lilitos";

  $otraCorrecta = "lilitos";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $respuestaUsuario = strtolower(trim($_POST['respuesta']));
    if (validar($respuestaUsuario, $respuestaCorrecta) || validar($respuestaUsuario, $otraCorrecta)) {
      header("Location: prueba2.php");
      exit;
    } else {
      echo "<p style = color:red> " . "Respuesta incorrecta, intentalo de nuevo";
    }
  }

  ?>

</body>

</html>