<?php
    $host = "192.168.64.2";
    $hostuser = "AdminFS";
    $hostpw = "FS123";
    $hostdb = "FourSeason";

    $conexion = mysqli_connect($host,$hostuser,$hostpw,$hostdb);

    if($conexion) {
        return "CONECTADO";
    } else{
        return "NO CONECTADO";
    }
?>