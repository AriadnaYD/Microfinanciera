<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microfinanciera</title>
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="js/bootstrap.min.js"></script>
    <style>
        .mt-4 {
            margin-top: 4px !important;
        }

        /* Estilos CSS para la barra de navegación */
        .navbar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #D9D9D9; /* Cambio de color del fondo de la barra de navegación */
            float: right;
        }

        .navbar li {
            float: right;
        }

        .navbar li a {
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Cambio de color del fondo donde va el título */
        .menu-title {
            background-color: #D9D9D9; /* Cambio de color del fondo del título */
        }

        /* Cambio de color del fondo del navegador al hacer clic */
        .navbar-nav .active > .nav-link {
            background-color: blue !important;
            color: white !important;
        }

        /* Ajuste del margen izquierdo del contenido principal */
        .main-content {
            margin-left: -15px; /* Ajusta el margen izquierdo para que coincida con el fondo del navbar */
        }
    </style>
</head>

<body>
    <div class="container-fluid p-0" style="background-color: #D9D9D9;">
        <!-- Barra de navegación y logotipo -->
        <div class="row" style="background-color: #D9D9D9;">
            <div class="col-2" style="background-color: #D9D9D9;">
                <!-- Mostrar el logotipo -->
                <img src="./vistas/img/logo_micro.png" alt="Logo" class="w-100" style="height: 100px; width: 350px;">
            </div>
            <div class="col-8 menu-title" style="display: flex; align-items: center;">
                <center><h1 style="margin: 0; padding: 0;">Otorgar Préstamo</h1></center>
            </div>
            <div class="col-2">
                <!-- Barra de navegación -->
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F5CAC3;">
                    <div class="container"> <!-- Cambiado a container-fluid para extender la barra -->
                        <a class="navbar-brand" href="./vistas/menu.php">Menu</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="otorgarPrestamo.php">Otorgar Prestamo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="nuevoCliente.php">Nuevo Cliente</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="seguimientoPrestamo.php">Seguimiento de Préstamo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="estadoCuenta.php">Estado de Cuenta</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- banner de la página -->
    <div class="container-fluid p-0">
        <div class="row" >
            <div class="col-12">
                <!-- Mostrar el banner -->
                <?php
                // Ruta de la imagen del banner
                $ruta_imagen = "./vistas/img/banner.png";
                ?>
                <img src="<?php echo $ruta_imagen; ?>" alt="Banner" class="w-100" style="height: 100px;">
            </div>
        </div>
    </div><br>

    <!-- Label donde se ingresará la cantidad a validar para el préstamo -->
<section class="mt-4">
    <div class="container">
        <div class="mb-3">
            <label for="loanAmount" style="font-size: 20px;">Monto del préstamo (en pesos):</label>
            <input type="number" id="loanAmount" name="loanAmount" min="1000" max="5000">
            <button onclick="saveToDatabase()" style="font-size: 20px;">Validar y Guardar</button>
        </div>
    </div>
</section><br>

<!-- Label donde se ingresará el tipo de abono a realizar -->
<section class="mt-4">
    <div class="container">
        <div class="mb-3">
            <label for="paymentType" style="font-size: 20px;">Tipo de abono a realizar:</label>
            <select id="paymentType" name="paymentType">
                <option value="diario">Diario</option>
                <option value="semanal">Semanal</option>
                <option value="quincenal">Quincenal</option>
                <option value="mensual">Mensual</option>
            </select>
            <button onclick="calculatePayment()" style="font-size: 20px;">Calcular</button>
        </div>
    </div>
</section>



    <!--BootStrap 5.3 JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vVc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>

</html>
