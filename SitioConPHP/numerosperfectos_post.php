<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $numeroPerfecto = $_POST["numeroPerfecto"];

    $num = $numeroPerfecto;

    if (es_perfecto($num)) {
        echo "<br/><br/><h2>$num es un número perfecto.</h2>";
    } else {
        echo "<br/><br/><h2>$num no es un número perfecto</h2>";
    }

    function es_perfecto($num)
    {
        $suma = 0;
        for ($i = 1; $i < $num; $i++) {
            if ($num % $i == 0) {
                $suma += $i;
            }
        }
        return $suma == $num;
    }
    ?>
</body>

</html>