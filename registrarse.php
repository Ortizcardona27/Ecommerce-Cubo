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
    <title>Case Form | Cubo</title>
</head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS v5.0.2 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>

    <div class="logo">
        <a href="index.html">
            <img class="imagen" src="./img/right.png" height="80">
        </a>
    </div>
    <header class="header">
        <div class="contenedor">
            <div class="barra">
                <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #243853;">
                    <div class="container-fluid">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarColor01">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">Home
                                        <span class="visually-hidden">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="products.html">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="cases.html">Cases</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.html">Login</a>
                                </li>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <div class="contenido-principal">
        <div class="v-line1"> </div>
        <h1 class="centrar-texto">NEW RECORD</h1>
        <div class="container-cases">

            <form method="POST" id="formulario">
                <div class="row">
                    <div class="col">
                        <label for="usuarioRegistro">User</label>
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
                        <label for="emailRegistro">E-mail</label>
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
                <button name="sendRegistro" type="submit" class="button-cases-form" id="crearRegistro" data-bs-toggle="modal"
                    data-bs-target="#modal">SEND</button>
                <input type="hidden" name="_next" value="http://127.0.0.1:5500/login.html">
                <input type="hidden" name="_captcha" value="false">
            </form>
            <?php 
            include("php/registrar.php"); 
            ?>
        </div>

        <div class="columna-casos">
            <img class="card-img-top mt-2" src="./img/casos.png" alt="Card image cap">
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