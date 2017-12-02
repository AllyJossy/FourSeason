<html>
<head>
    <title>Consultar Referencias de Empleados</title>
</head>
<body>
<?php
include("Conexion.php");
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$sql = "SELECT * FROM Referencia";
$result = $conexion->query($sql);

mysqli_close($conexion);
?>

<center>

    <H1>
        CONSULTAR REFERENCIAS DE EMPLEADOS
    </H1>
    <br><br>
    <table border="1">
        <thead>
        <tr>
            <th>Código del Empleado</th>
            <th>Código del Tipo de Empleado</th>
            <th>Código del Hotel</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row = $result->fetch_array()){
            ?>
            <tr>
                <td><?php echo $row['codigo_er'] ?></td>
                <td><?php echo $row['codigo_ter'] ?></td>
                <td><?php echo $row['codigo_hr'] ?></td>
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