<?php
    $hostname = "localhost";
    $nombreUsuario = "root";
    $password ="123";
    $db = "compras";
    $link = mysqli_connect($hostname,$nombreUsuario,$password) or die("Error de conexion");
    mysqli_select_db($link,$db);
?>