<html>
<head>
    <meta charset="UTF-8">
    <title>Modificaciones de Directores</title>
</head>
<body>
<?php
include("Conexion.php"); // Cargamos el archivo con información de la conexión
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$codigo_ed = $_POST["codigo_ed"];
$codigo_hd = $_POST["codigo_hd"];

if(isset($_POST['codigo_ed']) && $_POST['codigo_hd'] != ""){
    $sql = "UPDATE Dirige SET codigo_ed='$codigo_ed', codigo_hd='$codigo_hd' WHERE codigo_ed='$codigo_ed'";

    if ($conexion->query($sql) == TRUE) {
        echo '<script>window.alert("El director ha sido modificado")</script>';
        echo '<script>window.location = "ModificaDirige.html"</script>';
    } else {
        echo '<script>window.alert("Error: "' . $sql . '"<br>"' . $conexion->error . ')</script>';
    }
}else{
    echo '<script>window.alert("Debe ingresar todos los datos")</script>';
    echo '<script>window.location = "ModificacionesDirige.php"</script>';
}
mysqli_close($conexion);
echo "<BR><BR> <A HREF=ModificaDirige.html> REGRESAR </a>";
?>
</body>
</html>
