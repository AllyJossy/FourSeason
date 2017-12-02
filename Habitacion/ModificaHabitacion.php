<html>
<head>
    <meta charset="UTF-8">
    <title>Modificaciones de Habitaciones</title>
</head>
<body>
<?php
include("Conexion.php"); // Cargamos el archivo con información de la conexión
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$numero_hab = $_POST["numero_hab"];
$codigo_thh = $_POST["codigo_thh"];
$precio_h = $_POST['precio_h'];
$codigo_hh = $_POST["codigo_hh"];

if(isset($_POST['numero_hab']) && $_POST['codigo_hh'] != ""){
    $sql = "UPDATE Habitacion SET numero_hab='$numero_hab', codigo_thh='$codigo_thh', precio_h='$precio_h', codigo_hh'$codigo_hh' WHERE numero_hab='$numero_hab'";

    if ($conexion->query($sql) == TRUE) {
        echo '<script>window.alert("La habitación ha sido modificada")</script>';
        echo '<script>window.location = "ModificaHabitacion.html"</script>';
    } else {
        echo '<script>window.alert("Error: "' . $sql . '"<br>"' . $conexion->error . ')</script>';
    }
}else{
    echo '<script>window.alert("Debe ingresar todos los datos")</script>';
    echo '<script>window.location = "ModificacionesHabitacion.php"</script>';
}
mysqli_close($conexion);
echo "<BR><BR> <A HREF=ModificaHabitacion.html> REGRESAR </a>";
?>
</body>
</html>
