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
     <!--Script JS-->
     <script>
        function errorTelefono() {
            let numero = document.getElementById("numero").value;
            document.getElementById("erroNumero").innerHTML = 'Valores insertados: ' + numero.length + "/10";

            if (numero.length > 10) {
                Swal.fire({
                    icon: "error",
                    title: "¡ERROR!",
                    text: "Exede la longitud del campo: " + numero.length + "/10",
                    showConfirmButton: true,
                    confirmButtonText: "ACEPTAR"
                });
            }
        }
    </script>
    <!--CSS-->
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
                            <div class="container text-center">
	<div class="row">
		<div class="col-md-12"><br>
            <div class="card" style="border-radius: 0.7rem;">
                    <div class="card-header">Agregar Usuario</div>
                    <div class="card-body">
                        <form name="formulario_fmt" method="POST" action="../administracion/validaregistro.php" enctype="application/x-www-form-urlencoded">
                            <div class="mb-1">
                                <label for="inputEmail" class="form-label">Correo electrónico</label>
                                <input type="email" name="usuario" class="form-control" id="inputEmail" required>
                            </div>
                            <div class="mb-1">
                                <label for="inputPassword" class="form-label">Contraseña</label>
                                <input type="password" name="pass" class="form-control" id="inputPassword" required >
                            </div>
                            <div class="mb-1">
                                <label for="inputNombre" class="form-label">Nombre</label>
                                <input type="text" name="nombre" class="form-control text-uppercase" id="inputNombre">
                            </div>
                            <div class="mb-1">
                                <label for="inputaPaterno" class="form-label">Apellido Paterno</label>
                                <input type="text" name="apaterno" class="form-control text-uppercase" id="inputaPaterno">
                            </div>
                            <div class="mb-1">
                                <label for="inputaMaterno" class="form-label">Apellido Materno</label>
                                <input type="text" name="amaterno" class="form-control text-uppercase" id="inputaMaterno">
                            </div>
                            <div class="mb-1">
                                <label for="inputDireccion" class="form-label">Dirección</label>
                                <input type="text" name="direccion" class="form-control text-uppercase" id="inputDireccion">
                            </div>
                            <div class="mb-1">
                                <label for="inpuTelefono" class="form-label">Teléfono</label>
                                <input type="number" name="telefono" class="form-control" id="numero" onkeyup="errorTelefono()" required name="numeroTelefono">
                                    <div id="erroNumero"></div>
                            </div><br>
                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </form>
                    </div>
            </div><br>
                        <p>Universidad Autónoma de Chiapas. Derechos Reservados</p>         	
		</div>
	</div>
            </div>
        </div>
    </div>

    <!--BootStrap 5.3 JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vVc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>

</html>
