<html>
<head>
    <title>Consultar Empleados que Imparten Actividades</title>
</head>
<body>
<?php
include("Conexion.php");
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$sql = "SELECT * FROM Imparte";
$result = $conexion->query($sql);

mysqli_close($conexion);
?>

<center>

    <H1>
        CONSULTAR EMPLEADOS QUE IMPARTEN ACTIVIDADES
    </H1>
    <br><br>
    <table border="1">
        <thead>
        <tr>
            <th>Codigo de la Actividad</th>
            <th>Codigo del Empleado</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row = $result->fetch_array()){
            ?>
            <tr>
                <td><?php echo $row['codigo_ai'] ?></td>
                <td><?php echo $row['codigo_ei'] ?></td>
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