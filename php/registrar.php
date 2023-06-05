<?php

include("php/conexion.php");

if (isset($_POST['sendRegistro'])) {
    if (strlen($_POST['usuarioRegistro']) >= 1 && 
    strlen($_POST['passwordRegistro']) >= 1  && 
     strlen($_POST['emailRegistro']) >= 1) {
        $usuario = trim($_POST['usuarioRegistro']);
        $password = trim($_POST['passwordRegistro']);
        $email = trim($_POST['emailRegistro']);
        $fecha = date('Y-m-d H:i:s');

        $consulta = "SELECT max(codigo) + 1 AS \"codigo\" FROM `usuarios`;";
        $codigo = mysqli_query($conexion, $consulta);
        $arr = mysqli_fetch_array($codigo)[0];
        echo $arr[0];

        $consulta = "INSERT INTO `usuarios`(`codigo`, `usuario`, `contrasena`, `correo`, `fechaRegistro`) VALUES ('$arr[0]','$usuario','$password','$email','$fecha');";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
            ?>
            <h3 class="ok">Success</h3>
            <?php
        } else {
            ?>
            <h3 class="bad">fallo</h3>
            <?php
        }
    } else {
        ?>
        <h3 class="bad">algo salio mal</h3>
        <?php
    }
}

?>