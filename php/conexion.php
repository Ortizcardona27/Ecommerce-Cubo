<?php

include('php/config.php');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try {
	$pdo = new PDO($servidor,USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

} catch (PDOException $e) {
	
}

//$conexion = mysqli_connect("localhost", "root", "", "Cubo");


		// function conexion(){
		// 	$servidor="localhost";
		// 	$usuario="root";
		// 	$password="";
		// 	$bd="Cubo";

		// 	$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

		// 	return $conexion;
		// }

?>