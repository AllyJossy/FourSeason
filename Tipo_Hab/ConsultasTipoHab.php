<html>
<head>
    <title>Consultar Tipos de Habitación</title>
</head>
<body>
<?php
include("Conexion.php");
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$sql = "SELECT * FROM Tipo_hab";
$result = $conexion->query($sql);

mysqli_close($conexion);
?>

<center>

    <H1>
        CONSULTAR TIPOS DE HABITACIÓN
    </H1>
    <br><br>
    <table border="1">
        <thead>
        <tr>
            <th>Codigo de Tipo de Habitación:</th>
            <th>Tipo de Habitación:</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row = $result->fetch_array()){
            ?>
            <tr>
                <td><?php echo $row['codigo_th'] ?></td>
                <td><?php echo $row['tipo_habitacion'] ?></td>
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