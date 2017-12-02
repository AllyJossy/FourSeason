<html>
<head>
    <title>Modificaciones de Hoteles</title>
</head>
<body>

<H1> <center>
        MODIFICACIONES DE HOTELES
    </center></H1>
    <?php
    $hotel_M = $_POST['hotel_M'];
    $codigo = 0;
include("Conexion.php"); // Cargamos el archivo con información de la conexión
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$sql = "SELECT * FROM Hotel WHERE codigo_h = '$hotel_M'";
$result = $conexion->query($sql);

$row = $result->fetch_array();
$codigo=$row['codigo_h'];

if ($codigo>0){
    ?>
    <form action="ModificaHotel.php" method="post">
        <TABLE align=center cellspacing=5>
            <TR>
                <TD colspan=2 align=center>Hoteles</TD>
            </TR>
            <TR>
                <TD>Codigo del Hotel:  </TD>
                <TD><input type="text" name="codigo_h" value="<?php echo $row['codigo_h'] ?>"> </TD>
            </TR>
            <TR>
                <TD>Nombre del Hotel: </TD>
                <TD><input type="text" name="nombre_h" value="<?php echo $row['nombre_h'] ?>"> </TD>
            </TR>
            <TR>
                <TD>Categoria del Hotel: </TD>
                <TD><input type="text" name="categoria_h" value="<?php echo $row['categoria_h'] ?>"> </TD>
            </TR>
            <TR>
                <TD>Direccion del Hotel: </TD>
                <TD><input type="text" name="direccion_h" value="<?php echo $row['direccion_h'] ?>"> </TD>
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
    echo '<script>window.alert("El Hotel no esta registrado en la base de datos.")</script>';
}
?>
</body>
</html>