<?php
    print_r($_POST);

    if(!isset($_POST['item'])){
        header('Location : ../index.php?mensaje=Error');
    }

    include '../models/conexion.php';
    $fecha = $_POST['fecha'];
    $tipo_Documento = $_POST['tipo_Documento'];
    $numero_Documento = $_POST['numero_Documento'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $item = $_POST['item'];

    $sentencia = $bd -> prepare("UPDATE usuario SET fecha = ?, tipo_Documento = ?, numero_Documento = ?, nombre = ?, apellido = ?, telefono = ?, email = ? where item = ?");

    $resultado = $sentencia -> execute([$fecha, $tipo_Documento, $numero_Documento, $nombre, $apellido, $telefono, $email, $item ]);

    if($resultado == TRUE){
        header('Location: ../index.php?mensaje=Editado');
    }else{
        header('Location: ../index.php?mensaje=Error');
        exit();        
    }
?>