<?php
	include("Conexion.php"); // Cargamos el archivo con información de la conexión
	$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

	$numero_hab = $_POST["numero_hab"];
    $codigo_thh = $_POST["codigo_thh"];
    $precio_h = $_POST["precio_h"];
    $codigo_hh = $_POST["codigo_hh"];

    $sql = "INSERT INTO Habitacion VALUES(" . $numero_hab . ", '" . $codigo_thh . "', '" . $precio_h . "', '" . $codigo_hh . "')";
        
    if ($conexion->query($sql) === TRUE) {
        echo '<script>window.alert("REGISTRO EXITOSO")</script>';
    } else {
        echo '<script>window.alert("ERROR: "' . $sql . '"<br>"' . $conexion->error . ')</script>';
    }
    mysqli_close($conexion);
	echo "<BR><BR> <A HREF=AltasHabitacion.html> REGRESAR </a>";
?>