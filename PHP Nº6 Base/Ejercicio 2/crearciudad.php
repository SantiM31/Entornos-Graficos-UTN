<?php
  include_once('./conexion_db.php');

  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name=$_POST['Nombre'];
    $pais=$_POST['Pais'];
    $habitantes=$_POST['Habitantes'];
    $superficie=$_POST['Superficie'];
    $tieneMetro=isset($_POST['TieneMetro']) ? 1: 0;

    $stmt=$link->prepare(
      "insert into ciudades (Ciudad, Pais, Habitantes, Superficie, TieneMetro) values (?,?,?,?,?)"
    );
    $stmt->bind_param('ssidi', $name, $pais, $habitantes, $superficie, $tieneMetro);
    $stmt->execute();
    mysqli_close($link);
    header("Location: index.php");
  }

?>

<html>
  <body>
    <h1>Nueva ciudad</h1>

    <form method="POST">
      <label>Nombre:</label>
      <input required name="Nombre" type="text">
      </br>

      <label>Pais:</label>
      <input required name="Pais" type="text">
      </br>

      <label>Habitantes:</label>
      <input required name="Habitantes" type="number">
      </br>

      <label>Superficie:</label>
      <input required name="Superficie" type="number">
      </br>

      <label>Tiene Metro:</label>
      <input  name="TieneMetro" type="checkbox">
      </br>

      <a href="..">cancelar</a>
      <button>Guardar</button>

    </form>
  </body>
</html>