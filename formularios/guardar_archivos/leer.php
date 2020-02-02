<?php 
$archivo=fopen("archivo.txt", "r") or die("problemas al abrir el archivo");
//feof nos avisa cuando llega al final en el archivo
while (!feof($archivo)) {
	$traer = fgets($archivo);
	//nl2br sirve para dar saltos de linea en el navegador
	$saltodelinea= nl2br($traer);
	echo $saltodelinea;
}

 ?>