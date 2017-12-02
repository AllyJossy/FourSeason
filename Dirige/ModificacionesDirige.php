<html>
<head>
    <title>Modificacones de Directores</title>
</head>
<body>

<H1> <center>
        MODIFICACIONES DE DIRECTORES
    </center></H1>
    <?php
    $director_M = $_POST['director_M'];
    $codigo = 0;
include("Conexion.php"); // Cargamos el archivo con información de la conexión
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$sql = "SELECT * FROM Dirige WHERE codigo_ed = '$director_M'";
$result = $conexion->query($sql);

$row = $result->fetch_array();
$codigo=$row['codigo_ed'];

if ($codigo>0){
    ?>
    <form action="ModificaDirige.php" method="post">
        <TABLE align=center cellspacing=5>
            <TR>
                <TD colspan=2 align=center>Directores</TD>
            </TR>
            <TR>
                <TD>Codigo del Director:  </TD>
                <TD><input type="text" name="codigo_ed" value="<?php echo $row['codigo_ed'] ?>"> </TD>
            </TR>
            <TR>
                <TD>Codigo del Hotel: </TD>
                <TD><input type="text" name="codigo_hd" value="<?php echo $row['codigo_hd'] ?>"> </TD>
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
    echo '<script>window.alert("El Director no esta registrado en la base de datos.")</script>';
}
?>
</body>
</html>