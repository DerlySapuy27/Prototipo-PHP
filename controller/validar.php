<?php

$user= $_POST['username'];
$clave= $_POST['password'];

session_start();
$_SESSION['username']= $user;

$conexion = mysqli_connect("localhost", "root","", "mvc");

$consulta = "SELECT * FROM usuarios WHERE username ='$user' AND password ='$clave'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_fetch_array($resultado);

if($filas['id_roles']==1){//administrador
    header("location: ../index.php");
}else if($filas['id_roles']==2){//cliente
    header("location: ../controller/consulta.php");
}else{
    echo "<script> alert ('Error de autenticación'); location.href = '../views/login.php';</script>";
}
mysqli_free_result($resultado);
mysqli_close($conexion);