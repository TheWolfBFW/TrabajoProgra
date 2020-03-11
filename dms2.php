<?php 
$datos=array(
array($_POST["nombre"]),
array($_POST["apellido"]),
);
echo "Nombre: ".$datos[0][0];
echo "<br>";
echo "Apellido: ".$datos[1][0];
 ?>