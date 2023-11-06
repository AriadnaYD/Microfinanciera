<?php
require("../modelo/conexionPDO.php");
?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Sweet Alert-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11" />
    </script>
    <title></title>
</head>

<body>
    <?php
    try {
        //verifico los datos de entrada
        $correo = htmlentities(addslashes($_POST['correo']));
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        echo $correo . ' ' . $contraseña;
        $sql = "SELECT * FROM usuario WHERE correo = :correo";
        //preparo la consulta SQL
        $resultado = $conn->prepare($sql);
        //ejecucion de la consulta
        $resultado->execute(array(":correo" => $correo));
        $login = $resultado->fetch(PDO::FETCH_ASSOC);
        if (password_verify($contraseña, $login['correo'])) {
            echo '<script>
                Swal.fire({
                icon: "success",
                title:"Usuario aceptado",
                text: "Registro correcto",
                showConfirmButton: true,
                confirmButtonText: "Aceptar"
            }) </script>';
        } else {
            //Cierra cadena de conexión
            $query = null;
            $conn = null;
            header("Location: ../../index.php?error=si");
        }*/
    } catch (Exception $e) {
        die($e->getMessage());
    }
    ?>
</body>

</html>