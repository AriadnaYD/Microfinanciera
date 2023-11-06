<?php
    session_start();
    require("../modelo/conexionPDO.php");
    $pass_nocifrada = $_POST['pass'];
    $pass_cifrada = password_hash($pass_nocifrada, PASSWORD_DEFAULT, array("cost"=>10));

    if($conn == true){
        $inserta = $conn -> prepare("INSERT INTO usuario(correo,contraseña,nombre_usuario,aPaterno,aMaterno,direccion,telefono)VALUES (:correo, :contraseña, :nombre_usuario, :aPaterno, :aMaterno, :direccion, :telefono)");
        $inserta -> bindParam(':correo', $_POST['usuario']);
        $inserta -> bindParam(':contraseña', $pass_cifrada);
        $inserta -> bindParam(':nombre_usuario', strtoupper($_POST['nombre']));
        $inserta -> bindParam(':aPaterno', strtoupper($_POST['apaterno']));
        $inserta -> bindParam(':aMaterno', strtoupper($_POST['amaterno']));
        $inserta -> bindParam(':direccion', strtoupper($_POST['direccion']));
        $inserta -> bindParam(':telefono', $_POST['telefono']);
        
        $inserta -> execute();

        $conn = null;
        header('Location: ../vistas/menu.php');
    }else {
        echo "Error al procesar recurso";
    }
?>
