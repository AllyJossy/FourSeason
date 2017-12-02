<html>
<head>
    <title>Modificacones de Tipos de Empleado</title>
</head>
<body>

<H1> <center>
        MODIFICACIONES DE TIPOS DE EMPLEADO
    </center></H1>
    <?php
    $tipoE_M = $_POST['tipoE_M'];
    $codigo = 0;
include("Conexion.php"); // Cargamos el archivo con información de la conexión
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$sql = "SELECT * FROM Tipo_Emp WHERE codigo_te = '$tipoE_M'";
$result = $conexion->query($sql);

$row = $result->fetch_array();
$codigo=$row['codigo_te'];

if ($codigo>0){
    ?>
    <form action="ModificaTipoEmp.php" method="post">
        <TABLE align=center cellspacing=5>
            <TR>
                <TD colspan=2 align=center>Tipos de Empleado</TD>
            </TR>
            <TR>
                <TD>Codigo del Tipo de Empleado:  </TD>
                <TD><input type="text" name="codigo_te" value="<?php echo $row['codigo_te'] ?>"> </TD>
            </TR>
            <TR>
                <TD>Descripción: </TD>
                <TD><input type="text" name="descripcion_te" value="<?php echo $row['descripcion_te'] ?>"> </TD>
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
    echo '<script>window.alert("El Tipo de Empleado no esta registrado en la base de datos.")</script>';
}
?>
</body>
</html>