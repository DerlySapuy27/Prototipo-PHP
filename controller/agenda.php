<?php
if( 
    empty($_POST["Fecha"]) ||  
    empty($_POST["hora"]) || 
    empty($_POST["motivo"]) || ){
        header('location: ../citas.php?mensaje=Falta');
        exit();
    }

    include_once "../models/conexion.php";
        $fecha = $_POST['Fecha'];
        $hora = $_POST['hora'];
        $motivo = $_POST['motivo'];
       

    $sentencia = $bd  -> prepare("INSERT INTO usuario(fecha,tipo_Documento,numero_Documento,nombre,apellido,telefono,email) VALUES(?,?,?,?,?,?,?);");
    $resultado = $sentencia -> execute([$fecha, $hora, $motivo]);
        
    if ($resultado == TRUE){
        header('location: ../citas.php?mensaje=Registrado');
    }else{
        header('location: ../citas.php?mensaje=Error');
        exit();
    }
?>