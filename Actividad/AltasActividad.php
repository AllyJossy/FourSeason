<?php
	include("Conexion.php"); // Cargamos el archivo con información de la conexión
	$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

	$codigo_a = $_POST["codigo_a"];
    $nombre_a = $_POST["nombre_a"];
    $dia_a = $_POST["dia_a"];
	$hora_ia = $_POST["hora_ia"];
    $hora_fa = $_POST["hora_fa"];

    $sql = "INSERT INTO Actividad VALUES(" . $codigo_a . ", '" . $nombre_a . "', '" . $dia_a . "', '" . $hora_ia ."', '" . $hora_fa . "')";
        
    if ($conexion->query($sql) === TRUE) {
        echo '<script>window.alert("REGISTRO EXITOSO")</script>';
    } else {
        echo '<script>window.alert("ERROR: "' . $sql . '"<br>"' . $conexion->error . ')</script>';
    }
    mysqli_close($conexion);
	echo "<BR><BR> <A HREF=../Actividad/AltasActividad.html> REGRESAR </a>";
?>