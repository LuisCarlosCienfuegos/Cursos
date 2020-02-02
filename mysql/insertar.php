<?php 
include("conexion.php");


if (isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['pw']) && !empty($_POST['pw'])) {
	//conectar a la bd
	$con = new mysqli($server,$user,$pw,$db);
	mysql_query("INSERT INTO codigof (NOMBRE,PW) VALUES ('$_POST[nombre]','$_POST[pw]')",$con);
	echo "datos insertados";
}else{
	echo "problemas al insertar datos";
}




 ?>
