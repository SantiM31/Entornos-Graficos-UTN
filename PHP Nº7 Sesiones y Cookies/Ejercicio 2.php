<?php
if (!isset($_COOKIE['count'])) {
  $visitas = 1;
} else {
  $visitas = $_COOKIE['count'] + 1;
}
setcookie('count', $visitas, time() + 3600 * 24 * 365);


function getTitulo()
{
  if (!isset($_COOKIE['count'])) {
    return "Bienvenido";
  } else {
    return "Visitas de esta pagina: " . $_COOKIE['count'] . " veces";
  }
}
?>

<html>
<head>
  <title>Ejercicio 2</title>
</head>
<body>
  <p><? echo getTitulo()?></p>
</body>
</html>