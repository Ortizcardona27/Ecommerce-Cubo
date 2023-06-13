<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
    <title>Products | Cubo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="website icon" href="img/LogoCubo.png">
    <link rel="stylesheet" href="css/estilos.css" />
    <link rel="stylesheet" href="css/style.css" />
    

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <div class="logo">
        <a href="productsAdmin.php">
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
                                    <a class="nav-link active" href="productsAdmin.php">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="addProducts.php">Add products</a>
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
</head>

<body>
    <main>
        <div class="row mt-5" id="contenedor">
            <?php
            include("php/conexion.php");

            $consulta = $pdo->prepare("SELECT * FROM productos;");

            $consulta->execute();

            $registro = $consulta->fetchAll(PDO::FETCH_ASSOC);

            foreach ($registro as $linea) {
            ?>
                <div class="card mt-3" style="width: 18rem; text-align: center; margin-left: 50px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $linea['producto'] ?></h5>
                        <br>
                        <img style="width: 100px" class="mt-2" src="img/<?php echo $linea['imagen'] ?>" alt="Card image cap">
                        <br><br>
                        <p class="card-text"><?php echo $linea['descripcion'] ?></p>
                        <p class="card-text"><?php echo $linea['precio'] ?></p>

                        <button name="editProduct" class="btn btn-primary" id="<?php echo $linea['ID'] ?>">Edit Product</button>
                        <br><br>
                        <button name="deleteProduct" class="btn btn-danger" id="<?php echo $linea['ID'] ?>" onclick="eliminarProducto(this.id)">Delete Product</button>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
    </main>

    <?php include("productos.php"); ?>
    <script>
        function eliminarProducto(id) {
            console.log(id);
            $.post("productos.php", {
                "texto": id
            }, function(respuesta) {
                alert(respuesta);
                window.location.href = 'http://localhost/E-commerce%20CUBO/productsAdmin.php';
            });
        }
    </script>
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