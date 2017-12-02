<html>
<head>
    <title>Modificaciones de Actividades</title>
</head>
<body>

<H1> <center>
        MODIFICACIONES DE ACTIVIDADES
    </center></H1>
    <?php
    $actividad_M = $_POST['actividad_M'];
    $codigo = 0;
include("Conexion.php"); // Cargamos el archivo con información de la conexión
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$sql = "SELECT * FROM Actividad WHERE codigo_a = '$actividad_M'";
$result = $conexion->query($sql);

$row = $result->fetch_array();
$codigo=$row['codigo_a'];

if ($codigo>0){
    ?>
    <form action="ModificaActividad.php" method="post">
        <TABLE align=center cellspacing=5>
            <TR>
                <TD colspan=2 align=center>Actividades</TD>
            </TR>
            <TR>
                <TD>
                    Codigo de la Actividad:
                </TD>
                <TD><input type="text" name="codigo_a" value="<?php echo $row['codigo_a'] ?>"> </TD>
            </TR>
            <TR>
                <TD>
                    Nombre de la Actividad:
                </TD>
                <TD><input type="text" name="nombre_a" value="<?php echo $row['nombre_a'] ?>"> </TD>
            </TR>
            <TR>
                <TD>
                    Dia de la Actividad:
                </TD>
                <TD><input type="text" name="dia_a" value="<?php echo $row['dia_a'] ?>"> </TD>
            </TR>
            <TR>
                <TD>
                    Hora de Inicio de la Actividad:
                </TD>
                <TD><input type="text" name="hora_ia" value="<?php echo $row['hora_ia'] ?>"> </TD>
            </TR>
            <TR>
                <TD>
                    Hora de Fin de la Actividad:
                </TD>
                <TD><input type="text" name="hora_fa" value="<?php echo $row['hora_fa'] ?>"> </TD>
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
    echo '<script>window.alert("La Actividad no esta registrada en la base de datos.")</script>';
}
?>
</body>
</html>