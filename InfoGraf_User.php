<?php
include 'menu.php';
include 'config.php';

if(!isset($_GET["ID"])){
  #header("Location:info_form.php?Value=Erro");
}else{
$id = $_GET["ID"];
$sql = "SELECT Nome, tempo_1_sts, tempo_2_sts, tempo_3_sts, tempo_4_sts, tempo_5_sts , tempo_1_tug, tempo_2_tug, tempo_3_tug, tempo_4_tug, tempo_5_tug FROM resultados WHERE ID = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
 ?>
 <head>
 <title>Análise | Auckland</title>
 <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
 <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
 <script type="text/javascript">
 $(function() {
 	$(".chartContainer").CanvasJSChart({
 		title: {
 			<?php echo 'text: "Teste STS de '.$row["Nome"].'"' ?>
 		},
 		axisY: {
 			title: "Tempo em Segundos",
 			includeZero: false
 		},
 		axisX: {
      title: "Checkpoints",
 			interval: 5
 		},
 		data: [
 		{
 			type: "line", //try changing to column, area
 			toolTipContent: "{label}: {y} seg ",
 			dataPoints: [
        <?php
      echo '  { label: "1",  y: '.$row["tempo_1_sts"].' },';
      echo '  { label: "2",  y: '.$row["tempo_2_sts"].' },';
      echo '  { label: "3",  y: '.$row["tempo_3_sts"].' },';
      echo '  { label: "4",  y: '.$row["tempo_4_sts"].' },';
      echo '  { label: "5",  y: '.$row["tempo_5_sts"].' }' ;
 				?>
 			]
 		}
 		]
 	});
 });
 </script>
 <script type="text/javascript">
 $(function() {
   $(".chartContainer2").CanvasJSChart({
     title: {
       <?php echo 'text: "Teste TUG de '.$row["Nome"].'"' ?>
     },
     axisY: {
       title: "Tempo em Segundos",
       includeZero: false
     },
     axisX: {
      title: "Checkpoints",
       interval: 5
     },
     data: [
     {
       type: "line", //try changing to column, area
       toolTipContent: "{label}: {y} seg ",
       dataPoints: [
        <?php
      echo '  { label: "1",  y: '.$row["tempo_1_tug"].' },';
      echo '  { label: "2",  y: '.$row["tempo_2_tug"].' },';
      echo '  { label: "3",  y: '.$row["tempo_3_tug"].' },';
      echo '  { label: "4",  y: '.$row["tempo_4_tug"].' },';
      echo '  { label: "5",  y: '.$row["tempo_5_tug"].' }' ;
         ?>
       ]
     }
     ]
   });
 });
 </script>


 </head>
 <body>
     <div class="chartContainer"></div>
      <div class="chartContainer2"></div>
     <div id="coluna-peso">

       <table>
           <tr>
            <td>
             <p>One</p>
             </td>
            <td>
             <p>Two</p>
             </td>
           </tr>
           <tr>
            <td>
             <p>Three</p>
             </td>
            <td >
             <p>Four</p>
             </td>
           </tr>
          </tbody>
         </table>
       </div>
 </body>
<?php } ?>
