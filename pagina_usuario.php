<?php
    require 'modelo/conexcion.php';

    session_start();

    if(isset($_SESSION['username']))
    {
        $nombre_usuario = $_SESSION['username'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina usuario</title>
</head>
<body>
    <h1> Pagina usuario <h1>
    <hr>
    <?php
        echo 'usuario: '.$nombre_usuario;
    ?>
    <hr>
    <a href= "registrar_empleados.php">registrar empleado</a> 
    <hr>
    <a href="modelo/cerrar_sesion.php">Cerrar Sesion</a>

</body>
</html>