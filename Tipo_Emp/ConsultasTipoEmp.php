<html>
<head>
    <title>Consultar Tipos de Empleado</title>
</head>
<body>
<?php
include("Conexion.php");
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$sql = "SELECT * FROM Tipo_Emp";
$result = $conexion->query($sql);

mysqli_close($conexion);
?>

<center>

    <H1>
        CONSULTAR TIPOS DE EMPLEADOS
    </H1>
    <br><br>
    <table border="1">
        <thead>
        <tr>
            <th>Código del Tipo de Empleado</th>
            <th>Descripción</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row = $result->fetch_array()){
            ?>
            <tr>
                <td><?php echo $row['codigo_te'] ?></td>
                <td><?php echo $row['descripcion_te'] ?></td>
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