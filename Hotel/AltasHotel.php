<?php
	include("Conexion.php"); // Cargamos el archivo con información de la conexión
	$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

	$codigo_h = $_POST["codigo_h"];
    $nombre_h = $_POST["nombre_h"];
    $categoria_h = $_POST["categoria_h"];
    $direccion_h = $_POST["direccion_h"];

    $sql = "INSERT INTO clientes VALUES(" . $codigo_h . ", '" . $nombre_h . "', '" . $categoria_h . "', '" . $direccion_h . "')";
        
    if ($conexion->query($sql) === TRUE) {
        echo '<script>window.alert("REGISTRO EXITOSO")</script>';
    } else {
        echo '<script>window.alert("ERROR: "' . $sql . '"<br>"' . $conexion->error . ')</script>';
    }
    mysqli_close($conexion);
	echo "<BR><BR> <A HREF=AltasHotel.html> REGRESAR </a>";
?>