<!DOCTYPE html>
<html>
<head>
	<title>Hotmail.com</title>
</head>
<!-- Se utiliza el metodo action para mandar a la otra pagina de php --> 
<form action="Sol_enviada.php" method="post"/>
<body bgcolor="grey">
	<!-- Lenado de datos --> 
<center><h1>Bienvenido</h1></center>
<p>Ingrese su correo electronico:
<input type="text" size="40" name="correo"></p>
<p>Confirme de nuevo su correo electronico:
<input type="text" size="40"name="correo2"></p>

<p>Desea reciibr correos:
	<select name="Opciones">
	 <option value="Recibir correos">Recibir</option>
	 <option value="No recibir correos">No recibir</option>
</select></p>
<!-- Se envia los datos --> 
<p><input type="submit" name="Enviar">
<input type="reset" value="Borrar"></p>

</form>
</body>
</html>