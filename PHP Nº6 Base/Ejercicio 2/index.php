<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>

<h1>Tabla de Ciudades</h1>
  <a href="./crearciudad.php">Crear Ciudad</a>
  <a href="./paginacion.php?page=0">Paginacion</a>
    <table>

    <tr>
      <th>ID</th>
      <th>Ciudad</th>
      <th>Pais</th>
      <th>Habitantes</th>
      <th>Superficie</th>
      <th>TieneMetro</th>
    </tr>

    <?php
      include('./conexion_db.php');
      $ResultSet = mysqli_query($link, "Select * from ciudades order by id");
      mysqli_close($link);
      while($row=mysqli_fetch_array($ResultSet)){
        echo "<tr>";
        echo "<td>".$row['ID']."</td>";
        echo "<td>".$row['Ciudad']."</td>";
        echo "<td>".$row['Pais']."</td>";
        echo "<td>".$row['Habitantes']."</td>";
        echo "<td>".$row['Superficie']."</td>";
        echo "<td>".$row['TieneMetro']."</td>";
        echo "<td>". "<a href='./editarciudad.php?id=".$row['ID']."'> Editar </a>"."</td>";
        echo "</tr>";
      }
    ?>

    </table>

</body>
</html>