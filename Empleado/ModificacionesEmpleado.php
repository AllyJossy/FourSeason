<html>
<head>
    <title>Modificaciones de Empleados</title>
</head>
<body>

<H1> <center>
        MODIFICACIONES DE EMPLEADOS
    </center></H1>
    <?php
    $empleado_M = $_POST['empleado_M'];
    $codigo = 0;
include("Conexion.php"); // Cargamos el archivo con información de la conexión
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$sql = "SELECT * FROM Empleado WHERE cod_e = '$empleado_M'";
$result = $conexion->query($sql);

$row = $result->fetch_array();
$codigo=$row['cod_e'];

if ($codigo>0){
    ?>
    <form action="ModificaEmpleado.php" method="post">
        <TABLE align=center cellspacing=5>
            <TR>
                <TD colspan=2 align=center>Empleados</TD>
            </TR>
            <TR>
                <TD>Codigo del Empleado:  </TD>
                <TD><input type="text" name="cod_e" value="<?php echo $row['cod_e'] ?>"> </TD>
            </TR>
            <TR>
                <TD>Nombre del Empleado: </TD>
                <TD><input type="text" name="nombre_e" value="<?php echo $row['nombre_e'] ?>"> </TD>
            </TR>
            <TR>
                <TD>Direccion del Empleado: </TD>
                <TD><input type="text" name="direccion_e" value="<?php echo $row['direccion_e'] ?>"> </TD>> </TD>
            </TR>
            <TR>
                <TD>Dni del Empleado: </TD>
                <TD><input type="text" name="dni_e" value="<?php echo $row['dni_e'] ?>"> </TD>
            </TR>
            <TR>
                <TD>
                    Nivel de estudios del Empleado: </TD>
                <TD><input type="text" name="nivel_est_e" value="<?php echo $row['nivel_est_e'] ?>"> </TD>
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