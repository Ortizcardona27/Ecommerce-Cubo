<?php

if (isset($_POST['sendAddRegister'])) {

    include("php/conexion.php");

    $username = $_SESSION['usuario']['usuario'];
    $productAdd = ($_POST['productAdd']);
    $typeAdd = ($_POST['typeAdd']);
    $descriptionAdd = ($_POST['descriptionAdd']);
    $quantityAdd = ($_POST['quantityAdd']);
    $priceAdd = ($_POST['priceAdd']);
    //$archivo = $_FILES['imagenAdd'];

    // $type = pathinfo($archivo["name"], PATHINFO_EXTENSION);
    // $imagen = $productAdd.".".$type;

    // move_uploaded_file($archivo["tmp_name"], "../img/$imagen");

    // $imageType = $_FILES['imagen']['type'];
    // $imagenSize = $_FILES['imagen']['size'];
    $dateAdd = date('Y-m-d H:i:s');

    // if ($imagenSize <= 1000000) {
    //     if (strpos($imageType, "jpeg") || strpos($imageType, "jpg") || strpos($imageType, "png") || strpos($imageType, "gif")) {
    //         $imagenAdd = $_FILES['imagen']['name']; //imgfile
    //         $Carpeta = $_SERVER['DOCUMENT_ROOT'] . "../img/"; //opcional
    //         move_uploaded_file($_FILES['imagen']['tmp_name'], $Carpeta . $imagenAdd);

    $consulta = $pdo->prepare("INSERT INTO productos (ID, tipo, producto, descripcion, precio, cantidad, imagen, usuario, fechaRegistro) VALUES ('',:typeAdd,:productAdd,:descriptionAdd,:priceAdd,:quantityAdd,'',:username,:dateAdd);");

    //$consulta->bindParam("codigo", $registro, PDO::PARAM_STR);
    $consulta->bindParam("typeAdd", $typeAdd);
    $consulta->bindParam("productAdd", $productAdd);
    $consulta->bindParam("descriptionAdd", $descriptionAdd);
    $consulta->bindParam("priceAdd", $priceAdd);
    $consulta->bindParam("quantityAdd", $quantityAdd);
    //$consulta->bindParam("imagenAdd", $imagenAdd);   
    $consulta->bindParam("username", $username);
    $consulta->bindParam("dateAdd", $dateAdd);

    $consulta->execute();

    echo "<script>alert('The product was successfully registered');</script>";
    //header("Location: productsAdmin.php");

    //     } else {
    //         //header("Location: ../Administrador/addProducts.php");
    //         echo "<script>alert('solo se pueden subir los formatos jpeg/ jpg/ png/ gif');</script>";
    //     }
    // } else {
    //     //header("Location: ../Administrador/addProducts.php");
    //     echo "<script>alert('El tamaño de la imagen es muy grande');</script>";
    // }

    // if ($resultado == 1) {
    //     header("Location: ../Administrador/addProducts.php");
    // } else {
    //     echo ('No se agrego correctamente');
    // }
}
