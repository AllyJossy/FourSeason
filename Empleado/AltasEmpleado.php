<?php
	include("Conexion.php"); // Cargamos el archivo con información de la conexión
	$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

	$cod_e = $_POST["cod_e"];
    $nombre_e = $_POST["nombre_e"];
    $direccion_e= $_POST["direccion_e"];
    $dni_e = $_POST["dni_e"];
	$nivel_est_e = $_POST["nivel_est_e"];

    $sql = "INSERT INTO Empleado VALUES(" . $cod_e . ", '" . $nombre_e . "', '" . $direccion_e . "', '" . $dni_e ."', '" . $nivel_est_e . "')";
        
    if ($conexion->query($sql) === TRUE) {
        echo '<script>window.alert("REGISTRO EXITOSO")</script>';
    } else {
        echo '<script>window.alert("ERROR: "' . $sql . '"<br>"' . $conexion->error . ')</script>';
    }
    mysqli_close($conexion);
	echo "<BR><BR> <A HREF=../Empleado/AltasEmpleado.html> REGRESAR </a>";
?>