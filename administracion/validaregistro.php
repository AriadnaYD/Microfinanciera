<?php
    session_start();
    require("../modelo/conexionPDO.php");
    $pass_nocifrada = $_POST['pass'];
    $pass_cifrada = password_hash($pass_nocifrada, PASSWORD_DEFAULT, array("cost"=>10));

    if($conn == true){
        $inserta = $conn -> prepare("INSERT INTO usuario(nombre_usuario,contraseña,aPaterno,aMaterno,id_direccion,id_correo,id_telefono) VALUES (:nombre_usuario, :contraseña, :aPaterno, :aMaterno, :id_direccion, :id_correo, :id_telefono)");
        $inserta -> bindParam(':nombre_usuario', strtoupper($_POST['nombre']));
        $inserta -> bindParam(':contraseña', $pass_cifrada);
        $inserta -> bindParam(':aPaterno', strtoupper($_POST['apaterno']));
        $inserta -> bindParam(':aMaterno', strtoupper($_POST['amaterno']));
        $inserta -> bindParam(':id_direccion', $_POST['id_direccion']);
        $inserta -> bindParam(':id_correo', $_POST['id_correo']);
        $inserta -> bindParam(':id_telefono', $_POST['id_telefono']);
        
        $inserta -> execute();

        $conn = null;
        header('Location: ../vistas/menu.php');
    }else {
        echo "Error al procesar recurso";
    }
?>
