<!DOCTYPE html>
<html>
<head>
	<title>TablasDeMultiplicacion</title>
</head>
<form action="Exa_result.php" method="post"/> 

<body bgcolor="grey">
	<h1>Bienevenido a las tablas de multiplicar</h1>
	<br>
	<!-- Se selecciona la tabla-->
	<h3>Seleccione la tabla</h3>
	<select name="tabla">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
	</select>
	<br>
	<br>
	<p>
		<!-- Se aelecciona por el que se multiplicara-->
	<h3>Seleccione por el que se multiplicara</h3>
<input type="number" name="Multiplicador">

<input type="submit" value="Generar" name="enviar">
</p>
</form>


</body>
</html>