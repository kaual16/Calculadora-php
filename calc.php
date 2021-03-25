<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form method="post"  action="calculadora.php">
    Valor 1:
    <input type="text" name="valor1" size="5"/>
    <select name="tipo">
    <option selected="selected"> Somar </option>
    <option> Subtrair </option>
    <option> Multiplicação </option>
    <option> Divisão </option>
    </select>

    Valor 2:

    <input type="text" name="valor2" size="5">
    <input type="submit" name="calcularbtn" value="Calcular">


</form>
</body>
</html>