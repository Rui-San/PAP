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
    //sugiro a colocares os campos das tabelas e variáveis tudo em minúsculas
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
       ?>
        <tr>
          <td class='textbxlabel'> Nome </td>
          <td><div><input class='textbx' type='text' name='nome' value="<?php echo $row['Nome'] ?>" required='required'></div></td>
        </tr>
        <tr>
          <td class='textbxlabel'> Idade </td>
          <td><div><input class='textbx' type='number' name='idade' value="<?php echo $row['Nome'] ?>" required='required'></div></td>
        </tr>
        <tr>
          <td class='textbxlabel'> Sexo </td>
          <td><div><input class='textbx' type='text' name='sexo' value="<?php echo $row['Nome'] ?>" required='required' pattern='[M,F,f,m]' maxlenght='1'></div></td>
        </tr>
        <tr>
          <td class='textbxlabel'> NIF </td>
          <td><div><input class='textbx' type='number' name='nif' value="<?php echo $row['Nome'] ?>" pattern='[0-9]' required='required' maxlenght='9'></div></td>
        </tr>
        <tr>
          <td class='textbxlabel'> Localidade </td>
          <td><div><input class='textbx' type='text' name='localidade' value="<?php echo $row['Nome'] ?>" required='required'></div></td>
        </tr>
        <tr>
          <td class='textbxlabel'> Morada </td>
          <td><div><input class='textbx' type='text' name='nome' value="<?php echo $row['Nome'] ?>" required='required'></div></td>
        </tr>
        <tr>
          <td class='textbxlabel'> Contacto </td>
          <td><div><input class='textbx' type='number' name='nome' value="<?php echo $row['Nome'] ?>" required='required' pattern='[0-9]' maxlenght='9'></div></td>
        </tr>
        <tr class><td class='analisetablecell'><a href='InfoGraf_User.php?ID=<?php echo $filtro_id; ?>'>Análise</a></td><td class='editartablecell' ><button class='textbx'  type='submit' name='Submit' value='<?php echo $filtro_id; ?>'>Editar</button></td></tr>";
        <?php
      }
    } else {
      echo " O ID que procura não existe! ";
    }
  } else {
    echo "Insira um valor numérico.";
  }
?>

</table>
