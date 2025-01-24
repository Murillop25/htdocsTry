<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Estudios</h1>";
    echo "<br>";
    $nombre = $_REQUEST['nombre'];
    if($_REQUEST['radio'] =="No" ){
        echo $nombre. " No tiene estudios";
        
    }else{
        if($_REQUEST['radio'] =="primarios") {
        echo $nombre. "Tiene etudios primarios";

    }if($_REQUEST['radio'] =="secundarios") {
        echo $nombre. "Tiene estudios secundarios";
    }}
    

    ?>
</body>
</html>