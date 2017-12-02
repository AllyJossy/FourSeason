<?php
	include("Conexion.php"); // Cargamos el archivo con información de la conexión
	$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

	$codigo_cs = $_POST["codigo_cs"];
    $codigo_as = $_POST["codigo_as"];

    $sql = "INSERT INTO Solicita VALUES(" . $codigo_cs . ", '" . $codigo_as . "')";
        
    if ($conexion->query($sql) === TRUE) {
        echo '<script>window.alert("REGISTRO EXITOSO")</script>';
    } else {
        echo '<script>window.alert("ERROR: "' . $sql . '"<br>"' . $conexion->error . ')</script>';
    }
    mysqli_close($conexion);
	echo "<BR><BR> <A HREF=AltasSolicita.html> REGRESAR </a>";
?>