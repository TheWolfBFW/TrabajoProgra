

<body bgcolor="grey"></body>
<?php 
$conv= $_POST["conv"];
if (isset($_POST["monto"])) {
	define("cantidad", $_POST["monto"]);
}else{

}
echo "Son ";
if ($conv==1) {
	echo cantidad/18;
	echo " Dolares";
}else{ 
if ($conv==2) {
	echo cantidad/20;
	echo " Euros";}
	else{if ($conv==3) {
    echo cantidad*18;
	 echo " pesos";}
	 else{if ($conv==4) {
    echo cantidad*20;
	 echo " pesos";}
	
  
}
}   
}

       





 ?>
