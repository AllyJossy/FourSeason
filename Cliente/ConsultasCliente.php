<html>
<head>
    <title>Consultar Clientes</title>
</head>
<body>
<?php
include("Conexion.php");
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$sql = "SELECT * FROM Cliente";
$result = $conexion->query($sql);

mysqli_close($conexion);
?>

<center>

    <H1>
        CONSULTAR CLIENTES
    </H1>
    <br><br>
    <table border="1">
        <thead>
        <tr>
            <th>Codigo del Cliente</th>
            <th>Nombre del Cliente</th>
            <th>Direccion del Cliente</th>
            <th>Telefono del Cliente</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row = $result->fetch_array()){
            ?>
            <tr>
                <td><?php echo $row['codigo_c'] ?></td>
                <td><?php echo $row['nombre_c'] ?></td>
                <td><?php echo $row['direccion_c'] ?></td>
                <td><?php echo $row['telefono_c'] ?></td>
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