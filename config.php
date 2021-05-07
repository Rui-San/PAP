<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "pap";

$conn = mysqli_connect($servername, $username, $password) or die("Não foi possível conectar ao servidor.");
mysqli_select_db($conn, $db) or die("Não foi possível conectar à base de dados.");

?>
