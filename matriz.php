<?php  
$datos=array(
array("Nombre: ","Jesus ","Alejandro"),
array("Apellido: ","Zarazua ","Infante"),
array("Matricula: ","1930","444"),
);
///imprimir variables
for($row=0; $row<3; $row++)
{
echo "<p><b> No. renglon $row </b></p>";
echo "<ul>";
for ($col=0; $col <3 ; $col++) { 
	echo "<li>".$datos[$row][$col]."</li>";
  }
  echo "</ul>";
}


?>