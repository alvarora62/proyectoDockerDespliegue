<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Incluir PHP en HTML</title>
  </head>
  <body>
    <h1>Hola, este es un ejemplo de incluir un archivo PHP</h1>

    <?php
        // Incluir el archivo PHP en el HTML
        include 'script.php';  // O también podrías usar require
    ?>
  </body>
</html>