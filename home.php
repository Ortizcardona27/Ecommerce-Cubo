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
  <title>Cubo</title>
</head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS v5.0.2 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
  <div class="logo">
    <a href="home.php">
      <img class="imagen" src="./img/right.png" height="80">
    </a>
  </div>
  <header class="header">
    <div class="contenedor">

      <div class="barra">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #243853;">
          <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
              aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="home.php">Home
                    <span class="visually-hidden">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="products.php">Products</a>
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
      </div>
    </div>

  </header>

  <div class="contenido-principal">
    <div class="columna">
      <a href="telephony.php">
        <img class="imagen-home" src="./img/telefono.png" height="150">
      </a>
      <a class="nav-link" href="telephony.php">
        <button class="button-home">Telephony</button>
      </a>
    </div>

    <div class="columna">
      <a href="television.php">
        <img class="imagen-home" src="./img/tv.png" height="150">
      </a>
      <a class="nav-link" href="television.php">
        <button class="button-home">Television</button>
      </a>
    </div>

    <div class="columna">
      <a href="internet.php">
        <img class="imagen-home" src="./img/internet.png" height="150">
      </a>
      <a class="nav-link" href="internet.php">
        <button class="button-home">Internet</button>
     </a>
    </div>

  </div>
</body>
<footer class="footer">
  <div class="contenedor">

    <p class="footer-text"> 
      © 2023 CUBO Telecomunications - All rights reserved.
    </p>
  </div>
</footer>

</html>