<?php
    session_start();
    if (isset($_SESSION['nombre']))
    {
        $alu= "Bienvendio " . $_SESSION['nombre'];
    }else{
        $alu ="Ingreso no autorizado";
    }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <?php
       echo "$alu";
    ?>
</body>
</html>