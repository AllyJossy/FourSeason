<?php
	include("Conexion.php"); // Cargamos el archivo con información de la conexión
	$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

	$id_cliente = $_POST["id_cliente"];
    $company = $_POST["company"];
    $password = $_POST["password"];
	$passwordSha = sha1($password);
    $nombre_contacto = $_POST["nombre_contacto"];
	$puesto_contacto = $_POST["puesto_contacto"];
	$direccion = $_POST["direccion"];
	$ciudad = $_POST["ciudad"];
	$region = $_POST["region"];
	$cp = $_POST["cp"];
	$pais = $_POST["pais"];
    $telefono = $_POST["telefono"];
    $fax = $_POST["fax"];

    $sql = "INSERT INTO clientes VALUES(" . $id_cliente . ", '" . $company . "', '" . $passwordSha . "', '" . $nombre_contacto ."', '" . $puesto_contacto . "', '" . $direccion . "', '" . $ciudad . "', '" . $region . "', '" . $cp . "', '" . $pais . "', '" . $telefono . "', '" . $fax . "')";
        
    if ($conexion->query($sql) === TRUE) {
        echo '<script>window.alert("REGISTRO EXITOSO")</script>';
    } else {
        echo '<script>window.alert("ERROR: "' . $sql . '"<br>"' . $conexion->error . ')</script>';
    }
    mysqli_close($conexion);
	echo "<BR><BR> <A HREF=AltasHotel.html> REGRESAR </a>";
?>