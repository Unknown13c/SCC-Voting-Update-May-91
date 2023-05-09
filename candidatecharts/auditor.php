<?php include ('head.php');?>

<body>
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
                    <h2 style="text-align:center; font-size:20px;">Total Candidates</h2>
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

                        <h2 style="text-align:center; font-size:20px;">Total Voters</h2>
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
                    <h2 style="font-size:2em;">Auditor</h2>
                    <canvas id="myBarChart"></canvas>
                  </div>
                </div>

                          
                        <?php
                     require '../dbconnector/dbcon.php';

                        $names = array();
                         
                        $query = $conn->query("SELECT c.candidate_id, c.firstname, (SELECT COUNT(*) FROM votes v WHERE v.candidate_id = c.candidate_id) as total FROM tbl_candidate c WHERE  position = 'Auditor' and status = 'approved'");

                          $chartLabels = []; 
                          $chartData = [];
                          while ($userchat= mysqli_fetch_array($query)) {
                                $chartLabels[] = $userchat['firstname'];
                                $chartData[] = $userchat['total'];
                          }                 
                            
                            ?>




                      <script type="text/javascript">
                        Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
                        Chart.defaults.global.defaultFontColor = '#292b2c';

                            // Bargraph for per position
                            var ctx = document.getElementById("myBarChart");
                            var myLineChart = new Chart(ctx, {
                              type: 'bar',
                              data: {
                                labels: <?php echo json_encode($chartLabels);?>,
                                datasets: [{
                                  label: "Votes",
                                  backgroundColor: "rgba(2,117,216,1)",
                                  borderColor: "rgba(2,117,216,1)",
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
                                      maxTicksLimit: 6
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
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php    
        include ('../footer.php');
        ?>

</body>

</html>

