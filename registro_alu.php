<?php  
include("conexion.php");  
if (isset($_POST['dt'])) {
	$array=$_POST['dt'];
	$Nombre=$array['Nombre'];
	$Fecha=$array['Fecha'];
	$Matricula=$array['Matricula'];
	$Carrera=$array['Carrera'];
	$Correo=$array['Correo'];
}if (isset($_POST['Guardar'])) {
	if (strlen($Nombre)>=1 && strlen($Fecha)>=1 && strlen($Matricula)>=1 && strlen($Carrera)>=1 && strlen($Correo)>=1 ) {
	$consulta= "INSERT INTO datos(Nombre,Fecha,Carrera,Matricula,Correo) VALUES ('$Nombre','$Fecha','$Carrera','$Matricula','$Correo')";
	$resultado= mysqli_query($conex,$consulta);
	if ($resultado) {
	?>
	<h3>Datos registrados</h3>
	<a href="Alumno.php">Volver allenar los datos</a>
	<?php 
	}else{
		?>
		<h3>Ha ocurrido un error</h3>
		<?php
	}
}

}
?>