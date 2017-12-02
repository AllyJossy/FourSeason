<html>
<head>
    <meta charset="UTF-8">
    <title>Modificaciones de Hoteles</title>
</head>
<body>
<?php
include("Conexion.php"); // Cargamos el archivo con información de la conexión
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$codigo_h = $_POST["codigo_h"];
$nombre_h = $_POST["nombre_h"];
$categoria_h = $_POST['categoria_h'];
$direccion_h = $_POST["direccion_h"];

if(isset($_POST['codigo_h']) && $_POST['nombre_H'] != ""){
    $sql = "UPDATE Hotel SET codigo_h='$codigo_h', nombre_h='$nombre_h', categoria_h='$categoria_h', direccion_h='$direccion_h' WHERE codigo_h='$codigo_h'";

    if ($conexion->query($sql) == TRUE) {
        echo '<script>window.alert("El Hotel ha sido modificado")</script>';
        echo '<script>window.location = "ModificaHotel.html"</script>';
    } else {
        echo '<script>window.alert("Error: "' . $sql . '"<br>"' . $conexion->error . ')</script>';
    }
}else{
    echo '<script>window.alert("Debe ingresar todos los datos")</script>';
    echo '<script>window.location = "ModificacionesHotel.php"</script>';
}
mysqli_close($conexion);
echo "<BR><BR> <A HREF=ModificaHotel.html> REGRESAR </a>";
?>
</body>
</html>
