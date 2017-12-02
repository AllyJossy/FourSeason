<html>
<head>
    <meta charset="UTF-8">
    <title>Modificaciones de Empleados</title>
</head>
<body>
<?php
include("Conexion.php"); // Cargamos el archivo con información de la conexión
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$cod_e = $_POST["cod_e"];
$nombre_e = $_POST["nombre_e"];
$direccion_e = $_POST['direccion_e'];
$dni_e = $_POST["dni_e"];
$nivel_est_e = $_POST["nivel_est_e"];

if(isset($_POST['cod_e']) && $_POST['nombre_e'] != ""){
    $sql = "UPDATE Empleado SET cod_e='$cod_e', nombre_e='$nombre_e', direccion_e='$direccion_e', dni_e='$dni_e',
            nivel_est_e = '$nivel_est_e' WHERE cod_e='$cod_e'";

    if ($conexion->query($sql) == TRUE) {
        echo '<script>window.alert("El Empleado ha sido modificado")</script>';
        echo '<script>window.location = "../Empleado/ModificaEmpleado.html"</script>';
    } else {
        echo '<script>window.alert("Error: "' . $sql . '"<br>"' . $conexion->error . ')</script>';
    }
}else{
    echo '<script>window.alert("Debe ingresar el codigo y nombre del empleado ")</script>';
    echo '<script>window.location = "ModificacionesCliente.php"</script>';
}
mysqli_close($conexion);
echo "<BR><BR> <A HREF=ModificaEmpleado.html> REGRESAR </a>";
?>
</body>
</html>
