<?php

if (isset($_POST['sendRegistro'])) {

    include("php/conexion.php");

    if (strlen($_POST['usuarioRegistro']) >= 1 && 
    strlen($_POST['passwordRegistro']) >= 1  && 
     strlen($_POST['emailRegistro']) >= 1) {
        $usuario = ($_POST['usuarioRegistro']);
        $password = ($_POST['passwordRegistro']);
        $email = ($_POST['emailRegistro']);
        $fecha = date('Y-m-d H:i:s');

        $consulta = $pdo->prepare("SELECT * FROM usuarios WHERE usuario=:usuario");

        $consulta->bindParam("usuario", $usuario,PDO::PARAM_STR);

        $consulta->execute();

        $registro = $consulta->fetch(PDO::FETCH_ASSOC);
        
        //$numeroRegistros = $registro->rowCount();

        if ($registro['usuario'] == $usuario) {

            echo '<script>alert("The entered user is already registered. Please try a new one");</script>';

        } else {
            $consulta = $pdo->prepare("INSERT INTO usuarios(ID, tipoUsuario, usuario, contrasena, correo, fechaRegistro) 
            VALUES ('',2,:usuario,:password,:email,:fecha);");
    
            //$consulta->bindParam("codigo", $registro, PDO::PARAM_STR);
            $consulta->bindParam("usuario", $usuario,PDO::PARAM_STR);
            $consulta->bindParam("password", $password,PDO::PARAM_STR);
            $consulta->bindParam("email", $email,PDO::PARAM_STR);
            $consulta->bindParam("fecha", $fecha,PDO::PARAM_STR);
    
            $consulta->execute();

            echo '<script language="javascript">alert("Your registration has been successfully completed");
            window.location.href="index.php"</script>';
        }

        //$registro = $consulta->fetch(PDO::FETCH_ASSOC);

        //$numeroRegistros = $consulta->rowCount();

        // $consulta = "SELECT max(codigo) + 1 AS \"codigo\" FROM `usuarios`;";
        // $codigo = mysqli_query($conexion, $consulta);
        // $arr = mysqli_fetch_array($codigo)[0];

        // $consulta = "INSERT INTO `usuarios`(`codigo`, `usuario`, `contrasena`, `correo`, `fechaRegistro`) VALUES ('$arr[0]','$usuario','$password','$email','$fecha');";
        // $resultado = mysqli_query($conexion, $consulta);

    } else {
        ?>
        <h3 class="bad">algo salio mal</h3>
        <?php
    }
}

?>