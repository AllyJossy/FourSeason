<html>
<head>
    <meta charset="UTF-8">
    <title>Modificaciones de Actividades</title>
</head>
<body>
<?php
include("Conexion.php"); // Cargamos el archivo con información de la conexión
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$codigo_a = $_POST["codigo_a"];
$nombre_a = $_POST["nombre_a"];
$dia_a = $_POST['dia_a'];
$hora_ia = $_POST["hora_ia"];
$hora_fa = $_POST["hora_fa"];

    $sql = "UPDATE Actividad SET codigo_a='$codigo_a', nombre_a='$nombre_a', dia_a='$dia_a', hora_ia='$hora_ia',
            hora_fa = '$hora_fa' WHERE codigo_a='$codigo_a'";

    if ($conexion->query($sql) == TRUE) {
        echo '<script>window.alert("La Actividad ha sido modificada")</script>';
        echo '<script>window.location = "ModificaActividad.html"</script>';
    } else {
        echo '<script>window.alert("Error: "' . $sql . '"<br>"' . $conexion->error . ')</script>';
    }
mysqli_close($conexion);
echo "<BR><BR> <A HREF=ModificaActividad.html> REGRESAR </a>";
?>
</body>
</html>
