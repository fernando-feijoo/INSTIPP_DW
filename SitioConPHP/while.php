<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Bucles</title>
</head>

<body>
	<?php
	$numero = 1;
	echo ('<br/><b>Bucle while</b><br/>');
	while ($numero <= 10) {
		echo ($numero++ . '<br/>');
	}
	echo ('<br/><b>Bucle do while</b><br/>');
	do {
		echo ($numero-- . '<br/>');
	} while ($numero >= 1);
	echo ('<br/><b>Bucle for con break</b><br/>');
	for ($numero = 1; $numero <= 10; $numero++) {
		if ($numero == 5) {
			echo ('El script para al llegar a 5.');
			break;
		}
		echo ($numero . '<br/>');
	}
	echo ('<br/><br/><b>Bucle for con continue</b><br/>');
	for ($numero = 1; $numero <= 10; $numero++) {
		if ($numero == 5) {
			echo ('¡Se omite la 5!<br/>');
			continue;
		}
		echo ($numero . '<br/>');
	}
	?>
</body>

</html>