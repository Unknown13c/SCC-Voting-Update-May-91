<?php include ('head.php');?>

<body>
<!--  <?php include ('nav-bar.php');?> -->


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
                            <h2 style="font-size:2em;">Registered Voters</h2>

                           <div class="table-responsive">                                        
                              <table class="table table-striped table-bordered table-hover" id="dataTables-example" border="0">
                                  <thead class="thead">
                                      <tr>
                                       
                                         <!--  <th>Student ID</th> -->
                                          <th>Names</th>
                                          <!-- <th>Email Add</th> -->
                                          <th>Gender</th>
                                          <th>Department</th>
                                          <th>Year Level</th>
                                          <th>Status</th>
                                         <!--  <th>Date Registered</th> -->
                                          
                                          
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php 
                                          require '../dbconnector/dbcon.php';
                                          $bool = false;                                          
                                          $query = $conn->query("SELECT * FROM voters ORDER BY voters_id DESC");
                                          while($row1 = $query->fetch_array()){
                                          $voters_id=$row1['voters_id'];
                                      ?>
                                    
                                          <tr >
                                              <!-- <td><?php echo $row1 ['id_number'];?></td> -->
                                              <td><?php echo $row1 ['firstname']." ". $row1 ['lastname'];?></td>
                                               <!-- <td><?php echo $row1 ['email']; ?></td> -->
                                              <td><?php echo $row1 ['gender']; ?></td>
                                              <td><?php echo $row1['prog_study'];?></td>
                                              <td><?php echo $row1 ['year_level'];?></td>
                                              <td><?php echo $row1 ['status'];?></td>
                                              <!-- <td><?php echo $row1 ['date'];?></td> -->      
                                          </tr>
                                      
                                     <?php } ?>
                                  </tbody>
                              </table>
                           </div>
                                                        
                           </div>

                         </div>


        </div>
    </div>                         
        <?php 
            include ('script.php');
        ?>                     
</body>
</html>