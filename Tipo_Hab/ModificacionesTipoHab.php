<html>
<head>
    <title>Modificaciones de Tipos de Habitación</title>
</head>
<body>

<H1> <center>
        MODIFICACIONES DE TIPOS DE HABITACIÓN
    </center></H1>
    <?php
    $tipoH_M = $_POST['tipoH_M'];
    $codigo = 0;
include("Conexion.php"); // Cargamos el archivo con información de la conexión
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$sql = "SELECT * FROM Tipo_Hab WHERE codigo_th = '$tipoH_M'";
$result = $conexion->query($sql);

$row = $result->fetch_array();
$codigo=$row['codigo_th'];

if ($codigo>0){
    ?>
    <form action="ModificaTipoHab.php" method="post">
        <TABLE align=center cellspacing=5>
            <TR>
                <TD colspan=2 align=center>Tipos de Habitación</TD>
            </TR>
            <TR>
                <TD>Codigo del Tipo de Habitación:  </TD>
                <TD><input type="text" name="codigo_th" value="<?php echo $row['codigo_th'] ?>"> </TD>
            </TR>
            <TR>
                <TD>Tipo de Habitación: </TD>
                <TD><input type="text" name="tipo_habitacion" value="<?php echo $row['tipo_habitacion'] ?>"> </TD>
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
    echo '<script>window.alert("El Tipo de Habitación no esta registrado en la base de datos.")</script>';
}
?>
</body>
</html>