<!DOCTYPE html>
<html>
<head>
	<title>Maestro.com</title>
</head>
<form method="post">
	<meta charset="utf-8">
<body bgcolor="pink">
	<center><h1>Maestro</h1></center>
<h2>Ingrese sus datos</h2>
<p>Nombre:<input type="text" name="dt1[Nombre]" size="30" required></p>
<p>Materia:<input type="text" name="dt1[Materia]" size="10" required></p>
<p>Correo:<input type="email" name="dt1[Correo]" size="30" required></p>
<p>Turno:<input type="text" name="dt1[Turno]" size="15" required></p>
<p>Fecha:<input type="text" name="dt1[Fecha]" size="15" required></p>
<input type="submit" name="Registrar">
</form>
<?php
include("registro_mst.php");
  ?>

</body>
</html>
