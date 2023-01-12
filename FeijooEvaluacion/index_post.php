<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="./img/alien-outline.svg" />
    <title>Solucion Ejercicio</title>
</head>

<body>
    <?php
    if (!isset($_POST['cbox1'])) {
        $check1 = 0;
    } else {
        $check1 = 1;
    }
    if (!isset($_POST['cbox2'])) {
        $check2 = 0;
    } else {
        $check2 = 2;
    }
    if (!isset($_POST['cbox3'])) {
        $check3 = 0;
    } else {
        $check3 = 3;
    }
    if (!isset($_POST['cbox4'])) {
        $check4 = 0;
    } else {
        $check4 = 4;
    }
     echo ($check1 . ' ' . $check2 . ' ' . $check3 . ' ' . $check4 . '<br/>');

    $total_cost = 0;

    $cigarrillos_cost = $_POST['cigarrillos'] * 0.55;
    $alcohol_cost = $_POST['alcohol'] * 2.75;
    $hortalizas_cost = $_POST['hortalizas'] * 0.3;
    $otros_cost = $_POST['otros'] * 3;

    $total_cost = $cigarrillos_cost + $alcohol_cost + $hortalizas_cost + $otros_cost;

    if ($total_cost < 20) {
        if ($alcohol_cost > 0) {
            // Recargo 
            $total_cost += 5;
        } elseif ($total_cost != 0) {
            // Costo por defecto
            $total_cost += 1.5;
        } else {
            $total_cost = 0;
        }
    } elseif ($total_cost >= 20 && $total_cost < 40) {
        // No recargo
    } elseif ($total_cost >= 40) {
        if (($cigarrillos_cost > 0 || $alcohol_cost > 0) && ($check1 == 1 || $check2 == 2)) {
            // No descuentos
        } else {
            // Descuento del 5%
            $total_cost *= 0.95;
        }
        if (($total_cost >= 100 && $hortalizas_cost > 0)  && ($check3 == 3 || $check4 == 4)) {
            // Aplica 10% de Descuento, pero añade $5 por la transaccion
            $total_cost *= 0.9;
            $total_cost += 5;
        } elseif (($total_cost >= 100 && ($cigarrillos_cost > 0 || $alcohol_cost > 0)) && ($check1 == 1 || $check2 == 2)) {
            $total_cost *= 0.9;
        }
    }

    // Muestra el monto final
    echo "<h2>Valor a cancelar: </h2>";
    echo "<h3>Total cost: $" . number_format($total_cost, 2) . '</h3>';
    ?>
</body>

</html>