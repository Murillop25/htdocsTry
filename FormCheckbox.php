<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con checkbox</title>
</head>

<body>
  <form action="formCheck.php" method="post">
    Ingrese primer valor:
    <input type="text" name="valor1">
    <br>
    Ingrese segundo valor:
    <input type="text" name="valor2">
    <br>
    <input type="checkbox" name="check1">sumar
    <br>
    <input type="checkbox" name="check2">restar
    <br>
    <input type="submit" name="operar">
  </form>
</body>

</html>