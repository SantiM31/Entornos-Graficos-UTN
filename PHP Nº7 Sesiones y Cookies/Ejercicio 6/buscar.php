<?php
    session_start();
      $hostname = "localhost";
      $nombreUsuario = "root";
      $password ="123";
      $db = "base2";
      $link = mysqli_connect($hostname,$nombreUsuario,$password) or die("Error de conexion");
      mysqli_select_db($link,$db);

        $email = $_POST['email'];
        $vSql= "Select * from alumnos where mail= '$email'";
        $vResultado= mysqli_query($link,$vSql);
        $fila = mysqli_fetch_array($vResultado);
        $_SESSION['nombre']= $fila['nombre'];
        header("Location: mostrarNombre.php");
?>