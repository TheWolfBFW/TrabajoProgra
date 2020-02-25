<!DOCTYPE html>
<html>
<head>
	<title>Resultados.com</title>
</head>
<body bgcolor="grey">
	<h1>Resultados</h1>
	<!-- Se raliza un if y un else para cada caja de texto para la condicion--> 
	<?php
	if ($_POST['cal1']>=70) {
		echo "Alumno 1<br>";
		echo $_POST['nombre1']; echo " aprobo con un promedio de: "; echo $_POST['cal1'];
	}else{echo "Alumno 1<br>";
		echo $_POST['nombre1']; echo "reprobo con un promedio de: "; echo $_POST['cal1']; }
echo "<br>";
echo "<br>";
if ($_POST['cal2']>=70) {
		echo "Alumno 2<br>";
		echo $_POST['nombre2']; echo " aprobo con un promedio de: "; echo $_POST['cal2'];
	}else{echo "Alumno 2 <br>";
		echo $_POST['nombre2']; echo " reprobo con un promedio de: "; echo $_POST['cal2']; }
echo "<br>";
echo "<br>";
		if ($_POST['cal3']>=70) {
		echo "Alumno 3<br>";
		echo $_POST['nombre3']; echo " aprobo con un promedio de: "; echo $_POST['cal3'];
	}else{echo "Alumno 3 <br>";
		echo $_POST['nombre3']; echo " reprobo con un promedio de: "; echo $_POST['cal3']; }
echo "<br>";
echo "<br>";
if ($_POST['cal4']>=70) {
		echo "Alumno 4<br>";
		echo $_POST['nombre4']; echo " aprobo con un promedio de: "; echo $_POST['cal4'];
	}else{echo "Alumno 4 <br>";
		echo $_POST['nombre4']; echo " reprobo con un promedio de: "; echo $_POST['cal4']; }
echo "<br>";
echo "<br>";
if ($_POST['cal5']>=70) {
		echo "Alumno 5<br>";
		echo $_POST['nombre5']; echo " aprobo con un promedio de: "; echo $_POST['cal5'];
	}else{echo "Alumno 5 <br>";
		echo $_POST['nombre5']; echo " reprobo con un promedio de: "; echo $_POST['cal5']; }

 ?>
 <!-- boton con hipervinculo para volver --> 
 <p>Volver a consultar: <a href="calificacion.php">VOLVER</a>


</body>
</html>