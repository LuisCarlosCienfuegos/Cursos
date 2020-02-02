<?php 
echo "hola mundo";
//variables
$texto= "esto es un texxto";
$boolean = true;

echo $texto;
//va a imprimir 1 por true
echo "<br>";
echo $boolean;
echo "<br>";

//variables constantes
define("saludo", "hola como estas?");
define("numero", 20);

echo saludo;
echo numero;
echo "<br>";

//concatenar un string y entero
echo saludo.numero;
echo "<br>";
echo saludo." tengo ".numero."<br>"."empiezan los vectores"."<br>";
//vectores/array, los vectores empiezan en [0]
$array = array ("elemento1",2,"e3");
echo $array[0];
//array asociativo
$a = array("clave1" =>"elemento--1" ,"clave2"=>2 );
echo "<br>";
echo $a["clave1"]."<br>";

//ota forma de concatenar
$variable = "luis";
$variable .= " carlos";
$variable .= " chido";

echo $variable;




 ?>