<?php
include("../Conexion/Conexion.php"); // Cargamos el archivo con información de la conexión
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$usuario = $_POST['usuario'];
$password = $_POST['password'];
$passwordSha= sha1($password);
$id=0;

//Consulta-----NOTAR QUE SE USAN LOS VALORES QUE SE CAPTURARON EN LAS VARIABLES
$sql= "SELECT * FROM Usuarios WHERE usuario  = '$usuario' and password  = '$password'";

//Aplicación de consulta
$result = $conexion->query($sql);

//Tomamos el primer valor
$row = $result->fetch_array();
$id = $row['id_usuario'];
$tipo = $row['tipo_usuario'];

if ($id>0){
    if($tipo=="Administrador")
        header("Location: ../Inicio/Admin.html");
    else
        header("Location: ../Inicio/Normal.html");
}else
    echo "Usuario o contraseña incorrectos <br>";
?>