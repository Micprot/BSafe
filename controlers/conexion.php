<?php
    //variables de conexion
    $server="Localhost";
    $user="root";
    $password="";
    $db="bees";

    $conexion=mysqli_connect($server,$user,$password,$db);
    $caracteres= mysqli_set_charset($conexion,'urf8');
?>