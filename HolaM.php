<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  echo "Hola Mundo";
  echo "<br>";
  echo "Como estas";
  echo "<br>";
  $dia=date("d");
  if ($dia<=10) {
      echo "Sitio Activo";
      echo "<br>";
    } else {
        echo"Sitio fuera de servicio";
        echo "<br>";

        $num=rand(1,100);
        if($num<50){
            echo "El número es menor a 50: {$num}";
        }else{
            echo "El número es mayor a 50: {$num}";
            echo "<br>";
        }
}
  ?>
</body>
</html>