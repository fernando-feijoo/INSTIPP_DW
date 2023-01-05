<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<body>
<section>
  <?php
  $nombreusuario = $_POST[ "nombreusuario" ];
  $contrasena = $_POST[ "contrasena" ];
  if ( $contrasena == "brujamaruja123" && $nombreusuario == "Fernando" ) {
      echo( 'Bienvenido al área interna ' . $nombreusuario . '!' );
  } else {
      echo( 'Acceso denegaado.' );
  }
  ?>
</section>
</body>
</html>