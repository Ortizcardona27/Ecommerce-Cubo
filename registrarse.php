<?php 
    include("php/registrar.php"); 
?>

<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sunflower:wght@700&display=swap" rel="stylesheet">
<link rel="website icon" href="img/LogoCubo.png">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User| Cubo</title>
</head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS v5.0.2 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>

    <div class="logo">
        <a href="home.html">
            <img class="imagen" src="./img/right.png" height="80">
        </a>
    </div>
    <header class="header">
        <div class="contenedor">
            <div class="barra"></div>
        </div>
    </header>

    <div class="contenido-principal" style="padding-top: 50px; padding-left:580px">
       
        <h1 class="centrar-texto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NEW USER</h1>
        <div class="container-cases">

            <form method="POST" id="formulario">
                <div class="row">
                    <div class="col">
                        <label for="usuarioRegistro">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User</label>
                        <input name="usuarioRegistro" type="text" class="form1" id="usuarioRegistro" maxlength="60"
                            required>
                    </div>
                </div>

                <p></p>
                <p></p>

                <div class="row">
                    <div class="col">
                        <label for="passwordRegistro">Password</label>
                        <input name="passwordRegistro" type="password" class="form1" id="passwordRegistro" required>
                    </div>
                </div>

                <p></p>
                <p></p>

                <div class="row">
                    <div class="col">
                        <label for="emailRegistro">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail</label>
                        <input name="emailRegistro" type="text" class="form1" id="emailRegistro" required>
                    </div>
                </div>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <div class="row">
                    <div class="col">
                        <input name="acceptTerms" type="checkbox" id="acceptTerms" value="checkbox" required>
                        <label for="acceptTerms">I accept terms and conditions.</label>
                    </div>
                </div>
                <p></p>
                <p></p>
                <p></p>
                <p></p>

                <button onclick="location.href='index.php'"  class="button-cases-form" >BACK</button>
                <button name="sendRegistro" type="submit" class="button-cases-form" id="crearRegistro" data-bs-toggle="modal"
                    data-bs-target="#modal">REGISTER ME</button>

                <input type="hidden" name="_next" value="http://localhost/E-commerce%20CUBO/index.php">
                <input type="hidden" name="_captcha" value="false">
            </form>
        </div>

       
    </div>

    <script src="js/registro.js"></script>
    <!-- <script>
        // con.connect(function (err) {
        //     if (err) {
        //         console.log(err);
        //     } else {
        //         con.query("SELECT max(codigo) + 1 AS \"codigo\" FROM `usuarios`;", function (err, result) {
        //             if (err) {
        //                 console.log(err);
        //             } else {
        //                 // var id = result[0].codigo;
        //                 // console.log(id);
        //                 // let usuario = 'Johamhl';
        //                 // let password = '123456';
        //                 // let correo = 'johamhernandez81@gmail.com';
        //                 con.query("INSERT INTO `usuarios`(`codigo`, `usuario`, `contrasena`, `correo`) VALUES ('" 
        //                 + result[0].codigo + "','" + usuario + "','" + password + "','" + correo + "');");
        //                 // for (var element of result) {
        //                 //     console.log(element);
        //                 // }
        //             }
        //         });
        //         //console.log(id);

        //         // con.query("INSERT INTO `usuarios`(`codigo`, `usuario`, `contrasena`, `correo`) VALUES (" + id +
        //         //     "," + usuario + "," + password + "," + correo + ");", function (err, result) {
        //         //         if (err) {
        //         //             console.log(err);
        //         //         } else {
        //         //             console.log(result);
        //         //         }
        //         //     });
        //     }
        //     //console.log("Connected!");
        // });

        const crearRegistro = document.querySelector("#crearRegistro");

        if (crearRegistro) {
            crearRegistro.addEventListener("click", () => {
                RegistrarUsuario(document.querySelector("#usuarioRegistro").value, document.querySelector("#passwordRegistro").value,
                    document.querySelector("#emailRegistro").value);
            });
        }
    </script> -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
<footer class="footer">
    <div class="contenedor">

        <p class="footer-text">
            © 2023 CUBO Telecomunications - All rights reserved.
        </p>
    </div>
</footer>
<script>
    window.alert("All fields are required.")
</script>

</html>