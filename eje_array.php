<!DOCTYPE html>
<html>
<head>
	<title>Matriculas.com</title>
</head>
<body bgcolor="grey">


<form action="eje_array.php" method="POST">

<h1>Ingrese sus datos:</h1>

Nombre:
<input type="text" name="info[Nombre]"required>
<br>
<br>
Edad:
<input type="text" name="info[Edad]"required>
<br>
<br>
Matricula:
<input type="number" name="info[Matricula]"required>
<br>
<br>
Carrera:
<input type="text" name="info[Carrera]"required>
<br>
<br>
Email:
<input type="text" name="info[Email]"required>
<br>
<br>
Telefono:
<input type="text" name="info[Telefono]"required>
<br>
<br>
Tutor:
<input type="text" name="info[Tutor]"required>
<br>
<br>
<input type="submit" name="enviar">
</form>

<?php

if (isset($_POST['info'])) {
	$array=$_POST['info'];
	$nombre=$array['Nombre'];
	$edad=$array['Edad'];
	$matricula=$array['Matricula'];
	$carrera=$array['Carrera'];
	$email=$array['Email'];
	$telefono=$array['Telefono'];
	$tutor=$array['Tutor'];
}if ($matricula>100) {
	if ($matricula<1000) {
		echo "<br>Nombre:".$nombre."<br>Edad: ".$edad."<br>Matricula: ".$matricula."<br>Carrera: ".$carrera."<br>Email: ".$email."<br>Telefono: ".$telefono."<br>Tutor: ".$tutor;
		
	}else{
		echo "MATRICULA FUERA DE RANGO";
	}
}else{
	echo "MATRICULA FUERA DE RANGO";
}







?>
</body>
</html>