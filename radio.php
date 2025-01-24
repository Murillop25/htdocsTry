<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte PHP</title>
</head>
<body>
    <?php
    echo"<h1>Suma de Números</h1>";
    echo "<br>";

    if ($_REQUEST['radio1'] == "suma") {
        $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
        echo "La suma es: " . $suma;
      } else {
        if ($_REQUEST['radio1'] == "resta") {
          $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
          echo "La resta es:" . $resta;
        }
      }
    echo "<br>";
    ?>
</body>
</html>