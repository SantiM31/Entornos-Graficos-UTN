<?php

  $hostname = "localhost";
  $nombreUsuario = "root";
  $password ="";
  $db = "ciudades";
  $link = mysqli_connect($hostname,$nombreUsuario,$password) or die("Error de conexion");
  mysqli_select_db($link,$db);
  
?>