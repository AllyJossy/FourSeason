<html>
<head>
    <title>Consultar Clientes</title>
</head>
<body>
<?php
include("Conexion.php");
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

$sql = "SELECT * FROM clientes";
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
            <th>Id Cliente</th>
            <th>Compañia Cliente</th>
            <th>Password</th>
            <th>Nombre del Contacto</th>
            <th>Puesto del Contacto</th>
            <th>Direccion</th>
            <th>Ciudad</th>
            <th>Region</th>
            <th>Codigo Postal</th>
            <th>Pais</th>
            <th>Telefono</th>
            <th>Fax</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row = $result->fetch_array()){
            ?>
            <tr>
                <td><?php echo $row['id_cliente'] ?></td>
                <td><?php echo $row['company'] ?></td>
                <td><?php echo $row['password'] ?></td>
                <td><?php echo $row['nombre_contacto'] ?></td>
                <td><?php echo $row['puesto_contacto'] ?></td>
                <td><?php echo $row['direccion'] ?></td>
                <td><?php echo $row['ciudad'] ?></td>
                <td><?php echo $row['region'] ?></td>
                <td><?php echo $row['cp'] ?></td>
                <td><?php echo $row['pais'] ?></td>
                <td><?php echo $row['telefono'] ?></td>
                <td><?php echo $row['fax'] ?></td>
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