<?php

    $clave = "";
    $usuario = "root";
    $bd = "mvc";

    try {
        $bd = new PDO('mysql:host=localhost; dbname='.$bd, $usuario, $clave, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
    }catch(Exception $e) {
        echo "Error: ".$e->getMessage();
    }
?>