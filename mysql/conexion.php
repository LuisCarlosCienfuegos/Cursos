<?php 
$server = "localhost";
$user = "root";
$pw = "";
$db= "codigofacilito";

$con = new mysqli($server,$user,$pw,$db);
if ($con -> connect_error) {
	die("conexion fallida:".$con->connect_error);
}
echo "conexion chido";
 ?>