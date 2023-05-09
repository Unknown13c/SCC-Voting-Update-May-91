<?php include ('head.php');?>

<body>
        <div id="wrapper">
      <!-- Navigation -->
          <?php include ('side_bar.php');?>
      <!-- Page Content -->
        <div id="page-wrapper">
        <div class="row">
        <br><br>
        <div class="panel-heading">
                    <h4 class="modal-title" id="myModalLabel">         
                    <div class="panel panel-default">
                      <div class="panel-heading" style="text-align: center; font-weight:bold;"></i>
                        Candidates Realtime Vote
                      </div>    
                    </div>
                  </h4>
                  <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link active" style="font-weight:bold;" aria-current="page" href="live_result.php">President </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="font-weight:bold;" href="vp.php">Vice-President</a>
                </li>
                    <li class="nav-item">
                         <a class="nav-link" style="font-weight:bold;" href="secretary.php">Secretary</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" style="font-weight:bold;" href="treasurer.php">Treasurer</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" style="font-weight:bold;" href="auditor.php">Auditor</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" style="font-weight:bold;" href="massmedia.php">Mass Media</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" style="font-weight:bold;" href="peaceOfficer.php">Peace Officer</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" style="font-weight:bold;" href="activitycoor.php">Activity Coordinator</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" style="font-weight:bold;" href="Senator.php">Senator</a>
                    </li>

                </ul>
                </div>
              <div class="chart-content3">
              <h2 style="font-size:2em;">Activity Coordinator</h2>
              <canvas id="myBarChart"></canvas>
            </div>
          </div>

         
                       <?php
                     require '../dbconnector/dbcon.php';

                        $names = array();
                         
                        $query = $conn->query("SELECT c.candidate_id, c.firstname, (SELECT COUNT(*) FROM votes v WHERE v.candidate_id = c.candidate_id) as total FROM tbl_candidate c WHERE  position = 'Activity Coordinator' and status = 'approved'");

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
                                  backgroundColor: "rgb(255, 54, 54)",
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
    <?php include ('script.php');?>
</body>

</html>

