<table id="datatable">
<script>
    document.getElementById('nome_div').onChange()
      {

      }
</script>
<script>
    document.getElementById('nome_idade').onChange()
      {

      }
</script>
<?php

  $filtro_id = $_POST['user'];
  if (is_numeric($filtro_id)) {
    require('config.php');
    $sql = "SELECT ID, Nome, Idade, Sexo, NIF, Localidade, Morada, Contacto FROM resultados WHERE ID = $filtro_id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
       echo "<tr>";
         echo "<td> Nome </td>";
         echo "<td> " . $row["Nome"] . " </td>";
       echo "</tr>";
       echo "<tr>";
         echo "<td> Idade </td>";
         echo "<td> " . $row["Idade"] . "";
       echo "</tr>";
       echo "<tr>";
         echo "<td> Sexo </td>";
         echo "<td> " . $row["Sexo"] . "";
       echo "</tr>";
       echo "<tr>";
         echo "<td> NIF </td>";
         echo "<td> " . $row["NIF"] . "";
       echo "</tr>";
       echo "<tr>";
         echo "<td> Localidade </td>";
         echo "<td> " . $row["Localidade"] . "";
       echo "</tr>";
       echo "<tr>";
         echo "<td> Morada </td>";
         echo "<td> " . $row["Morada"] . "";
       echo "</tr>";
       echo "<tr>";
         echo "<td> Contacto </td>";
         echo "<td> " . $row["Contacto"] . "";
       echo "</tr>";
       echo "<tr><td><button type='submit' name='ID' value='".$filtro_id."'>Info</button></td> <td>  </td> </tr>";

      }
    } else {
      echo " O ID que procura não existe! ";

    }
  } else {
    echo "Insira um valor numérico.";
  }



?>

</table>
