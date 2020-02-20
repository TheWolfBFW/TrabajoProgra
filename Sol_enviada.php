<!DOCTYPE html>
<html>
<head>
	<title>Solicitud.com</title>
</head>
<body bgcolor="grey">
	<h1>Solicitud</h1>
	<!-- Si el correo es igual entonces imprimira los datos si no es igual se imprime que el correo no es igual --> 
<?php

if ($_POST['correo2']==$_POST['correo']) {
	echo "El correo es el mismo<br>";
	echo "El correo es :"; echo $_POST['correo'];
	echo "<br>";
	echo "Usted decidio: "; echo $_POST['Opciones']; echo "<br>";
}
else{
	echo "El correo no es el mismo";
}
?>
<!-- Volver al formulario --> 
  <p>Volver a formulario: <a href="inicioc.php">Volver a escribirlos</a>

</body>
</html>