<?php 
//la letra a = crea y reescribe los datos
/* a= lo crea
	r= lee
	*/
$fi=fopen("archivo.txt", "a") or die("problemas al crear archivo");

fwrite($fi, "Datos:");
//saltos de linea en archivos de texto y/o de correo
fwrite($fi, "\n");
fwrite($fi, $_POST['nombre']);
fwrite($fi, "\n");
fwrite($fi, $_POST['comentario']."\n");
fwrite($fi, "------------------"."\n");
fclose($fi);
echo "datos guardados";
 ?>