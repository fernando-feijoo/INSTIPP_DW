<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de los valores ingresados.</title>
</head>
<body>
    <?php
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];
        $d = $_POST["d"];

        echo ('<br/><b>Numero mayor con una funcion max(): </b><br/>');
        $max = max($a, $b, $c, $d);
        echo 'Resultado: ' .$max; 

        echo ('<br/><br/><b>Numero mayor con la forma tradicional de if anidados: </b><br/>');
        if ($a > $b && $a > $c && $a > $d) {
            echo 'Resultado: ' .$a;
        } elseif ($b > $c && $b > $d) {
            echo 'Resultado: ' .$b;
        } elseif ($c > $d) {
            echo 'Resultado: ' .$c;
        } else {
            echo 'Resultado: ' .$d;
        }
        
    ?>
</body>
</html>