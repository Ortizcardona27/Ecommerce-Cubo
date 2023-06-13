<?php

if(isset($_POST["texto"])){
    if($_POST['texto']){

        include("php/conexion.php");

        //$id = $_POST['texto'];
    
        $consulta = $pdo->prepare("DELETE FROM productos WHERE ID = :id;");
    
        $consulta->bindParam("id", $_POST['texto'],PDO::PARAM_STR);
    
        $consulta->execute();
    
        //$registro = $consulta->fetch(PDO::FETCH_ASSOC);

	    echo 'The record was successfully deleted.';
	}else{
        echo "Could not delete record";
    }
}
