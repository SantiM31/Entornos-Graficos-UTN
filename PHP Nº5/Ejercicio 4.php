<?php
session_start();
if (!isset($_SESSION['conteo'])) {
    $_SESSION['conteo'] = 0;
}

$_SESSION['conteo']++;
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>

    <h1>Paginas visitadas</h1>
    <p>Visitaste <?php echo $_SESSION['conteo']; ?> páginas en esta sesión.</p>

</body>
</html>