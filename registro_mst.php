<?php  
include("conexion.php");  
if (isset($_POST['dt1'])) {
	$array=$_POST['dt1'];
	$Nombre=$array['Nombre'];
	$Materia=$array['Materia'];
	$Correo=$array['Correo'];
	$Turno=$array['Turno'];
	$Fecha=$array['Fecha'];
}if (isset($_POST['Registrar'])) {
	if (strlen($Nombre)>=1 && strlen($Materia)>=1 && strlen($Correo)>=1 && strlen($Turno)>=1 && strlen($Fecha)>=1 ) {
	$consulta= "INSERT INTO datos2(Nombre,Materia,Correo,Turno,Fecha) VALUES ('$Nombre','$Materia','$Correo','$Turno','$Fecha')";
	$resultado= mysqli_query($conex,$consulta);
	if ($resultado) {
	?>
	<h3>Datos registrados</h3>
	<a href="Maestro.php">Volver a llenar los datos</a>
	<?php 
	}else{
		?>
		<h3>Ha ocurrido un error</h3>
		<?php
	}
}

}
?>