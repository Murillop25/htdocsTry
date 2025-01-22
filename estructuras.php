<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo"for";
echo"<br>";
for ($f = 1; $f <= 10; $f++) {
    echo $f;
    echo "<br>";
  }
  echo"While";
  echo"<br>";
  $valor = rand(1, 10);
  $inicio = 1;
  while ($inicio <= $valor) {
    echo $inicio;
    echo "<br>";
    $inicio++;
  }
  echo"Do while";
    echo"<br>";
    $valor = rand(1, 10);
    $inicio = 1;
    do {
      echo $inicio;
      echo "<br>";
      $inicio++;
    } while ($inicio <= $valor);

    echo"Switch";
    echo"<br>";
    $valor = rand(1, 3);
    switch ($valor) {
      case 1:
        echo "El valor es 1";
        echo "<br>";
        break;
      case 2:
        echo "El valor es 2";
        echo "<br>";
        break;
      case 3:
        echo "El valor es 3";
        echo "<br>";
        break;
      default:
        echo "El valor es diferente";
        echo "<br>";
        break;
    }
    echo"foreach";
    echo"<br>";
    $arreglo = array("Juan", "Ana", "Diego", "Maria");
    foreach ($arreglo as $valor) {
      echo $valor;
      echo "<br>";
    }
    echo"<br>";
    $arreglo = array("Juan" => 24, "Ana" => 23, "Diego" => 25, "Maria" => 22);
    foreach ($arreglo as $clave => $valor) {
      echo "La clave es: {$clave} y el valor es: {$valor}";
      echo "<br>";
    }
    
  echo "Tabla del 2 con el for";
  echo "<br>";
  for ($f = 2; $f <= 20; $f = $f + 2) {
    echo $f;
    echo "-";
  }
  echo "<br>";
  echo "Tabla del 2 con el while";
  echo "<br>";
  $f = 2;
  while ($f <= 20) {
    echo $f;
    echo "-";
    $f = $f + 2;
  }
  echo "<br>";
  echo "Tabla del 2 con el do/while";
  echo "<br>";
  $f = 2;
  do {
    echo $f;
    echo "-";
    $f = $f + 2;
  } while ($f <= 20);
  ?>
    
</body>
</html>