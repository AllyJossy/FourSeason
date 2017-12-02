<html>
<head>
    <meta charset="UTF-8">
    <title>Modificaciones de Clientes</title>
</head>
<body>
<?php
include("Conexion.php"); // Cargamos el archivo con información de la conexión
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$codigo_c = $_POST["codigo_c"];
$nombre_c = $_POST["nombre_c"];
$direccion_c = $_POST['direccion_c'];
$telefono_c  = $_POST["telefono_c "];

    $sql = "UPDATE Cliente SET codigo_c='$codigo_c', company='$nombre_c', password='$nombre_c', direccion_c='$direccion_c',
            telefono_c = '$telefono_c' WHERE codigo_c='$codigo_c'";

    if ($conexion->query($sql) == TRUE) {
        echo '<script>window.alert("El cliente ha sido modificado")</script>';
        echo '<script>window.location = "../Cliente/ModificaCliente.html"</script>';
    } else {
        echo '<script>window.alert("Error: "' . $sql . '"<br>"' . $conexion->error . ')</script>';
    }
mysqli_close($conexion);
echo "<BR><BR> <A HREF=ModificaCliente.html> REGRESAR </a>";
?>
</body>
</html>
