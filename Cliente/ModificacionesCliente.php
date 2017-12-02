<html>
<head>
    <title>Modificaciones de Clientes</title>
</head>
<body>

<H1> <center>
        MODIFICACIONES DE CLIENTES
    </center></H1>
    <?php
    $cliente_M = $_POST['cliente_M'];
    $codigo = 0;
include("Conexion.php"); // Cargamos el archivo con información de la conexión
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$sql = "SELECT * FROM Cliente WHERE codigo_c = '$cliente_M'";
$result = $conexion->query($sql);

$row = $result->fetch_array();
$codigo=$row['codigo_c'];

if ($codigo>0){
    ?>
    <form action="ModificaCliente.php" method="post">
        <TABLE align=center cellspacing=5>
            <TR>
                <TD colspan=2 align=center>Clientes</TD>
            </TR>
            <TR>
                <TD>Codigo de cliente:  </TD>
                <TD><input type="text" name="codigo_c" value="<?php echo $row['codigo_c'] ?>"> </TD>
            </TR>
            <TR>
                <TD>Nombre Cliente: </TD>
                <TD><input type="text" name="nombre_c" value="<?php echo $row['nombre_c'] ?>"> </TD>
            </TR>
            <TR>
                <TD>Direccion del Cliente: </TD>
                <TD><input type="text" name="direccion_c" value="<?php echo $row['direccion_c'] ?>"> </TD>> </TD>
            </TR>
            <TR>
                <TD>Telefono del Cliente: </TD>
                <TD><input type="text" name="telefono_c" value="<?php echo $row['telefono_c'] ?>"> </TD>
            </TR>
            <TR>
                <TD colspan=2  align=center>
                    <input type="submit" value="Modificar">
                </TD>
            </TR>
            <TABLE>
    </form>
    <?php
}else{
    echo '<script>window.alert("El Cliente no esta registrado en la base de datos.")</script>';
}
?>
</body>
</html>