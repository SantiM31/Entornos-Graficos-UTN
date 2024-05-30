<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>

    <h1>Recomendacion a un amigo</h1>
    <form method="post" action="Ejercicio_3.php">
        <input type="text" name="nombre" placeholder="Nombre Tuyo" required></input>
        <input type="email" name="email" placeholder="Email de tu amigo"required></input>
        <button>Enviar</button>
    </form>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $to = $_POST['email'];
    $subject = "Prueba recomendacion de " . $_POST['nombre'];
    $body = "<p>Visita nuestro sitio web <a href='https://www.porsche.com'>aqui.</a></p> ";

    $success = mail($to, $subject, $body);
    if($success){
        echo 'Se envio la recomendacion';
    }
}
?>

</body>
</html>