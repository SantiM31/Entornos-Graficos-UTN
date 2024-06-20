<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  setcookie('name', $name, time() + 3600 * 24 * 365);
  echo '<h1>Nombre registrado</h1>';
  echo '<p>Tu nombre es: ' . $name . '</p>';
  echo '<a href=".">Volver</a>';
  return;
}

function getTitulo()
{
  if (!isset($_COOKIE['name'])) {
    return "Nombre no registrado ";
  } else {
    return "Hola " . $_COOKIE['name'];
  }
}
?>

<html>
<head>
  <title>Ejercicio 3</title>
</head>
<body>
  <h1><? echo getTitulo()?></h1>
  <form method="POST">
    <input name='name' required>
    <button>Enviar</button>
  </form>
</body>
</html>