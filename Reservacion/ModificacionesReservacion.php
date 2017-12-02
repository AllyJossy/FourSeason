<html>
<head>
    <title>Modifica</title>
</head>
<body>

<H1> <center>
        MODIFICACIONES DE CLIENTES
    </center></H1>
    <?php
    $cliente_M = $_POST['cliente_M'];
    $id = 0;
include("Conexion.php"); // Cargamos el archivo con información de la conexión
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$sql = "SELECT * FROM clientes WHERE id_cliente = '$cliente_M'";
$result = $conexion->query($sql);

$row = $result->fetch_array();
$id=$row['id_cliente'];

if ($id>0){
    ?>
    <form action="ModificaReservacion.php" method="post">
        <TABLE align=center cellspacing=5>
            <TR>
                <TD colspan=2 align=center>Cliente</TD>
            </TR>
            <TR>
                <TD>Id de cliente:  </TD>
                <TD><input type="text" name="id_cliente" value="<?php echo $row['id_cliente'] ?>"> </TD>
            </TR>
            <TR>
                <TD>Compañia Cliente: </TD>
                <TD><input type="text" name="company" value="<?php echo $row['company'] ?>"> </TD>
            </TR>
            <TR>
                <TD>Password: </TD>
                <TD><input type="text" name="password"> </TD>
            </TR>
            <TR>
                <TD>Nombre del contacto: </TD>
                <TD><input type="text" name="nombre_contacto" value="<?php echo $row['nombre_contacto'] ?>"> </TD>
            </TR>
            <TR>
                <TD>
                    Puesto del contacto: </TD>
                <TD><input type="text" name="puesto_contacto" value="<?php echo $row['puesto_contacto'] ?>"> </TD>
            </TR>
            <TR>
                <TD>
                    Dirección: </TD>
                <TD><input type="text" name="direccion" value="<?php echo $row['direccion'] ?>"> </TD>
            </TR>
            <TR>
                <TD>
                    Ciudad: </TD>
                <TD><input type="text" name="ciudad" value="<?php echo $row['ciudad'] ?>"> </TD>
            </TR>
            <TR>
                <TD>
                    Region:  </TD>
                <TD><input type="text" name="region" value="<?php echo $row['region'] ?>"> </TD>
            </TR>
            <TR>
                <TD>
                    Codigo Postal: </TD>
                <TD><input type="text" name="cp" value="<?php echo $row['cp'] ?>"> </TD>
            </TR>
            <TR>
                <TD>
                    País: </TD>
                <TD>
                    <input type="text" name="pais" value="<?php echo $row['pais'] ?>">
            </TR>
            <TR>
                <TD>
                    Telefono:  </TD>
                <TD><input type="text" name="telefono" value="<?php echo $row['telefono'] ?>"> </TD>
            </TR>
            <TR>
                <TD>
                    Fax:  </TD>
                <TD><input type="text" name="fax" value="<?php echo $row['fax'] ?>"> </TD>
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