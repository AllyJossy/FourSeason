<html>
<head>
    <meta charset="UTF-8">
    <title>Modificaciones de Empleados que Imparten Actividades</title>
</head>
<body>
<?php
include("Conexion.php"); // Cargamos el archivo con información de la conexión
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$codigo_ai = $_POST["codigo_ai"];
$codigo_ei = $_POST["codigo_ei"];

if(isset($_POST['codigo_ai']) && $_POST['codigo_ei'] != ""){
    $sql = "UPDATE Imparte SET codigo_ai='$codigo_ai', codigo_ei='$codigo_ei' WHERE codigo_ei='$codigo_ei'";

    if ($conexion->query($sql) == TRUE) {
        echo '<script>window.alert("El director ha sido modificado")</script>';
        echo '<script>window.location = "ModificaImparte.html"</script>';
    } else {
        echo '<script>window.alert("Error: "' . $sql . '"<br>"' . $conexion->error . ')</script>';
    }
}else{
    echo '<script>window.alert("Debe ingresar todos los datos")</script>';
    echo '<script>window.location = "ModificacionesImparte.php"</script>';
}
mysqli_close($conexion);
echo "<BR><BR> <A HREF=ModificaImparte.html> REGRESAR </a>";
?>
</body>
</html>
