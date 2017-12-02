<html>
<head>
    <title>Modifica</title>
</head>
<body>

<H1> <center>
        MODIFICACIONES DE REFERENCIAS DE EMPLEADO
    </center></H1>
    <?php
    $referencia_M = $_POST['referencia_M'];
    $codigo = 0;
include("Conexion.php"); // Cargamos el archivo con información de la conexión
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$sql = "SELECT * FROM Referencia WHERE codigo_er = '$referencia_M'";
$result = $conexion->query($sql);

$row = $result->fetch_array();
$codigo=$row['codigo_er'];

if ($codigo>0){
    ?>
    <form action="ModificaReferencia.php" method="post">
        <TABLE align=center cellspacing=5>
            <TR>
                <TD colspan=2 align=center>Referencias de Empleados</TD>
            </TR>
            <TR>
                <TD>Código del Empleado:  </TD>
                <TD><input type="text" name="codigo_er" value="<?php echo $row['codigo_er'] ?>"> </TD>
            </TR>
            <TR>
                <TD>Código del Tipo de Empleado: </TD>
                <TD><input type="text" name="codigo_ter" value="<?php echo $row['codigo_ter'] ?>"> </TD>
            </TR>
            <TR>
                <TD>Código del Hotel: </TD>
                <TD><input type="text" name="codigo_hr" value="<?php echo $row['codigo_hr'] ?>"> </TD>
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
    echo '<script>window.alert("El Empleado no esta registrado en la base de datos.")</script>';
}
?>
</body>
</html>