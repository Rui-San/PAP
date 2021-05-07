<!DOCTYPE html>
<html>
<head>
<title>PAP: Auckland</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #c94747;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #eca63a;
color: whitesmoke;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
  <?php
  include 'menu.php';
   ?>
   <main>
<table>
<tr>
<th>ID</th>
<th>Nome</th>
<th>Tempo</th>
</tr>
<?php

  include 'config.php';

  $sql = "SELECT ID, Nome, Tempo FROM resultados ORDER BY ID";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
echo "<tr>";
 echo "<td>" . $row["ID"] . "</td>";
 echo "<td>" . $row["Nome"] . "</td>";
 echo "<td>" . $row["Tempo"] . "</td>";
   }
  } else {
 echo "<td> 0 Resultados </td>";
 echo "<td> 0 Resultados </td>";
 echo "<td> 0 Resultados </td>";
}
?>
</table>
   </main>
</body>
</html>
