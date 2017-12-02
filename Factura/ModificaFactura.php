<html>
<head>
    <meta charset="UTF-8">
    <title>Modificaciones de Clientes</title>
</head>
<body>
<?php
include("Conexion.php"); // Cargamos el archivo con información de la conexión
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$id_cliente = $_POST["id_cliente"];
$company = $_POST["company"];
$password = $_POST['password'];
$passwordSha = sha1($password);
$nombre_contacto = $_POST["nombre_contacto"];
$puesto_contacto = $_POST["puesto_contacto"];
$direccion = $_POST["direccion"];
$ciudad = $_POST["ciudad"];
$region = $_POST["region"];
$cp = $_POST["cp"];
$pais = $_POST["pais"];
$telefono = $_POST["telefono"];
$fax = $_POST["fax"];

if(isset($_POST['password']) && $_POST['password'] != ""){
    $sql = "UPDATE clientes SET id_cliente='$id_cliente', company='$company', password='$passwordSha', nombre_contacto='$nombre_contacto',
            puesto_contacto = '$puesto_contacto', direccion = '$direccion', ciudad = '$ciudad', region = '$region',
			cp = '$cp', pais = '$pais', telefono = '$telefono', fax='$fax' WHERE id_cliente='$id_cliente'";

    if ($conexion->query($sql) == TRUE) {
        echo '<script>window.alert("El cliente ha sido modificado")</script>';
        echo '<script>window.location = "ModificaHotel.html"</script>';
    } else {
        echo '<script>window.alert("Error: "' . $sql . '"<br>"' . $conexion->error . ')</script>';
    }
}else{
    echo '<script>window.alert("Debe ingresar una contraseña")</script>';
    echo '<script>window.location = "ModificacionesCliente.php"</script>';
}
mysqli_close($conexion);
?>
</body>
</html>
