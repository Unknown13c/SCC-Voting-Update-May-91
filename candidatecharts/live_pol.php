<?php include ('head.php');?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<style>{
  font-family: 'Poppins', sans-serif;}
</style>
<body  >

    <div id="wrapper">
        <!-- Navigation -->
              <?php include ('navigation-bar.php');?>
        <!-- Page Content -->
        <div id="page-wrapper">                     

                        <div class="chart-content1">
                           <div class="chart-content2">
                            <h2 style="text-align:center; font-size:20px;">Chart Viewing</h2>
                            <ul>
                              <li><a href="live_result.php">President</a></li>
                              <li><a href="vp.php">Vice President</a></li>
                              <li><a href="secretary.php">Secretary</a></li>
                              <li><a href="treasurer.php">Treasurer</a></li>
                              <li><a href="auditor.php">Auditor</a></li>
                              <li><a href="massmedia.php">Mass Media</a></li>
                              <li><a href="peaceOficer.php">Peace Officer</a></li>
                              <li><a href="activitycoor.php">Activity Coordinator</a></li>
                            </ul>

                            <h2 style="font-weight:verdana; text-align:center; font-size:1.5em;">Total Candidates</h2>

                            <div class="total-candidates">
                              <?php
                            require '../dbconnector/dbcon.php';
                              $count =   $conn->query("SELECT COUNT(*) as total FROM `tbl_candidate` WHERE status='approved'")->fetch_array();
                            ?>
                             <p>
                              <a href="../candidates/pres.php">View Candidates</a><br>
                              <?php echo $count['total']; ?>
                                
                              </p>                              
                            </div>

                            <h2 style="font-weight:verdana; text-align:center; font-size:1.5em;">Total Voters</h2>
                              <div class="total-voters">
                              <?php
                            require '../dbconnector/dbcon.php';
                              $count =   $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE status1=''")->fetch_array();
                            ?>
                             <p>                            
                              <a href="voters.php">View Voters</a><br>                            
                              <?php echo $count['total']; ?>                               
                             </p>

                              </div>
                           </div>
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

