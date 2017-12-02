<?php
	include("Conexion.php"); // Cargamos el archivo con información de la conexión
	$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

	$codigo_c = $_POST["codigo_c"];
    $nombre_c = $_POST["nombre_c"];
    $direccion_c = $_POST["direccion_c"];
    $telefono_c = $_POST["telefono_c"];

    $sql = "INSERT INTO Cliente VALUES(" . $codigo_c . ", '" . $nombre_c . "', '" . $direccion_c . "', '" . $telefono_c . "')";
        
    if ($conexion->query($sql) === TRUE) {
        echo '<script>window.alert("REGISTRO EXITOSO")</script>';
    } else {
        echo '<script>window.alert("ERROR: "' . $sql . '"<br>"' . $conexion->error . ')</script>';
    }
    mysqli_close($conexion);
	echo "<BR><BR> <A HREF=../Cliente/AltasCliente.html> REGRESAR </a>";
?>