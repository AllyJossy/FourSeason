<html>
<head>
    <title>Consultar Actividades</title>
</head>
<body>
<?php
include("Conexion.php");
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$sql = "SELECT * FROM Actividad";
$result = $conexion->query($sql);

mysqli_close($conexion);
?>

<center>

    <H1>
        CONSULTAR ACTIVIDADES
    </H1>
    <br><br>
    <table border="1">
        <thead>
        <tr>
            <th>Codigo de la Actividad</th>
            <th>Nombre de la Actividad</th>
            <th>Dia de la Actividad</th>
            <th>Hora de Inicio de la Actividad</th>
            <th>Hora de Fin de la Actividad</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row = $result->fetch_array()){
            ?>
            <tr>
                <td><?php echo $row['codigo_a'] ?></td>
                <td><?php echo $row['nombre_a'] ?></td>
                <td><?php echo $row['dia_a'] ?></td>
                <td><?php echo $row['hora_ia'] ?></td>
                <td><?php echo $row['hora_fa'] ?></td>
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