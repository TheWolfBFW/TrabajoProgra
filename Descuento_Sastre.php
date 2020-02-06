<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>SastreriaElZara</title>
	<style>
		body{
			background-image: url(1.jpg);
			background-repeat: no-repeat;
			background-size: 1300px 630px;

		}
	</style>
</head>
<body>

	<h1>Sastreria ElZARA</h1>

	<br><br>
	
	<h4>INGRESE SUS DATOS POR FAVOR</h4>

	<?php 
	$costo=6000;
	$edad=30;
	$subToT=$costo*0.17;
	$tota=$costo-$subToT;

	echo "sexo ingresado: mujer <br>";
	echo "edad ingresada: $edad <br>";
	echo "ingrese el precio del traje: $costo <br>"; 
	echo "descuento aplicado: $subToT <br>";
	echo "total: $tota ";
	 ?>
</body>
</html>