<!DOCTYPE html>
<html>
<head>
	<title>Resultados.com</title>
</head>
<body bgcolor="pink">
	<!-- Se crean arrays con los datos de las cajas de texto anteriores  --> 
	<?php 
	$nombycal=array(
array("VACIO"),		
array("Alumno 1 Nombre:".$_POST['nombre0'],"Calificacion 1:".$_POST['Calificacion01'],"Calificacion 2:".$_POST['Calificacion02']),
array("Alumno 2 Nombre:".$_POST['nombre1'],"Calificacion 1:".$_POST['Calificacion11'],"Calificacion 2:".$_POST['Calificacion12']),
array("Alumno 3 Nombre:".$_POST['nombre2'],"Calificacion 1:".$_POST['Calificacion21'],"Calificacion 2:".$_POST['Calificacion22']),
array("Alumno 4 Nombre:".$_POST['nombre3'],"Calificacion 1:".$_POST['Calificacion31'],"Calificacion 2:".$_POST['Calificacion32']),
array("Alumno 5 Nombre:".$_POST['nombre4'],"Calificacion 1:".$_POST['Calificacion41'],"Calificacion 2:".$_POST['Calificacion42']),
array("Alumno 6 Nombre:".$_POST['nombre5'],"Calificacion 1:".$_POST['Calificacion51'],"Calificacion 2:".$_POST['Calificacion52']),
array("Alumno 7 Nombre:".$_POST['nombre6'],"Calificacion 1:".$_POST['Calificacion61'],"Calificacion 2:".$_POST['Calificacion62']),
array("Alumno 8 Nombre:".$_POST['nombre7'],"Calificacion 1:".$_POST['Calificacion71'],"Calificacion 2:".$_POST['Calificacion72']),
array("Alumno 9 Nombre:".$_POST['nombre8'],"Calificacion 1:".$_POST['Calificacion81'],"Calificacion 2:".$_POST['Calificacion82']),
array("Alumno 10 Nombre:".$_POST['nombre9'],"Calificacion 1:".$_POST['Calificacion91'],"Calificacion 2:".$_POST['Calificacion92']),
);
///imprimir variables
for($row=1; $row<11; $row++)
{
echo "<p><b> Alumno $row </b></p>";
echo "<ul>";
for ($col=0; $col <3 ; $col++) { 
	echo "<li>".$nombycal[$row][$col]."</li>";
  }
  echo "</ul>";
}


	 ?>
	 <!-- Volver a la pagina principal --> 
 <p>Volver a formulario: <a href="Califi_array.php">Volver</a>
</body>
</html>