<?php
	include("Conexion.php"); // Cargamos el archivo con información de la conexión
	$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

	$codigo_er = $_POST["codigo_er"];
    $codigo_ter = $_POST["codigo_ter"];
    $codigo_hr = $_POST["codigo_hr"];

    $sql = "INSERT INTO Referencia VALUES(" . $codigo_er . ", '" . $codigo_ter . "', '" . $codigo_hr . "')";
        
    if ($conexion->query($sql) === TRUE) {
        echo '<script>window.alert("REGISTRO EXITOSO")</script>';
    } else {
        echo '<script>window.alert("ERROR: "' . $sql . '"<br>"' . $conexion->error . ')</script>';
    }
    mysqli_close($conexion);
	echo "<BR><BR> <A HREF=AltasReferencia.html> REGRESAR </a>";
?>