<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Mini Prueba - Escape Room</title>
  <script src="interactividad.js"></script>
  <link rel="stylesheet" href="styles/prueba1Style.css">
</head>

<body>

<h1>Adivina el sitio 'histórico'</h1>
<p>Intenta adivinar el sitio 'histórico' de Mairena del Alcor.</p>

<p>Al avanzar por un sendero empedrado, llegas frente a una enorme fortaleza  
que domina el paisaje desde lo alto. En un cartel antiguo puede leerse:</p>

<p><b>“He vigilado este pueblo desde la Edad Media.  
Mis muros cuentan historias de nobles, guerras y tradición.”</b></p>

<p>Estoy hablando de...</p>


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

  $respuestaCorrecta = "el castillo de luna";

  $otraCorrecta = "castillo de luna";

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