<?php
	include("Conexion.php"); // Cargamos el archivo con información de la conexión
	$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

	$codigo_th = $_POST["codigo_th"];
    $tipo_habitacion = $_POST["tipo_habitacion"];

    $sql = "INSERT INTO Tipo_hab VALUES(" . $codigo_th . ", '" . $tipo_habitacion . "')";
        
    if ($conexion->query($sql) === TRUE) {
        echo '<script>window.alert("REGISTRO EXITOSO")</script>';
    } else {
        echo '<script>window.alert("ERROR: "' . $sql . '"<br>"' . $conexion->error . ')</script>';
    }
    mysqli_close($conexion);
	echo "<BR><BR> <A HREF=AltasTipoHab.html> REGRESAR </a>";
?>