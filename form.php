<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $_REQUEST['nombre'];
    echo "<br>";
    if($_REQUEST['edad'] <18){
        echo"Es menor de edad";
    }else{
        echo"Es mayor de edad";
    }
    ?>
    
</body>
</html>