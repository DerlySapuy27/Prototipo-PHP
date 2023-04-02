<?php
    if(!isset($_GET['item'])){
        header('Location: ../index.php?mensaje=Error');
        exit();
    }

    include '../models/conexion.php';
    $item = $_GET['item'];

    $sentencia = $bd->prepare("DELETE FROM usuario WHERE item = ?;");
    $resultado = $sentencia->execute([$item]);

    if($resultado == TRUE){
        header('Location: ../index.php?mensaje=Eliminado');
    }else{
        header('Location: ../index.php?mensaje=Error');
    }
?>