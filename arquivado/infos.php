<!DOCTYPE HTML>
<html>
<head>
<title>Análise de Dados</title>
<?php
  include "menu.php";
  include "config.php";

  $sql = "SELECT tempo_1_sts as 'y', Nome as 'label' FROM resultados";
  $result = mysqli_query($conn, $sql);
  mysqli_close($conn);
  if ($result) {
    $dataPoints = array();
    while($row = mysqli_fetch_assoc($result)) {
      $dataPoints[] = $row;
    }
  }

?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("tempo_pessoa", {
	title: {
		text: "Tempo por Pessoa STS"
	},
	axisY: {
		title: "Tempo"
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

}
</script>
</head>
<body>
<div id="tempo_pessoa" style="height: 370px; width: 50%; margin-left: 2%; margin-top: 2%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
