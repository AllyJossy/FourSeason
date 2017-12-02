<html>
<head>
    <title>Modificacones de Clientes que solicitan actividades</title>
</head>
<body>

<H1> <center>
        MODIFICACIONES DE CLIENTES QUE SOLICITAN ACTIVIDADES
    </center></H1>
    <?php
    $director_M = $_POST['solicita_M'];
    $codigo = 0;
include("Conexion.php"); // Cargamos el archivo con información de la conexión
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$sql = "SELECT * FROM Solicita WHERE codigo_cs = '$solicita_M'";
$result = $conexion->query($sql);

$row = $result->fetch_array();
$codigo=$row['codigo_cs'];

if ($codigo>0){
    ?>
    <form action="ModificaSolicita.php" method="post">
        <TABLE align=center cellspacing=5>
            <TR>
                <TD colspan=2 align=center>Clientes que solicitan actividades</TD>
            </TR>
            <TR>
                <TD>Codigo del Cliente:  </TD>
                <TD><input type="text" name="codigo_cs" value="<?php echo $row['codigo_cs'] ?>"> </TD>
            </TR>
            <TR>
                <TD>Codigo de la Actividad: </TD>
                <TD><input type="text" name="codigo_as" value="<?php echo $row['codigo_as'] ?>"> </TD>
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