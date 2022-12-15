<!doctype html>

<?php
	$autor1 = 'Nombre de Estudiante';
	$autor2 = 'Nombre de compañero';
	$autejm = 'Ingreso de ';
	$autejm .= 'Prueba';
	echo '<h1>Hola PHP, aqui vamos de nuevo!!</h1>
	
	<!-- Esta parte queda desabilitada porque no usa comillas dobles en la cadena de texto. -->
	
	<p>Esta pagina web dinámica ha sido desarrollada por $autor1 y $autor2.</p>
	
	<!-- Esta parte si sale porque se usa comillas simples y se añade el ". variable ." esto con comillas simples para poderla usar -->
	<p>Esta pagina web dinámica ha sido desarrollada por '.$autor1.' y '.$autor2.'.</p>';
	
	echo $autejm;
?>
<!-- Operaciones de suma y uso de variables numericas -->
<?php
	$numero1 = 123;
	$numero2 = 1;
	$resultado = $numero1 + $numero2;
	echo '<br>Resultado: ' .$resultado;

	$numero1 = 10;
	$numero2 = 5;
	$resultado = 2 * $numero1 + 5 * $numero2 - 3 * sqrt(81);
	echo '<br>Resultado nuevo: ' .$resultado;

	$incremento = 0;
	$resultado = ++$incremento;
	echo '<br>Resultado Incremento: ' .$resultado;

	$decremento = 0;
	$resultado = --$decremento;
	echo '<br>Resultado Decremento: ' .$resultado;

	#Ingreso de codigo para nuevo ejemplo.

	$x = 0;
	echo '<p>Resultado: ' .++$x;
	echo '<br> x tiene el valor ' .$x;
	echo '<p>Resultado: ' .$x++;
	echo '<br>x tiene el valor ' .$x, '</p>';
	
?>

<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
	<!-- <h1>Hola PHP, desde otra ruta para GitHub</h1> -->
<body>
</body>
</html>