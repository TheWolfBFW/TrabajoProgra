<?php 
$datos=array(
array("Nombre: ",$_POST["nombre"]),
array("Apellido: ",$_POST["apellido"]),
array("Edad: ",$_POST["edad"]),
array("Matricula: ",$_POST["matricula"]),
array("Dia: ",$_POST["dia"]),
);
echo $datos[0][0].$datos[0][1];
echo "<br>";
echo $datos[1][0].$datos[1][1];
echo "<br>";
echo $datos[2][0].$datos[2][1];
echo "<br>";
echo $datos[3][0].$datos[3][1];
echo "<br>";
echo $datos[4][0].$datos[4][1];
?>