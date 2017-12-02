<?php
include("Conexion.php"); // Cargamos el archivo con información de la conexión
$conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");
session_start();
if(isset($_SESSION['username']))
{
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
    </head>
    <body>
    <?php
    header('Location: estatica.com');
    ?>
    <h1>YA INICIASTE SESION <?php echo $_SESSION['username'];?></h1>
    <br/><br/>
    <form method="POST" action="">
        <input type="submit" name="cerrarsesion" value="Cerrar Sesion" />
    </form>
    <?php

    if(isset($_POST['cerrarsesion']))
    {
        session_destroy();
        header('location: index.php');
    }

    ?>
    </body>
    </html>
    <?php
}else{
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>REGISTRO</title>
    </head>
    <body>
    <form method="POST" action="">
        <p>Usuario: </p>
        <input type="text" name="userreg"><br/><br/>
        <p>Tipo de Usuario: </p>
        <select size="1" name="tiporeg">
            <option>Administrador</option>
            <option>User</option>
        </select>
            <br/><br/>
        <p>Contraseña: </p>
        <input type="password" name="pwreg"><br/><br/>
        <p>Repite la contraseña: </p>
        <input type="password" name="pwregveri"><br/><br/>
        <input type="submit" name="registrar" value="Registrarme">
    </form>
    <br/><br/>
    <a href="../Login/Login.php">INICIAR SESION</a>
    <?php

    include("Conexion.php"); // Cargamos el archivo con información de la conexión
    $conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");

    if(isset($_POST['registrar']))
    {
        if($_POST['userreg'] == '' or $_POST['pwreg'] == '')
        {
            echo "Debe llenar todos los campos por favor.";
        }else{

            $sql = 'SELECT * FROM usuarios';
            $rec = mysqli_query($conexion,$sql);
            $verificar = 0;

            while($resultado = mysqli_fetch_object($rec))
            {
                if($resultado->nombre == $_POST['userreg'])
                {
                    $verificar = 1;
                }
            }
            if($verificar == 0)
            {
                if($_POST['pwreg'] == $_POST['pwregveri'])
                {
                    $usuario = $_POST['userreg'];
                    $tipo_usuario = $_POST['tiporeg'];
                    $password = $_POST['pwreg'];

                    $conexion->query("INSERT INTO usuarios VALUES (" .$usuario. ", '" .$tipo_usuario. "', '" .$password. "')");
                    mysqli_query($conexion,$sql);

                    echo "Te has registrado con exito.";
                }else{
                    echo "Las contrasenas no coinciden.";
                }
            }else{
                echo "El nombre de usuario ya esta en nuestra base de datos, por favor prueba otro.";
            }
        }
    }
    ?>
    </body>
    </html>
    <?php
}
?>
