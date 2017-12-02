<html>
<head>
    <meta charset="UTF-8">
    <title>Modificaciones de Clientes que solicitan actividades</title>
</head>
<body>
<?php
include("Conexion.php"); // Cargamos el archivo con información de la conexión
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$codigo_cs = $_POST["codigo_cs"];
$codigo_as = $_POST["codigo_as"];

if(isset($_POST['codigo_cs']) && $_POST['codigo_as'] != ""){
    $sql = "UPDATE Solicita SET codigo_cs='$codigo_cs', codigo_as='$codigo_as' WHERE codigo_cs='$codigo_cs'";

    if ($conexion->query($sql) == TRUE) {
        echo '<script>window.alert("El Cliente ha sido modificado")</script>';
        echo '<script>window.location = "ModificaSolicita.html"</script>';
    } else {
        echo '<script>window.alert("Error: "' . $sql . '"<br>"' . $conexion->error . ')</script>';
    }
}else{
    echo '<script>window.alert("Debe ingresar todos los datos")</script>';
    echo '<script>window.location = "ModificacionesSolicita.php"</script>';
}
mysqli_close($conexion);
echo "<BR><BR> <A HREF=ModificaSolicita.html> REGRESAR </a>";
?>
</body>
</html>
