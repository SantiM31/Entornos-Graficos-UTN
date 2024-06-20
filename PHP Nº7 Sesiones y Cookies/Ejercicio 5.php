<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $_SESSION['user'] = $_POST['user'];
  $_SESSION['psw'] = $_POST['psw'];
} else {
  if (isset($_GET['clear_session'])) {
    session_unset();
  }
}
?>

<html>
<head>
  <title>Ejercicio 5</title>
</head>
<body>
  <? if(!isset($_SESSION['user'])){ ?>
  <form method="POST">
    <input type="text" name='user' required><br>
    <input type="password" name='psw' required><br>
    <button>Entrar</button>
  </form>
  <?} else {
    echo "<span>Nombre de usuario: ". $_SESSION['user']."</span><br>";
    echo "<span>Clave del cliente: ". $_SESSION['psw']."</span><br>";
    echo "<a href='.?clear_session=true'>Salir</a><br>";
  } ?>
</body>
</html>