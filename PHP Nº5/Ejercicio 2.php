<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>

    <h1>Consultas</h1>
    <form method="post" action="Ejercicio_2.php">
        <input type="email" name="email" required></input>
        <textarea name="text" required></textarea>
        <button>Enviar</button>
    </form>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $to = 'santimeroi0310@gmail.com';
    $subject = "Prueba consulta";
    $body = $_POST['text'];

    $success = mail($to, $subject, $body);
    if($success){
        echo 'Se envio la consulta';
    }
}
?>

</body>
</html>