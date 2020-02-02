<?php 

$archivo = $_POST['archivo'];
//borra los archivos
unlink($archivo);
echo "el archivo se ha eliminado";

 ?>