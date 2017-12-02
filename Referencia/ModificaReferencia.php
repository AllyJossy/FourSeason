<html>
<head>
    <meta charset="UTF-8">
    <title>Modificaciones de Referencias de Empleado</title>
</head>
<body>
<?php
include("Conexion.php"); // Cargamos el archivo con información de la conexión
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$codigo_er = $_POST["codigo_er"];
$codigo_ter = $_POST["codigo_ter"];
$codigo_hr = $_POST['codigo_hr'];

if(isset($_POST['codigo_er']) && ($_POST['codigo_ter']) &&  ($_POST['codigo_hr']) != ""){
    $sql = "UPDATE Referencia SET codigo_er='$codigo_er', codigo_ter='$codigo_ter', codigo_hr='$codigo_hr' WHERE codigo_er='$codigo_er'";

    if ($conexion->query($sql) == TRUE) {
        echo '<script>window.alert("La Referencia del Empleado ha sido modificada")</script>';
        echo '<script>window.location = "ModificaReferencia.html"</script>';
    } else {
        echo '<script>window.alert("Error: "' . $sql . '"<br>"' . $conexion->error . ')</script>';
    }
}else{
    echo '<script>window.alert("Debe ingresar todos los datos")</script>';
    echo '<script>window.location = "ModificacionesReferencia.php"</script>';
}
mysqli_close($conexion);
echo "<BR><BR> <A HREF=ModificaReferencia.html> REGRESAR </a>";
?>
</body>
</html>
