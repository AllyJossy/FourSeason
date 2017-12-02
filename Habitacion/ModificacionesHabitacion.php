<html>
<head>
    <title>Modificaciones de Habitaciones</title>
</head>
<body>

<H1> <center>
        MODIFICACIONES DE HABITACIONES
    </center></H1>
    <?php
    $habitacion_M = $_POST['habitacion_M'];
    $numero = 0;
include("Conexion.php"); // Cargamos el archivo con información de la conexión
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$sql = "SELECT * FROM Habitacion WHERE numero_hab = '$habitacion_M'";
$result = $conexion->query($sql);

$row = $result->fetch_array();
$numero=$row['numero_hab'];

if ($numero>0){
    ?>
    <form action="ModificaHabitacion.php" method="post">
        <TABLE align=center cellspacing=5>
            <TR>
                <TD colspan=2 align=center>Habitaciones</TD>
            </TR>
            <TR>
                <TD>
                    Número de la Habitación:
                </TD>
                <TD><input type="text" name="numero_hab" value="<?php echo $row['numero_hab'] ?>"> </TD>
            </TR>
            <TR>
                <TD>
                    Código del Tipo de Habitación:
                </TD>
                <TD><input type="text" name="codigo_thh" value="<?php echo $row['codigo_thh'] ?>"> </TD>
            </TR>
            <TR>
                <TD>
                    Precio de la Habitación:
                </TD>
                <TD><input type="text" name="precio_h" value="<?php echo $row['precio_h'] ?>"> </TD>
            </TR>
            <TR>
                <TD>
                    Código del Hotel:
                </TD>
                <TD><input type="text" name="codigo_hh" value="<?php echo $row['codigo_hh'] ?>"> </TD>
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
    echo '<script>window.alert("La Habitación no esta registrada en la base de datos.")</script>';
}
?>
</body>
</html>