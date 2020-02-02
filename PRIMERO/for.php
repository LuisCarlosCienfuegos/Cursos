<?php 
for ($i=1; $i <5 ; $i++) { 
	echo $i."<br>";
}

//array predefinido
$a = array("elemento1","elemento2");
foreach ($a as $elemento ) {
	echo $elemento;
	echo "<br>";
}

$a2 = array("escuela1" => "e1","escuela2"=>"e2" ); 
foreach ($a2 as $escuela => $e) {
	echo $escuela."=".$e;
	echo "<br>";
															
}



 ?>