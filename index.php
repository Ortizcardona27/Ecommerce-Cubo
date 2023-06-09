<?php
include("php/login.php")
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
  <title>Login | Cubo</title>
</head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS v5.0.2 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
  <div class="logo">
    <a href="index.php">
      <img class="imagen" src="./img/right.png" height="80">
    </a>
  </div>
  <header class="header">
    <div class="contenedor">
      
  </header>

  <form method="POST" id="formulario">
  <div class="contenido-principal" style="padding-top: 100px">
    <h2>Username: </h2>
    <input name="username" type="text" id="usuario" placeholder="Username"></input>
    <p></p>
    <h2>Password: </h2>
    <input name="password" type="password" id="contrasena" placeholder="*******"></input>
    <p></p>
    <button name="button-login" id="button-login">Login</button>
    <button id="button-login">Contact Us</button>
    <p></p>
    <a href="registrarse.php">You are a new customer?</a>
  </div>
  </form>
  <script src="php/login.php"></script>
</body>

<footer class="footer">
  <div class="contenedor">
    <p class="footer-text-index">
      © 2023 CUBO Telecomunications - All rights reserved.
    </p>
  </div>
</footer>

</html>