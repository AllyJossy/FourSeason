<?php
	include("Conexion.php"); // Cargamos el archivo con información de la conexión
	$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

	$codigo_te = $_POST["codigo_te"];
    $descripcion_te = $_POST["descripcion_te"];

    $sql = "INSERT INTO Tipo_Emp VALUES(" . $codigo_te . ", '" . $descripcion_te . "')";
        
    if ($conexion->query($sql) === TRUE) {
        echo '<script>window.alert("REGISTRO EXITOSO")</script>';
    } else {
        echo '<script>window.alert("ERROR: "' . $sql . '"<br>"' . $conexion->error . ')</script>';
    }
    mysqli_close($conexion);
	echo "<BR><BR> <A HREF=AltasTipoEmp.html> REGRESAR </a>";
?>