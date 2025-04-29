<?php
    require 'conexion.php';

    $usuario =$_POST ['email'];
    $password = $_POST ['password']; 

    $query_1 = "SELECT email, COUNT(*) AS contar FROM Usuario WHERE email = 'zharickrodriguez@colegioguanenta.edu.co' AND password = '123456789'";

    $consulta = mysqli_query($conexion, $query_1) or trigger_error("error en la consulta MySql: " + mysqli_error($conexion)) ;

    $resultado = mysqli_fetch_array($consulta); 

    if($resultado['contar']>0)
    {
        echo "el usuario existe en la BD<br>";
        echo $resultado[ 'email' ] ;
    }
    else 
    {
        echo " el usuario no existe o usuario o contraseña incorrecta";
    }

?>

