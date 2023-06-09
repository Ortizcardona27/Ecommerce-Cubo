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
        <a href="home.php">
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
                                    <a class="nav-link" href="home.php">Home
                                        <span class="visually-hidden">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="products.php">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="cases.php">Cases</a>
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
        <h1 class="centrar-texto">CASE FORM</h1>
        <div class="container-cases">

            <form action="https://formsubmit.co/8a25e0c00b850e0d8eb6943d0da8a611" method="POST" id="formulario">
                <div class="row">
                    <div class="col">
                        <label for="subject">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject </label>
                        <input name="subject" type="text" class="form1" id="subject" maxlength="60" required>
                    </div>

                    <div class="col">
                        <label for="caseType">Case Type </label>
                        <select name="caseType" id="caseType" class="form1">
                            <option>Request</option>
                            <option>Support</option>
                            <option>Complaint</option>
                            <option>Others</option>
                        </select>
                    </div>
                </div>

                <p></p>
                <p></p>

                <div class="row">
                    <div class="col">
                        <label for="name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name </label>
                        <input name="name" type="text" class="form1" id="name" required>
                    </div>
                    <div class="col">
                        <label for="phone">Cellphone </label>
                        <input name="cellphone" type="phone" class="form1" id="phone" maxlength="10" required>
                    </div>
                </div>
                <p></p>
                <p></p>
                <div class="row">
                    <div class="col">
                        <label for="description">Description </label>
                        <input name="description" type="text" class="form1" id="description" required>
                    </div>
                    <div class="col">
                        <label for="email">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-Mail </label>
                        <input name="email" type="email" class="form1" placeholder="example@gmail.com" id="email"
                            required>
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
                <button type="submit" class="button-cases-form" id="ingresar" data-bs-toggle="modal"
                    data-bs-target="#modal">SEND</button>
                <input type="hidden" name="_next" value="http://localhost/E-commerce%20CUBO/home.php">
                <input type="hidden" name="_captcha" value="false">
            </form>
        </div>

        <div class="columna-casos">
            <img class="card-img-top mt-2" src="./img/casos.png" alt="Card image cap">
        </div>
    </div>

    <div class="container-xl">
        <div class="modal" tabindex="-1" role="dialog" id="modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Case Register</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <h3 class="modal-title">your case was registered in our system correctly. We will contact you as
                        soon as possible.</h3>
                </div>
            </div>
        </div>
    </div>
    

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