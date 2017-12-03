<?php
    ini_set("register_globals",'Off'); //no inyectara con todo tipo de variables como las provenientes de formularios
    ini_set("display_errors",'Off'); //el display de mostrar los errores en la pantalla se apagan
    ini_set("log_errors",'On');      //se activa el archivo de errores y se personaliza
    ini_set("error_log','error/php_errors.log");

    include("Conexion/Conexion.php"); // Cargamos el archivo con información de la conexión
    $conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb) or die("Problema con la conexión.");
    session_start();
    if(isset($_SESSION["usuario"])) {
        if ($id>0){
            if($tipo=="Administrador") {
                header("Location: Inicio/Admin.html");
            }else if ($tipo == "User"){
                header("Location: Inicio/Normal.html");
            }else {
                header("Location: Inicio/Cliente.html");
            }
        }
    }
    if(isset($_POST["register"])) {
        if(empty($_POST["usuario"]) && empty($_POST["tusuario"]) && empty($_POST["password"])) {
            echo '<script>alert("Debe completar todos los campos")</script>';
        }
        else {
            $usuario = mysqli_real_escape_string($conexion, $_POST["usuario"]);
            $tusuario = mysqli_real_escape_string($conexion, $_POST["tusuario"]);
            $password = mysqli_real_escape_string($conexion, $_POST["password"]);
            //$password = sha1($password);
            $password = md5($password);
            $sql = "INSERT INTO Usuarios (id_usuario, usuario, tipo_usuario, password) VALUES('','$usuario', '$tusuario', '$password')";
            if ($conexion->query($sql) == TRUE) {
                echo '<script>alert("Registro Completado")</script>';
            }
        }
    }
    if(isset($_POST["login"])) {
        if(empty($_POST["usuario"]) && empty($_POST["password"])) {
            echo '<script>alert("Debe completar todos los campos")</script>';
        }
        else {
            $usuario = mysqli_real_escape_string($conexion, $_POST["usuario"]);
            $password = mysqli_real_escape_string($coexion, $_POST["password"]);
            $password = md5($password);
            $query = "SELECT * FROM Usuarios WHERE usuario = '$usuario' AND password = '$password'";
            $result = mysqli_query($conexion, $query);
            $row = $result->fetch_array();
            $id = $row['id_usuario'];
            $tipo = $row['tipo_usuario'];
            if(mysqli_num_rows($result) > 0) {
                $_SESSION['usuario'] = $usuario;
                if ($id>0){
                    if($tipo=="Administrador") {
                        header("Location: Inicio/Admin.html");
                    }else if ($tipo == "User"){
                        header("Location: Inicio/Normal.html");
                    }else {
                        header("Location: Inicio/Cliente.html");
                    }
                }
            }
            else {
                echo '<script>alert("Datos Incorrectos")</script>';
            }
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <title>Four Season</title>
        <link rel="shortcut icon" href="http://static02.hongkiat.com/logo/hkdc/favicon.ico">
        <link rel="icon" href="http://static02.hongkiat.com/logo/hkdc/favicon.ico">
        <link rel="stylesheet" type="text/css" media="all" href="estilos/estilosFormulario.css">
        <link rel="stylesheet" type="text/css" media="all" href="estilos/responsiveFormulario.css">
    </head>
    <!--oncontextmenu="return false" onkeydown="return false-->
    <br/><br/>
    <center>
        <H1>
            Bienvenido a Four Season
        </H1>
        <br/>
        <img src="Imagenes/FourSeason.jpg">
    </center>
        <?php
        if(isset($_GET["action"]) == "login") {
            ?>
            <section id="container">
                <h3 align="center">Login</h3>
                <br/>
                <form id="hongkiat-form"  method="post">
                    <div id="wrapping" class="clearfix">
                        <section id="aligned">
                            <input type="text" name="usuario" id="usuario" placeholder="Usuario" autocomplete="off" tabindex="1" class="txtinput">
                            <input type="text" name="password" id="password" placeholder="Password" autocomplete="off" tabindex="2" class="txtinput">
                        </section>
                    </div>
                    <section id="buttons">
                        <input type="reset" name="reset" id="resetbtn" class="resetbtn" value="Borrar">
                        <input type="submit" name="login" id="submitbtn" class="submitbtn" tabindex="3" value="Enviar">
                        <br style="clear:both;">
                    </section>
                </form>
            </section>
            <p align="center"><a href="index.php">Registrar</a></p>
            <?php
        }
        else {
            ?>
            <section id="container">
                <h3 align="center">Registrar</h3>
                <br/>
                <form id="hongkiat-form" method="post">
                    <div id="wrapping" class="clearfix">
                        <section id="aligned">
                            <input type="text" name="usuario" id="usuario" placeholder="Usuario" autocomplete="off" tabindex="4" class="txtinput">
                            <input type="text" name="tusuario" id="tusuario" placeholder="TipoUsuario" autocomplete="off" tabindex="5" class="txtinput">
                            <input type="text" name="password" id="password" placeholder="Password" autocomplete="off" tabindex="6" class="txtinput">
                        </section>
                    </div>
                    <section id="buttons">
                        <input type="reset" name="reset" id="resetbtn" class="resetbtn" value="Borrar">
                        <input type="submit" name="register" id="submitbtn" class="submitbtn" tabindex="7" value="Enviar">
                        <br style="clear:both;">
                    </section>
                </form >
            </section>
            <p align="center"><a href="index.php?action=login">Login</a></p>
            <?php
        }
        ?>

    </body>
</html>