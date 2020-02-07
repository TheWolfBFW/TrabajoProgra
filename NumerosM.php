<!DOCTYPE html>
<html>
<head>
	<title>Numerosmyaores</title>
</head>
<body bgcolor="green">
<center><h1>NUMEROS MAYORES</h1></center>
<?php 
$a=1;//numero 1
$b=2;//numero 2
$c=3;//numero 3s
if ($a>$b) {
	if ($b>$c) {
		echo "los numeros de mayor a menor son numero 1= $a numero 2= $b numero 3= $c ";
	}
}
if ($a>$c) {
	if ($c>$b) {
		echo "los numeros de mayor a menor son numero 1= $a numero 3= $c numero 2= $b ";
	}
}
if ($b>$a) {
	if ($a>$c) {
		echo "los numeros de mayor a menor son numero 2= $b numero 1= $a numero 3= $c ";
	}
}
if ($b>$c) {
	if ($c>$a) {
		echo "los numeros de mayor a menor son numero 2= $b numero 3= $c numero 1= $a ";
	}
}
if ($c>$b) {
	if ($b>$a) {
		echo "los numeros de mayor a menor son numero 3= $c numero 2= $b numero 1= $a ";
	}
}
if ($c>$a) {
	if ($a>$b) {
		echo "los numeros de mayor a menor son numero 3= $c numero 1= $a numero 2= $b ";
	}
}
else
echo "los numero son iguales";
 ?>
</body>
</html>