<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio1</title>
</head>
<body>
  <h1>Envio mail</h1>

  <form method="post" action="Ejercicio_1.php">
    <input type="email" name="email"></input>
    <button>Enviar</button>
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $to = $_POST["email"];
    $subject = "Prueba mail";
    $body = '<h1>Hola mundo</h1>' .
      '<p>Prueba del envio de correos</p>' .;

    $success = mail($to, $subject, $body);
    if($success){
      echo 'Se envio el correo';
    }
  }
  ?>

</body>
</html>