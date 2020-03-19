<!DOCTYPE html>
<html>
<head>
	<title>Alumno.com</title>
</head>
<meta charset="utf-8">
<body bgcolor="pink">
	<form method="post">
		<center><h1>Alumno</h1></center>
<h2>Ingrese los datos</h2>
<p>Nombre:<input type="text" name="dt[Nombre]"required size="40"></p>
<p>Fecha de nacimiento:<input type="text" name="dt[Fecha]"required size="30"></p>
<p>Carrera:<input type="text" name="dt[Carrera]"required size="10"></p>
<p>Matricula:<input type="number" name="dt[Matricula]"required size="10"></p>
<p>Correo:<input type="email" name="dt[Correo]"required size="30"></p> 
<input type="submit" name="Guardar"><input type="reset" value="Borrar">
</form>
<?php
include("registro_alu.php");
  ?>
</body>
</html>