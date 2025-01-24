<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio si tiene estudio</title>
</head>
<body>

    <form action="estudios.php" method="post">
    
    Ingrese su nombre:
    <br>
    <input type="text" name="nombre">
    <br>
    <h3>Seleccione su nivel de estudio</h3>
    <input type="radio" name="radio" value="No">No tiene estudios
    <br>
    <input type="radio" name="radio" value="primarios">Estudios primarios
    <br>
    <input type="radio" name="radio" value="secundarios">Estudios Secundarios
    <br>
    <input type="submit" name="enviar">
    </form>
</body>
</html>