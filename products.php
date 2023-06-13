<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Products | Cubo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="website icon" href="img/LogoCubo.png">
    <link rel="stylesheet" href="estilos.css" />
    <link rel="stylesheet" href="css/style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <div class="logo">
        <a href="home.php">
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
                                    <a class="nav-link" href="home.php">Home
                                        <span class="visually-hidden">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="products.php">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="cases.php">Cases</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="cerrarSesion.php">Sign off</a>
                                </li>
                        </div>
                    </div>
                </nav>
                <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #243853;">
                    <div class="container-fluid">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarColor01">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="telephony.php">Telephony
                                        <span class="visually-hidden">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="television.php">Television</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="internet.php">Internet</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="packs.php">Packs</a>
                                </li>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
</head>

<body>
    <header>
        <div class="barra">
            <nav class="navbar bg-dark">
                <h2 class="p-3 text-white">SHOPPING CART CUBO</h2>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" data-bs-toggle="modal" data-bs-target="#modal">
                            <i class="bi bi-cart mx-5" id="carritoContenedor">0</i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="row mt-5" id="contenedor">
    </main>

    <div class="container-xl">
        <div class="modal" tabindex="-1" role="dialog" id="modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">CART</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" id="vaciarCarrito">
                            Empty Cart
                        </button>
                        <button type="button" id="procesarCompra" class="btn btn-primary">
                            Continue Shopping
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <span>Total Price:</span>
                        <p class="text-center" id="precioTotal"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/products.js"></script>
    <script src="php/panel.php"></script>
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

</html>