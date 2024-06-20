<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  setcookie('theme', $_POST['theme']);
}

if (!array_key_exists('theme', $_COOKIE)) {
  setcookie('theme', 'white');
}

function getTheme()
{
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    return $_POST['theme'];
  } else {
    return $_COOKIE['theme'];
  }
}
?>

<html>
<head>
  <title>Ejercicio 1</title>
</head>

<body style="background: <?php echo getTheme(); ?>; ">
  <h1>Color</h1>
  <form method="POST">
    <input type="radio" name='theme' value='white' id='white'>
    <label for="white">Blanco</label>
    <input type="radio" name='theme' value='red' id='red'>
    <label for="red">Rojo</label>
    <input type="radio" name='theme' value='blue' id='blue'>
    <label for="blue">Azul</label>
    <button>Enviar</button>
  </form>

</body>
</html>