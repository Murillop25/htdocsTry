<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "Hola Mundo variables de tipo string";
    echo "<br>";
    // $cadena1="Jhon";
    // $cadena2="Jhonas";
    // echo"<br>";
    // echo $cadena1." ".$cadena2;
    // echo"<br>";
    // $cadena1 = "diego";
    // $cadena2 = "juan";
    // $cadena3 = "ana";
    // $todo = $cadena1 . $cadena2 . $cadena3 . "<br>";
    // echo $todo;
    // $edad1 = 24;
    // echo $cadena1 . " tiene $edad1 de edad";

    // $edad1=32;
    // $edad2=42;
    // $edad3=52;
    // $edades=$edad1.$edad2.$edad3;
    // echo "Juan tiene la edad de: {$edad1}, Juan tiene la edad de: {$edad2}, Juan tiene la edad de: {$edad3}";
    // echo "<br>";

    // $valor= rand(1,10);
    // echo"El valor sorteado es: {$valor}";

    // if($valor <= 5){
    //     echo "El valor es menor o igual a 5";
    //     echo "<br>";
    // }else{
    //     echo "El valor es mayor a 5";
    //     echo "<br>";
    // }

    $valor= rand(1,3);
    if($valor == 3){
        echo "El valor es 3";
        echo "<br>";
    }elseif ($valor ==2 ){
        echo "El valor es 2";
        echo "<br>";
    }else{
        echo "El valor es 1";
        echo "<br>";

    }


    ?>
</body>

</html>