<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link href="default.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="container">
      <div id="header">
        <h1>
          APRENDE PHP CON EJERCICIOS
        </h1>
        <h2>
          SOLUCIONES A LOS EJERCICIOS
        </h2>
        <h2>
          <br>3. Sentencia condicional
        </h2>
      </div>

      <div id="content">
        <?php
          $h = $_POST['h'];
          $g = 9.81;
          $s = sqrt(2 * $h / $g);

          echo "El objeto tarda " . round($s, $precision = 2) . " segundos en caer.";
        ?>
        <br><br>
        <a href="index.php">>> Volver</a>
        
      </div>
      
      <div id="footer">
        © Luis José Sánchez González
      </div>
      
    </div>
  </body>
</html>
