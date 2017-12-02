<html>
<head>
    <title>Modificacones de Empleados que Imparten Actividades</title>
</head>
<body>

<H1> <center>
        MODIFICACIONES DE EMPLEADOS QUE IMPARTEN ACTIVIDADES
    </center></H1>
    <?php
    $imparte_M = $_POST['imparte_M'];
    $codigo = 0;
include("Conexion.php"); // Cargamos el archivo con información de la conexión
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$sql = "SELECT * FROM Imparte WHERE codigo_ei = '$imparte_M'";
$result = $conexion->query($sql);

$row = $result->fetch_array();
$codigo=$row['codigo_ei'];

if ($codigo>0){
    ?>
    <form action="ModificaImparte.php" method="post">
        <TABLE align=center cellspacing=5>
            <TR>
                <TD colspan=2 align=center>Empleados que Imparten Actividades</TD>
            </TR>
            <TR>
                <TD>Codigo de la Actividad:  </TD>
                <TD><input type="text" name="codigo_ai" value="<?php echo $row['codigo_ai'] ?>"> </TD>
            </TR>
            <TR>
                <TD>Codigo del Empleado: </TD>
                <TD><input type="text" name="codigo_ei" value="<?php echo $row['codigo_ei'] ?>"> </TD>
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