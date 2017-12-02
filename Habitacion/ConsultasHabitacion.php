<html>
<head>
    <title>Consultar Habitaciones</title>
</head>
<body>
<?php
include("Conexion.php");
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$sql = "SELECT * FROM Habitacion";
$result = $conexion->query($sql);

mysqli_close($conexion);
?>

<center>

    <H1>
        CONSULTAR HABITACIONES
    </H1>
    <br><br>
    <table border="1">
        <thead>
        <tr>
            <th>Número de la Habitación</th>
            <th>Codigo del Tipo de Habitación</th>
            <th>Precio</th>
            <th>Codigo del Hotel</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row = $result->fetch_array()){
            ?>
            <tr>
                <td><?php echo $row['numero_hab'] ?></td>
                <td><?php echo $row['cod_thh'] ?></td>
                <td><?php echo $row['precio_h'] ?></td>
                <td><?php echo $row['codigo_hh'] ?></td>
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