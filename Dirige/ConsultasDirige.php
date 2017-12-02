<html>
<head>
    <title>Consultar Directores</title>
</head>
<body>
<?php
include("Conexion.php");
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$sql = "SELECT * FROM Dirige";
$result = $conexion->query($sql);

mysqli_close($conexion);
?>

<center>

    <H1>
        CONSULTAR DIRECTORES
    </H1>
    <br><br>
    <table border="1">
        <thead>
        <tr>
            <th>Codigo Director</th>
            <th>Codigo del Hotel</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row = $result->fetch_array()){
            ?>
            <tr>
                <td><?php echo $row['codigo_ed'] ?></td>
                <td><?php echo $row['codigo_hd'] ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <br><br>
</center>
</body>
</html>