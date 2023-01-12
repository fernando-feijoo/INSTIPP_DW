<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="./img/alien-outline.svg" />
    <title>Evaluacion Unidad</title>
</head>
<body>
    <form action="index_post.php" method="post">
        <input type="checkbox" name="cbox1" value="1"> <label>Cigarrillos:</label> <input type="number" name="cigarrillos" value="0">    Costo $0.55 la Unidad.<br>
        <input type="checkbox" name="cbox2" value="2"> <label>Alcohol:</label> <input type="number" name="alcohol" value="0">     Costo $2.75 la Unidad<br>
        <input type="checkbox" name="cbox3" value="3"> <label>Hortalizas:</label> <input type="number" name="hortalizas" value="0">     Costo $0.30 la Unidad<br>
        <input type="checkbox" name="cbox4" value="4"> <label>Otros:</label> <input type="number" name="otros" value="0">     Costo $3.00 la Unidad<br><br>
            
        <input type="submit" value="Comprar">
    </form>
</body>

</html>