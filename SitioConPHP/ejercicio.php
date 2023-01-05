<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio en Clase</title>
</head>

<body>
    <?php
    $num1 = 0;
    $num2 = 2;
    $num3 = 3;
    $num4 = 6;
    echo ('<br/><b>Numero mayor con una funcion max(): </b><br/>');
    $max  = max($num1, $num2, $num3, $num4);

    echo ('Resultado: ' . $max);

    echo ('<br/><br/><b>Numero mayor con la forma tradicional de if anidados: </b><br/>');
    if ($num1 > $num2 && $num1 > $num3 && $num1 > $num4) {
        echo 'Resultado: ' . $num1;
    } elseif ($num2 > $num3 && $num2 > $num4) {
        echo 'Resultado: ' . $num2;
    } elseif ($num3 > $num4) {
        echo 'Resultado: ' . $num3;
    } else {
        echo 'Resultado: ' . $num4;
    }
    echo ('<br/><br/><b>Ingreso desde un formulario: </b><br/>');
    ?>
    
    <form action="ejerciciopost.php" method="post">
        Ingrese el valor de numero 1: <input type="text" name="a"><br>
        Ingrese el valor de numero 2: <input type="text" name="b"><br>
        Ingrese el valor de numero 3: <input type="text" name="c"><br>
        Ingrese el valor de numero 4: <input type="text" name="d"><br>
        <input type="submit" value="Enviar">
    </form>

</body>

</html>