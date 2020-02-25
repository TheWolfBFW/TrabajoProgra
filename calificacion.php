<!-- nombre y calificacion y si la calificacion es mayor A 7 te va imprimir aprobado en caso contrario rebrobado para 5 personas -->
<!DOCTYPE html>
<html>
<head>
	<title>Calificacion.com</title>
</head>
<form action="R_calificaciones.php" method="post"/>
<body bgcolor="grey">
	<center><h1>Bienvenido a las consultas de calificaciones</h1></center>
	<h3>Ingrese los datos (calificaciones 1-100)</h3>
	<!-- Llenado de datos --> 
<p>Nombre del alumno(1):
<input type="text" size="27" name="nombre1"></p>	
<p>Calificacion del alumno(1):
<input type="number" name="cal1"></p>

<br>
<p>Nombre del alumno(2):
<input type="text" size="27" name="nombre2"></p>	
<p>Calificacion del alumno(2):
<input type="number" name="cal2"></p>

<br>	
<p>Nombre del alumno(3):
<input type="text" size="27" name="nombre3"></p>	
<p>Calificacion del alumno(3):
<input type="number" name="cal3"></p>

<br>
<p>Nombre del alumno(4):
<input type="text" size="27" name="nombre4"></p>	
<p>Calificacion del alumno(4):
<input type="number" name="cal4"></p>

<br>
<p>Nombre del alumno(5):
<input type="text" size="27" name="nombre5"></p>	
<p>Calificacion del alumno(5):
<input type="number" name="cal5"></p>
<!-- Se mandan los datos --> 
<input type="submit" name="Consultar">
<input type="reset" value="Borrar">
</form>


</body>
</html>