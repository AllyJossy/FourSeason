<html>
<head>
    <meta charset="UTF-8">
    <title>Modificaciones de Tipos de Habitación</title>
</head>
<body>
<?php
include("Conexion.php"); // Cargamos el archivo con información de la conexión
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$codigo_th = $_POST["codigo_th"];
$tipo_habitacion = $_POST["tipo_habitacion"];

if(isset($_POST['codigo_th']) && $_POST['tipo_habitacion'] != ""){
    $sql = "UPDATE Tipo_hab SET codigo_th='$codigo_th', tipo_habitacion='$tipo_habitacion' WHERE codigo_th='$codigo_th'";

    if ($conexion->query($sql) == TRUE) {
        echo '<script>window.alert("El Tipo de Habitación ha sido modificado")</script>';
        echo '<script>window.location = "ModificaTipoHab.html"</script>';
    } else {
        echo '<script>window.alert("Error: "' . $sql . '"<br>"' . $conexion->error . ')</script>';
    }
}else{
    echo '<script>window.alert("Debe ingresar todos los datos")</script>';
    echo '<script>window.location = "ModificacionesTipoHab.php"</script>';
}
mysqli_close($conexion);
echo "<BR><BR> <A HREF=ModificaTipoHab.html> REGRESAR </a>";
?>
</body>
</html>
