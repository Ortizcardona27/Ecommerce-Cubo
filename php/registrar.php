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

        $consulta = "INSERT INTO `usuarios`(`codigo`, `usuario`, `contrasena`, `correo`, `fechaRegistro`) VALUES ('6','$usuario','$password','$email','$fecha');";
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