<?php
if( 
    empty($_POST["Fecha"]) ||  
    empty($_POST["Tipo"]) || 
    empty($_POST["Documento"]) || 
    empty($_POST["Nombre"]) || 
    empty($_POST["Apellido"]) || 
    empty($_POST["Telefono"]) || 
    empty($_POST["Email"])){
        header('location: ../index.php?mensaje=Falta');
        exit();
    }

    include_once "../models/conexion.php";
        $fecha = $_POST['Fecha'];
        $tipo = $_POST['Tipo'];
        $documento = $_POST['Documento'];
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $telefono = $_POST['Telefono'];
        $email = $_POST['Email'];

    $sentencia = $bd  -> prepare("INSERT INTO usuario(fecha,tipo_Documento,numero_Documento,nombre,apellido,telefono,email) VALUES(?,?,?,?,?,?,?);");
    $resultado = $sentencia -> execute([$fecha, $tipo, $documento, $nombre, $apellido, $telefono, $email]);
        
    if ($resultado == TRUE){
        header('location: ../index.php?mensaje=Registrado');
    }else{
        header('location: ../index.php?mensaje=Error');
        exit();
    }
?>