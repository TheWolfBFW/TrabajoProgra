<!DOCTYPE html>
<html>
<head>
	<title>EncuestaSIoNO</title>
</head>
<body bgcolor="GREY">
	<CENTER><h2>ENCUESTA (SI O NO) </h2></CENTER>
	<h3>¿ERES UN ESTUDIANTE UNIVERSITARIO?
	SI O NO</h3>
</body>
<?php
$GENTESI=70;
echo "PORCENTAJE DE LA GENTE QUE RESPONDIO<br><br>";
$totaSI=$GENTESI/100*100;
$totalNO=100-$totaSI;
echo "GENTE QUE RESPONDIO SI: $totaSI % <br>";
echo "GENTE QUE RESPONDIO NO; $totalNO %<br>";
  ?>

</html>