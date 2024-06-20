<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['noticia'])) {
  $noticia = $_POST['noticia'];
  setcookie('noticia', $noticia, time() + 3600 * 24 * 365);
} else {
  if (isset($_GET['borrar_cookie'])) {
    $noticia = 'todas';
    setcookie('noticia', $noticia, time() + 3600 * 24 * 365);
  } else {
    if (isset($_COOKIE['noticia'])) {
      $noticia = $_COOKIE['noticia'];
    } else {
      $noticia = 'todas';
    }
  }
}

function listNoticias($eleccion)
{
  switch ($eleccion) {
    case 'Deportes':
      listDeportes();
      break;
    case 'Politica':
      listPolitica();
      break;
    case 'Economia':
      listEconomia();
      break;
    default:
      listDeportes();
      listPolitica();
      listEconomia();
  }
}

function listEconomia()
{
  echo '<li>Aumenta el transporte</li>';
  echo '<li>Aumenta dolar blue a 1500pe, sonamos</li>';
}
function listPolitica()
{
  echo '<li>Milei se reune con Bukele</li>';
  echo '<li>Alberto Fernandez es elegido en España</li>';
}
function listDeportes()
{
  echo '<li>Gano River por 2 goles frente a Boca</li>';
  echo '<li>Se retira Lionel Pernia del TC2000 y busca el campeonato en el Mario Kart</li>';
  echo '<li>Canapino triunfa en el Daytona</li>';
}
?>

<html>
<head>
  <title>Ejercicio 4</title>
</head>
<body>
  <h1>Notcias</h1>

  <form method="POST">
    <input type="radio" id="Politica" name="noticia" value="Politica">
    <label for="Politica">Politica</label>
    <input type="radio" id="Economica" name="noticia" value="Economia">
    <label for="Economia">Economia</label>
    <input type="radio" id="Deportiva" name="noticia" value="Deportes">
    <label for="Deportes">Deportes</label>
    <button>Aceptar</button>
  </form>

  <a href='.?borrar_cookie=true'>Ver todas los tipos de noticia</a>

  <h2>
    Tipo de noticia 
    <?echo $noticia ?>
  </h2>

  <ul>
    <? listNoticias($noticia)?>
  </ul>

</body>
</html>