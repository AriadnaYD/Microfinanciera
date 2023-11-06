<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microfinanciera</title>
    <!--Bootstrap 5.3 CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        .mt-4 {
            margin-top: 4px !important;
        }

        .rounded-t-5 {
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }

        @media (min-width: 992px) {
            .rounded-tr-lg-0 {
                border-top-right-radius: 0;
            }

            .rounded-bl-lg-5 {
                border-bottom-left-radius: 0.5rem;
            }
        }
    </style>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col text-center">
                <h1>Microfinanciera</h1>
            </div>
        </div><br>
        <div class="row">
            <div class="col text-center">

                <!-- Section: Design Block -->
                <section class="text-center text-lg-start">
                    <div class="card mb-3">
                        <div class="row g-0 d-flex align-items-center">
                            <div class="col-lg-4 d-none d-lg-flex">
                                <img src="./vistas/img/logo_micro.png" alt="Trendy Pants and Shoes"
                                    class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
                            </div>
                            <div class="col-lg-8">
                                <div class="card-body py-5 px-md-5">

                                    <form action="./vistas/menu.php" method="POST">
                                    <?php
                                        // Verifica si se ha enviado un error desde el script de validación
                                        if (isset($_GET['error']) && $_GET['error'] === 'si') {
                                            echo '<script>
                                            Swal.fire({
                                            icon: "error",
                                            title: "¡ERROR!",
                                            text: "Inicio de sesión fallido",
                                            showConfirmButton: true,
                                            confirmButtonText: "Aceptar"
                                            });
                                            </script>';
                                        }
                                        ?>
                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input type="email" id="form2Example1" name="email" class="form-control" />
                                            <label class="form-label" for="form2Example1">Email address</label>
                                        </div>

                                        <!-- Password input -->
                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example2" name="password" class="form-control" />
                                            <label class="form-label" for="form2Example2">Password</label>
                                        </div>

                                        <!-- 2 column grid layout for inline styling -->
                                        <div class="row mb-4">
                                            <div class="col d-flex justify-content-center">
                                                <!-- Checkbox -->
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <!-- Simple link -->
                                                <a href="#!">Forgot password?</a>
                                            </div>
                                        </div>
                                        <!-- New user section -->
                                        <div class="row mb-4">
                                            <div class="col">
                                                <p>¿Nuevo usuario? <a href="registroUsuario.php">Regístrate aquí</a></p>
                                            </div>
                                        </div>

                                        <!-- Submit button -->
                                        <button type="submit" class="btn btn-primary btn-block mb-4">Ingresar</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section: Design Block -->


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