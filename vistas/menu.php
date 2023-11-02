<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microfinanciera</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <!-- Enlace al archivo CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        .mt-4 {
            margin-top: 4px !important;
        }
        /* Estilos para la sección del logotipo */
        .logo-section {
            background-color: #D9D9D9;
            color: #000;
            border-color: #D9D9D9;
        }
        /* Estilos para el título del menú */
        .menu-title {
            background-color: #D9D9D9;
            color: #000;
            border-color: #D9D9D9;
            text-align: center;
            padding: 20px 0;
        }
        /* Estilos para los botones del menú */
        .menu-button {
            background-color: #F5CAC3;
            color: #000;
            border-color: #F5CAC3;
        }

    </style>
</head>
<body>
    <!-- Sección del logotipo y título del menú -->
    <div class="row logo-section">
        <div class="col-2">
            <!-- Mostrar el logotipo -->
            <img src="../vistas/img/logo_micro.png" alt="Logo" class="w-100" style="height: 100px;">
        </div>
        <div class="col-10 menu-title">
            <!-- Mostrar el título del menú -->
            <h1>Menú</h1>
        </div>
    </div>
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <!-- Botón para cerrar la sesión -->
                <a class="btn btn-outline-dark ms-auto" href="../index.php" class="menu-button" style="background-color: #F5CAC3;color: #000;border-color: #F5CAC3;">Cerrar Sesión</a>
            </div>
        </nav>
        <!-- Colocamos las rutas de las imágenes y botones del menú -->
        <?php
            // Ruta de la imagen del banner
            $ruta_imagen = "../vistas/img/banner.png";
            // Ruta de la imagen del logo otorgar préstamo
            $ruta_otorgar = "../vistas/img/oprestamo.png";
            // Ruta de la imagen del logo otorgar préstamo
            $ruta_seguimiento = "../vistas/img/seguimientoP.png";
            // Ruta de la imagen del logo otorgar préstamo
            $ruta_clienteN = "../vistas/img/clienteNuevo.png";
            // Ruta de la imagen del logo otorgar préstamo
            $ruta_Estadocuenta = "../vistas/img/Estadocuenta.png";

        ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Mostrar el banner -->
                    <img src="<?php echo $ruta_imagen; ?>" alt="Banner" class="w-100" style="height: 100px;">
                </div>
            </div>
            <div class="row mt-4">
                <!-- Columnas para mostrar las imágenes y botones -->
                <div class="col-md-3 d-flex flex-column align-items-center">
                    <img src="<?php echo $ruta_otorgar; ?>" alt="otorgar préstamo" class="w-100" style="height: 200px;">
                    <!-- Botón para otorgar préstamo -->
                    <a href="../otorgarPrestamo.php">
                        <button type="button" class="btn btn-primary mt-2 menu-button">Otorgar Préstamo</button>
                    </a>
                </div>
                <div class="col-md-3 d-flex flex-column align-items-center">
                    <img src="<?php echo $ruta_clienteN; ?>" alt="Cliente nuevo" class="w-100" style="height: 200px;">
                    <!-- Botón para agregar nuevo cliente -->
                    <a href="../nuevoCliente.php">
                        <button type="button" class="btn btn-primary mt-2 menu-button">Nuevo Cliente</button>
                    </a>
                </div>
                <div class="col-md-3 d-flex flex-column align-items-center">
                    <img src="<?php echo $ruta_seguimiento; ?>" alt="Seguimiento de préstamo" class="w-100" style="height: 200px;">
                    <!-- Botón para seguimiento de préstamo -->
                    <a href="../seguimientoPrestamo.php">
                        <button type="button" class="btn btn-primary mt-2 menu-button">Seguimiento de Préstamo</button>
                    </a>
                </div>
                <div class="col-md-3 d-flex flex-column align-items-center">
                    <img src="<?php echo $ruta_Estadocuenta; ?>" alt="Estado de cuenta" class="w-100" style="height: 200px;">
                    <!-- Botón para ver el estado de cuenta -->
                    <a href="../estadoCuenta.php">
                        <button type="button" class="btn btn-primary mt-2 menu-button">Estado de Cuenta</button>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <!-- Scripts de Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>