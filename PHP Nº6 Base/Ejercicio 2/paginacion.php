
<html>
<body>
  <h1>Ciudades</h1>
  <a href="./crearciudad.php">Crear Ciudad</a>
  <a href="./index.php">Ver sin paginacion</a>

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
      $page_size=5;
      $page=( $_GET['page']) ? (int)$_GET['page'] : 0 ;

      $ResultSet_count = mysqli_query($link, "Select count(*) as total from ciudades");
      $total= mysqli_fetch_array($ResultSet_count)["total"];

      $stmt=$link->prepare(
        "select * from ciudades order by id limit ?,?"
      );
      $stmt->bind_param('ii', $page,$page_size);
      $stmt->execute();
      $ResultSet=$stmt->get_result();
      mysqli_close($link);

      while($row=mysqli_fetch_array($ResultSet)){
        echo "<tr>";
        echo "<td>".$row['ID']."</td>";
        echo "<td>".$row['Ciudad']."</td>";
        echo "<td>".$row['Pais']."</td>";
        echo "<td>".$row['Habitantes']."</td>";
        echo "<td>".$row['Superficie']."</td>";
        echo "<td>".$row['TieneMetro']."</td>";
        echo "<td>". "<a href='./editarciudad.php?id=".$row['id']."'> Editar </a>"."</td>";
        echo "</tr>";
      }
    ?>
      <tr>
        <td></td>
        <td>
        <a href="./paginacion.php?page=<? echo $page-$page_size?>" <? if($page==0){echo 'hidden';} ?> > << </a>
        </td>
        <td>
          <a href="./paginacion.php?page=<? echo $page+$page_size?>" <? if($page+$page_size+1>$total){echo 'hidden';} ?>  >  >> </a>
        </td>
    </tr>
    </table>

</body>
</html>