<?php

if (isset($_POST["button-login"])) {

    include("php/conexion.php");

    $username = ($_POST["username"]);
    $password = ($_POST["password"]);

    $senteciaSQL = $pdo->prepare("SELECT * FROM usuarios WHERE usuario=:usuario AND contrasena=:contasena");

    $senteciaSQL->bindParam("usuario", $username,PDO::PARAM_STR);
    $senteciaSQL->bindParam("contasena", $password,PDO::PARAM_STR);

    $senteciaSQL->execute();

    $registro = $senteciaSQL->fetch(PDO::FETCH_ASSOC);

    $numeroRegistros = $senteciaSQL->rowCount();

    if ($numeroRegistros >= 1) {

        session_start();
        $_SESSION['usuario']=$registro;

        if ($registro['tipoUsuario'] == 1) {
            header('Location: productsAdmin.php');
            //print_r($registro);
        } else {
            header('Location: products.php');
        }
    } else {
        echo "<script> alert('Wrong username or password. Try again.');</script>";
    }
}


// function abrirRedSocial() {
//     var redSocial = "https://instagram.com/ortizcardona27?igshid=ZDdkNTZiNTM= "
//     alert("Welcome to our instagram, here you can contact us and we will give you a username and password.");
//     window.location = redSocial;
// } 
