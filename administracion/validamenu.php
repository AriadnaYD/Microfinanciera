<?php
// Requiere el archivo de conexión a la base de datos
require("../modelo/conexionPDO.php");

// Verifica si se recibieron los datos del formulario
if (isset($_POST['correo']) && isset($_POST['contraseña'])) {
    // Obtén los valores del formulario de manera segura
    $correo = htmlentities($_POST['correo']);
    $contraseña = $_POST['contraseña'];

    try {
        // Prepara la consulta SQL para seleccionar al usuario por correo
        $sql = "SELECT * FROM usuario WHERE correo = :correo";
        $statement = $conn->prepare($sql);
        $statement->execute(array(":correo" => $correo));
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        // Verifica si el usuario existe y la contraseña es correcta
        if ($user && password_verify($contraseña, $user['contraseña'])) {
            // Inicia sesión o realiza cualquier otra acción necesaria aquí
            // ...

            // Muestra un mensaje de éxito con SweetAlert
            echo '<script>
                Swal.fire({
                    icon: "success",
                    title:"Usuario aceptado",
                    text: "Inicio de sesión correcto",
                    showConfirmButton: true,
                    confirmButtonText: "Aceptar"
                });
            </script>';
        } else {
            // Redirige al usuario de vuelta al formulario de inicio de sesión con un mensaje de error
            header("Location: ../../index.php?error=si");
        }
    } catch (Exception $e) {
        // Maneja cualquier excepción que pueda ocurrir durante el proceso
        die($e->getMessage());
    } finally {
        // Cierra la conexión a la base de datos al finalizar
        $statement = null;
        $conn = null;
    }
}
?>
