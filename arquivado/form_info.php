<!DOCTYPE html>
<html>
  <head>
    <title>PAP: Auckland</title>
    <script language="javascript" src="jquery-3.5.1.min.js"></script>
    <script language="javascript">
      $(document).ready(function(){
          $("#database").change(function () {
              $("#database").each(function () {
                  user = $(this).val();
                  $.post("gettabela_form.php", { user: user }, function(data){
                      $("#output").html(data);
                  });
              });
          })
      });
    </script>
  </head>
  <body>
    <?php
    include 'menu.php';
     ?>
     <main>
       <label for="database">Insere um ID:</label>
       <input list="databaselist" id="database" class="input-filter">
        <datalist id="databaselist">
         <?php
           include 'config.php';

           $sql = "SELECT ID, Nome FROM resultados ORDER BY ID";
           $result = mysqli_query($conn, $sql);
           mysqli_close($conn);
           if ($result) {
            while($row = mysqli_fetch_assoc($result)) {
              echo "<option value='".$row['ID']."'>" .$row['Nome']. "</option>" ;
            }
           }

          ?>
        </datalist>
        <div id="tempos">
        </div>
     </main>
  </body>
</html>
