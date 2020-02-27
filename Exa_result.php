
<!DOCTYPE html>
<html>
<head>
	<title>Resultados</title>
</head>
<body bgcolor="grey">
	<!-- Se hace la mutiplicacion-->
<?php

echo "El resultdo es <br>";
echo $_POST['tabla'];echo " "; echo "X";echo " "; echo $_POST['Multiplicador']; 
echo "<h3>Resultado</h3><br>";
echo $_POST['tabla']*$_POST['Multiplicador'];
 ?>
 <p>Volver a formulario: <a href="Exa_inicio.php">Volver a la pagina principal</a>
</body>
</html>
