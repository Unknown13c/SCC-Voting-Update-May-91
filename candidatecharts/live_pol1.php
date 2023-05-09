<?php include ('head1.php');?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<style>{
  font-family: 'Poppins', sans-serif;}
</style>
<body  >

    <div id="wrapper">
        <!-- Navigation -->
              <?php include ('navigation-bar1.php');?>
        <!-- Page Content -->
                           <div class="chart-content3">
                            <h2>Overview</h2>                            
                              <canvas id="myBarChart"></canvas>                            
                           </div>

                         </div>

                      <?php
                     require '../dbconnector/dbcon.php';                        
                        $query = $conn->query("SELECT c.candidate_id, c.firstname, (SELECT COUNT(*) FROM votes v WHERE v.candidate_id = c.candidate_id) as total FROM tbl_candidate c WHERE  status = 'approved'");

                          $chartLabels = []; 
                          $chartData = [];
                          while ($userchat= mysqli_fetch_array($query)){
                                $chartLabels[] = $userchat['firstname'];
                                $chartData[] = $userchat['total'];
                          }                 
                            //  var_dump($chartLabels);
                            //  var_dump($chartData);

                            ?>

                      <script type="text/javascript">
                        Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
                        Chart.defaults.global.defaultFontColor = '#000000';
                        

                            // Bargraph for per position
                            var ctx = document.getElementById("myBarChart");
                            var myLineChart = new Chart(ctx,{
                              type: 'bar',
                              data: {
                                labels: <?php echo json_encode($chartLabels);?>,
                                datasets: [{
                                  label: "Votes",
                                  backgroundColor: "rgb(255, 54, 54)",
                                  borderColor: "hsl(0, 41%, 81%)",
                                  
                                  data: [<?php echo implode(",",$chartData);?>],
                                }],

                              },
                              options: {
                                scales: {
                                  xAxes: [{
                                    time: {
                                      unit: 'President'
                                    },
                                    gridLines: {
                                      display: false
                                    },
                                    ticks: {
                                      maxTicksLimit: 50
                                    }
                                  }],
                                  yAxes: [{
                                    ticks: {
                                      min: 0,
                                      max: 150,
                                      maxTicksLimit: 10
                                    },
                                    gridLines: {
                                      display: true
                                    }
                                  }],
                                },
                                legend: {
                                  display: false
                                }
                              }
                            });
                        </script>
        </div>
    </div>
    <!-- /#wrapper -->
    <?php    
        include '../footer.php';
        ?>

</body>

</html>

