<html>
<head>
    <meta charset="UTF-8">
    <title>Modificaciones de Tipos de Empleado</title>
</head>
<body>
<?php
include("Conexion.php"); // Cargamos el archivo con información de la conexión
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$codigo_te = $_POST["codigo_te"];
$descripcion_te = $_POST["descripcion_te"];

if(isset($_POST['codigo_te']) && $_POST['descripcion_te'] != ""){
    $sql = "UPDATE Tipo_Emp SET codigo_te='$codigo_te', descripcion_te='$descripcion_te' WHERE codigo_te='$codigo_te'";

    if ($conexion->query($sql) == TRUE) {
        echo '<script>window.alert("El Tipo de Empleado ha sido modificado")</script>';
        echo '<script>window.location = "ModificaTipoEmp.html"</script>';
    } else {
        echo '<script>window.alert("Error: "' . $sql . '"<br>"' . $conexion->error . ')</script>';
    }
}else{
    echo '<script>window.alert("Debe ingresar todos los datos")</script>';
    echo '<script>window.location = "ModificacionesTipoEmp.php"</script>';
}
mysqli_close($conexion);
echo "<BR><BR> <A HREF=ModificaTipoEmp.html> REGRESAR </a>";
?>
</body>
</html>
