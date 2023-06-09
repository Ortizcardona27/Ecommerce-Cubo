<?php
include("php/panel.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="website icon" href="img/LogoCubo.png">

    <link rel="stylesheet" href="css/estilos.css" />
    <link rel="stylesheet" href="css/spinner.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

    <script type="text/javascript">
        emailjs.init('0bU4qjecNcP2aiuNx')
    </script>
    <title>Ecommerce | Cubo </title>
</head>

<body>
    <div class="logo">
        <a href="home.php">
            <img class="imagen" src="./img/right.png" height="80">
        </a>
    </div>
    <header>
        <nav class="navbar navbar-light bg-dark min-vw-100">
            <h2 class="p-3 text-white">SHOPPING CART CUBO</h2>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" data-bs-toggle="modal" data-bs-target="#modal">
                        <i class="bi bi-cart mx-5" id="carritoContenedor">0</i>
                    </a>

                </li>
            </ul>
        </nav>
    </header>

    <button id="activarFuncion" class="btn btn-secondary boton mt-2">Click!</button>

    <main>
        <h2 class="d-flex justify-content-center mb-3">MAKE A PURCHASE</h2>
        <div class="container-buy">
            <div class="row mt-3">
                <div style="padding-top: 50px; padding-left: 80px; padding-right: 50px;" class="col">
                    <form id="procesar-pago" method="POST">
                        <div style="padding-left: 50px; padding-right: 50px;">
                            <div class="form-group input-info">
                                <label style="width: 100px;" for="cliente"
                                    class="col-12 col-md-2 col-form-label h2">Customer: *</label>
                                <input style="width: 300px;" type="text" class="form-control" id="cliente"
                                    placeholder="Enter your name" name="persona" required>
                            </div>
                            <div class="form-group input-info" style="padding-top: 30px;">
                                <label for="email" class="col-12 col-md-2 col-form-label h2">Email: *</label>
                                <input style="width: 300px;" type="email" id="correo" class="form-control"
                                    placeholder="example@gmail.com" name="email.id" id="email.id" required>
                            </div>
                        </div>

                        <div class="row justify-content-center d-none" id="spinner">
                            <div class="spinner">
                                <div class="dot1"></div>
                                <div class="dot2"></div>
                            </div>
                        </div>

                        <div style="padding-left: 30px;">
                            <div class="row justify-content-between">
                                <div style="padding-top: 100px; padding-left: 50px;" class="col-md-4 mb-2">
                                    <a href="products.php" class="btn btn-secondary btn-block">Keep Buying</a>
                                </div>
                                <div style="padding-top: 100px; padding-right: 280px;" class="col-xs-12 col-md-4">
                                    <input type="submit" class="btn btn-primary btn-block" id="button"
                                        value="Finalize Purchase">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div style="padding-left: 50px; padding-right: 100px; padding-top: 30px;" id="carrito"
                class="form-group table-responsive">
                <table class="table" id="lista-compra">
                    <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tr>
                        <th colspan="4" scope="col" class="text-right">TOTAL
                            <p id="totalProceso"></p>
                        </th>
                        <!-- <th scope="col"></th> -->
                    </tr>
                </table>
            </div>
        </div>
    </main>

    <script src="js/products.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>