<?php include ('head.php');?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                      <?php
          $count1 =  $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Voted'")->fetch_array();
          $count2 =  $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Unvoted' ")->fetch_array();


      ?> <br><br>
<!--             <a href="voted.php" class="btn btn-info" <i class = "fa fa-paw"></i> Voted(<?php echo $count1['total']?>)</a>          
            <a  href="unvoted.php" class="btn btn-info" <i class = "fa fa-paw"></i> Unvoted(<?php echo $count2['total']?>) </a>
            <hr/>	 -->		
				
				<br>
				
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-default">
													<div class="panel-heading"><i class = "fa fa-users"></i>
														Voters List
													</div>     
												</div>
											</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                         
                                           <th>Student ID</th>
                                            <th>Names</th>
                                            <th>Lastname</th>
                                            <th>Gender</th>
                                            <th>Department</th>
                                            <th>Year Level</th>
                                            <th>Birthdate</th>
                                            <th>Status</th>
                                            <th>School Year</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
										<?php 
											require '../dbconnector/dbcon.php';
											$query = $conn->query("SELECT * FROM voters where status = 'Unvoted'");
											while($row = $query->fetch_array()){
												$voters_id=$row ['voters_id'];
										?>
										<tr class="odd gradeX">
											    <td><?php echo $row['id_number'];?></td>
                                                <td><?php echo $row['firstname']?></td>
                                                <td><?php echo $row['lastname'];?></td>
                                                <td><?php echo $row['gender'];?></td>
                                                <td><?php echo $row['department'];?></td>
                                                <td><?php echo $row['year_level'];?></td>
                                                <td><?php echo $row['birthdate'];?></td>
                                                <td><?php echo $row['status'];?></td>
                                                <td><?php echo $row['school_year'];?></td>   
                                        </tr>
										
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
              
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include ('script.php');?>
<!--     <?php include ('edit_voters_modal.php');?> -->
	
</body>

</html>

