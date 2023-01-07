<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivos</title>
</head>

<body>
    <?php

    echo '<br/><h3><b>Se lee el contenido en forma lineal.</b></h3><br/><br/>';

    $example = file_get_contents('texto.txt');
    echo ($example);

    echo '<br/><br/><h3><b>Se lee el contenido con los saltos de linea del archivo.</b></h3><br/><br/>';

    $example = file_get_contents('texto.txt');
    echo nl2br($example);

    echo '<br/><br/><h3><b>Se lee el contenido como array.</b></h3><br/><br/>';

    $example = file('texto.txt');
    echo ($example[0]);

    echo '<br/><br/><h3><b>Se crea un archivo con el contenido establecido.</b></h3><br/><br/>';

    file_put_contents('texto2.txt', 'Somos unos genios\r\n');
    echo ('texto2.txt se ha creado correctamente.');

    echo '<br/><br/><h3><b>Se actualiza conservando los cambios anteriores.</b></h3><br/><br/>';

    file_put_contents('texto2.txt', 'Somos unos genios\r\n', FILE_APPEND);
    echo ('¡texto2.txt ha sido actualizado!');

    echo '<br/><br/><h3><b>Se actualiza conservando los cambios anteriores.</b></h3><br/><br/>';

    file_put_contents('texto2.txt', $example, FILE_APPEND);
    echo ('¡texto2.txt ha sido actualizado!');

    ?>
</body>

</html>