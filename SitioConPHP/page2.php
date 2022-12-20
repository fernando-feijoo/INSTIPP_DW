<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<body>
<?php
$nombre = $_POST[ "nombre" ];
$apellido = $_POST[ "apellido" ];
$email = $_POST[ "email" ];
echo "Hola " . $nombre . " " . $apellido . ", <br /> 
Te has registrado con el siguiente correo electrónico: " . $email . ".";
	if($nombre === 'Fernando'){
		echo '<br /><br /> Hola Fernando! Ingresaste al <b>if</b> de manera correcta.';
	}else{
		echo '<br /><br /> No ingresaste el nombre correcto.';
	}
?>
</body>
</html>
