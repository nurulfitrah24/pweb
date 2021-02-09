<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>STRUKTUR ALGORITMA</title>
</head>
<body>
  <h2>Tabel Perkalian</h2>
  <?php
    if(isset($_GET['max'])){
      $max = $_GET['max'];
    } else {
      $max = 10;
    }
    if ($max > 10) {
      $max = 10;
    }
   ?>
  <table border="1" cellspacing="0" cellpadding="5">
    <tr>
      <?php
        for ($t=1; $t <= $max ; $t++){?>
          <td>
            <table border="1" cellspacing="5" cellpaddings="5">
              <?php
              for ($n=1; $n <= 10 ; $n++){
                echo "<tr>";
                echo "<td align='center'>".$n." x ".$t." = ".$n*$t."<br>"."</td>";
                echo "</tr>";
              }
              ?>
            </table>
          </td>
        <?php }
         ?>
      </tr>
  </table>
</body>
</html>
