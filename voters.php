<?php include ('head.php');?>

<body>
 <?php include ('nav-bar.php');?>
<div class="col-lg-6">
     <div class="panel panel-default">
        <center>
        <strong><h3>Registered Voters List</h3></strong>
        </center>
            <div class="panel-body">
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
									require 'dbconnector/dbcon.php';
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
        <?php 
            include ('script.php');
        ?>                     
</body>
</html>