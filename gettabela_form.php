<head>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
</head>

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
         echo "<td class='textbxlabel'> Nome </td>";
         echo "<td> <div   ><input class='textbx' type='text' name='nome' value='" . $row["Nome"] . "'></div> </td>";
       echo "</tr>";
       echo "<tr>";
         echo "<td class='textbxlabel' > Idade </td>";
         echo "<td><div><input class='textbx' type='number' name='idade' value='".$row["Idade"]."'></div></td>";
       echo "</tr>";
       echo "<tr>";
         echo "<td class='textbxlabel' > Sexo </td>";
         echo "<td> <div   ><input class='textbx' type='text' name='sexo' value='" . $row["Sexo"] . "' pattern='[M,F,f,m]' required='required' maxlenght='1'> </div> </td>";
       echo "</tr>";
       echo "<tr>";
         echo "<td class='textbxlabel' > NIF </td>";
         echo "<td> <div   ><input class='textbx' type='number' name='nif' value='" . $row["NIF"] . "' pattern='[0-9]' required='required' maxlenght='9'> </div> </td>";
       echo "</tr>";
       echo "<tr>";
         echo "<td class='textbxlabel' > Localidade </td>";
         echo "<td> <div   ><input class='textbx' type='text' name='localidade' value='" . $row["Localidade"] . "' required='required'> </div> </td>";
       echo "</tr>";
       echo "<tr>";
         echo "<td class='textbxlabel' > Morada </td>";
         echo "<td> <div   ><input class='textbx' type='text' name='morada'  value='" . $row["Morada"] . "' required='required'> </div> </td>";
       echo "</tr>";
       echo "<tr>";
         echo "<td class='textbxlabel' > Contacto </td>";
         echo "<td> <div   ><input class='textbx' type='number' name='contacto' value='" . $row["Contacto"] . "' pattern='[0-9]' maxlenght='9'> </div> </td>";
       echo "</tr>";
       echo "<tr class><td class='analisetablecell'><a href='InfoGraf_User.php?ID=".$filtro_id."'>Análise</a></td><td class='editartablecell' ><button class='textbx'  type='submit' name='Submit' value='".$filtro_id."'>Editar</button></td></tr>";

      }
    } else {
      echo " O ID que procura não existe! ";

    }
  } else {
    echo "Insira um valor numérico.";
  }



?>

</table>
