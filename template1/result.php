<?php
 require_once('dbconnection.php');

 if(isset($_GET['page']))
 {
    $page = $_GET['page'];
 }
 else
 {
    $page = 1;
 }

 $num_per_page = 10;
 $start_from = ($page-1)*10;
 $query = "SELECT * FROM rsvp000 limit  $start_from, $num_per_page";
 $results = mysqli_query($conn, $query);
  
?>
<?php
      require_once('dbconnection.php');
      $cquery = "SELECT Kehadiran, count(*) as number FROM rsvp000 GROUP BY Kehadiran";
      $fire = mysqli_query($conn,$cquery);
?>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Result of RSVP</title>
    <link rel="stylesheet" href= "css/bootstrap/bootstrap.css" />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart()
      {
        var data = google.visualization.arrayToDataTable([
              ['Kehadiran', 'Number'],
              <?php
              while($row = mysqli_fetch_array($fire))
              {
                echo "['".$row["Kehadiran"]."', ".$row["number"]."],";
              }
              ?>
        ]);

        var options = {
          title: 'Percentage Jumlah Kehadiran'
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);

      }
    </script>
  </head>
  <body>
    <div class="container mt-5">
      <h5 class="text-content text-success">List RSVP</h5>
        <div class="table-responsive">
          <table class="table">
            <tr class="text-success">
              <th> Nama </th>
              <th> Nombor Telefon </th>
              <th> Kehadiran </th>
            </tr>
            <tr>
              <?php

                while($data = mysqli_fetch_assoc($results))
                {
              ?>
                <td><?php echo $data['Nama']?></td>
                <td><?php echo $data['Nombor Telefon']?></td>
                <td><?php echo $data['Kehadiran']?></td>
              
            </tr>
            <?php

                }

              ?>
          </div>
      </table>
    </div>
    <?php

          $pr_query = " SELECT * FROM rsvp000";
          $pr_result = mysqli_query($conn, $pr_query);
          $totalrecord = mysqli_num_rows($pr_result);

          $totalpages = ceil($totalrecord/$num_per_page);

          for($i=1;$i<=$totalpages;$i++)
          {
            echo "<a href='result.php?page=" .$i."' class='btn btn-success'>$i</a>";
          }
    ?>
    <br /><br />
    <div style="width:200px;">
          <h4 class="text-content text-success"> Jumlah Kehadiran </h4>
          <br />
          <div id="piechart" style="width: 400px; height 200px;"></div>
    </div>
  </body>
</html>