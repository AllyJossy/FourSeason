<html>
<head>
    <title>Consultar Empleados</title>
</head>
<body>
<?php
include("Conexion.php");
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$sql = "SELECT * FROM Empleado";
$result = $conexion->query($sql);

mysqli_close($conexion);
?>

<center>

    <H1>
        CONSULTAR EMPLEADOS
    </H1>
    <br><br>
    <table border="1">
        <thead>
        <tr>
            <th>Codigo del Empleado</th>
            <th>Nombre del Empleado</th>
            <th>Direccion del Empleado</th>
            <th>Dni del Empleado</th>
            <th>Nivel de estudios del Empleado</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row = $result->fetch_array()){
            ?>
            <tr>
                <td><?php echo $row['cod_e'] ?></td>
                <td><?php echo $row['nombre_e'] ?></td>
                <td><?php echo $row['direccion_e'] ?></td>
                <td><?php echo $row['dni_e'] ?></td>
                <td><?php echo $row['nivel_est_e'] ?></td>
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