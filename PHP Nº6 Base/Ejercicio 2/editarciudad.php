<?php

  include_once('./conexion_db.php');

  if($_SERVER['REQUEST_METHOD']==='GET'){
    $stmt=$link->prepare(
      "select * from ciudades where id=?"
    );
    $id=$_GET['ID'];
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $city=$stmt->get_result()->fetch_assoc();
    mysqli_close($link);

  }
  else if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(array_key_exists('delete', $_POST)){
      $stmt=$link->prepare(
        "delete from ciudades where ID=?"
      );
      $id=$_POST['ID'];
      $stmt->bind_param('i', $id);
      $stmt->execute();
      mysqli_close($link);
      header("Location: index.php");
      return;
    }

    $id=$_POST['ID'];
    $name=$_POST['Nombre'];
    $pais=$_POST['Pais'];
    $habitantes=$_POST['Habitantes'];
    $superficie=$_POST['Superficie'];
    $tieneMetro=isset($_POST['TieneMetro']) ? 1: 0;

    $stmt=$link->prepare(
      "update ciudades set Ciudad=?, Pais=?, Habitantes=?, Superficie=?, TieneMetro=? where ID=?"
    );
    $stmt->bind_param('ssidii', $name, $pais, $habitantes, $superficie, $tieneMetro, $id);
    $stmt->execute();
    mysqli_close($link);

    header("Location: index.php");
    return;
  }

?>

<html>
  <body>

    <h1>Editar ciudad <? echo $_GET["ID"]?> </h1>
    <form method="POST">
        
      <input hidden name="ID" value='<? echo $_GET["ID"]?>' >
      <label>Nombre:</label>
      <input required name="Nombre" type="text" value='<?echo $city['Ciudad']?>' >
      </br>
      <label>Pais:</label>
      <input required name="Pais" type="text" value='<?echo $city['Pais']?>' >
      </br>
      <label>Habitantes:</label>
      <input required name="Habitantes" type="number" value='<?echo $city['Habitantes']?>' >
      </br>
      <label>Superficie:</label>
      <input required name="Superficie" type="number" value='<?echo $city['Superficie']?>' >
      </br>
      <label>Tiene Metro:</label>
      <input  name="TieneMetro" type="checkbox" <?if($city['TieneMetro'])echo 'checked';?> >
      </br>
      <a href="..">Cancelar</a>
      <button type="submit">Aceptar</button>
      <button name='delete'>Borrar</button>

    </form>

  </body>
</html>