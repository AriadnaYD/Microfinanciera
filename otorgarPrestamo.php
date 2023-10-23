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
            background-color: #F5CAC3; /* Cambio de color del fondo de la barra de navegación */
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

        /* Ajuste del margen izquierdo del contenido principal */
        .main-content {
            margin-left: -15px; /* Ajusta el margen izquierdo para que coincida con el fondo del navbar */
        }

    </style>
</head>

<body>
    <div class="container-fluid p-0">
        <!-- Barra de navegación y logotipo -->
        <div class="row">
            <div class="col-2">
                <!-- Mostrar el logotipo -->
                <img src="./vistas/img/logo_micro.png" alt="Logo" class="w-100" style="height: 100px;">
            </div>
            <div class="col-10">
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
        <div class="row">
            <div class="col-12">
                <!-- Mostrar el banner -->
                <?php
                // Ruta de la imagen del banner
                $ruta_imagen = "./vistas/img/banner.png";
                ?>
                <img src="<?php echo $ruta_imagen; ?>" alt="Banner" class="w-100" style="height: 100px;">
            </div>
        </div>
    </div>

    <!--BootStrap 5.3 JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vVc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>

</html>
