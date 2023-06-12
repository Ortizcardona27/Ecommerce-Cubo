<?php
session_start();
include('php/addProduct.php');
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
    <title>Add Products | Cubo</title>
</head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS v5.0.2 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>

    <div class="logo">
        <a href="Administrador/homeAdmin.php">
            <img class="imagen" src="img/right.png" height="80">
        </a>
    </div>
    <header class="header">
        <div class="contenedor">
            <div class="barra">
                <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #243853;">
                    <div class="container-fluid">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarColor01">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="Administrador/homeAdmin.php">Home
                                        <span class="visually-hidden">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="productsAdmin.php">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="addProducts.php">Add products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="cerrarSesion.php">Sign off</a>
                                </li>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <div class="contenido-principal">
        <div class="v-line1"> </div>
        <h1 class="centrar-texto">ADD PRODUCT</h1>
        <div class="container-cases">
            <form method="POST" id="formulario" enctype="multipart/formdata">
                <div class="row">
                    <div class="col">
                        <label for="productAdd">Product</label>
                        <input name="productAdd" type="text" class="form1" id="productAdd" maxlength="60" required>
                    </div>

                    <div class="col">
                        <label for="typeAdd">Type</label>
                        <select name="typeAdd" id="typeAdd" class="form1" required>
                            <option>Internet</option>
                            <option>Packs</option>
                            <option>Telephony</option>
                            <option>Television</option>
                        </select>
                    </div>
                </div>
                <p></p>
                <p></p>
                <div class="row">
                    <div class="col">
                        <label for="descriptionAdd">Description</label>
                        <input name="descriptionAdd" type="phone" class="form1" id="descriptionAdd" required>
                    </div>
                    <div class="col">
                        <label for="quantityAdd">Quantity</label>
                        <input name="quantityAdd" type="number" min="0" step="1" class="form1" id="quantityAdd" required>
                    </div>
                </div>
                <p></p>
                <p></p>
                <div class="row">
                    <div class="col">
                        <label for="priceAdd">Price</label>
                        <input name="priceAdd" type="number" min="0" step="1" class="form1" id="priceAdd" required>
                    </div>
                </div>
                <p></p>
                <p></p>
                <div class="row">
                    <div class="input-box col-12">
                        <label for="imagenAdd" style="color: #ECFCFF">Image</label>
                        <input id="imagenAdd" type="file" name="imagenAdd" class="imagen" required>
                    </div>
                </div>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <button name="sendAddRegister" type="submit" class="button-cases-form" id="sendAddRegister">SEND</button>
            </form>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="..//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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