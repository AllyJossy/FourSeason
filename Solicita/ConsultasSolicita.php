<html>
<head>
    <title>Consultar Clientes que solicitan actividades</title>
</head>
<body>
<?php
include("Conexion.php");
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$sql = "SELECT * FROM Solicita";
$result = $conexion->query($sql);

mysqli_close($conexion);
?>

<center>

    <H1>
        CONSULTAR CLIENTES QUE SOLICITAN ACTIVIDADES
    </H1>
    <br><br>
    <table border="1">
        <thead>
        <tr>
            <th>Codigo del Cliente</th>
            <th>Codigo de la Actividad</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row = $result->fetch_array()){
            ?>
            <tr>
                <td><?php echo $row['codigo_cs'] ?></td>
                <td><?php echo $row['codigo_as'] ?></td>
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