
<?php include ('head.php');?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
            	<br><br>
            	<?php
            		require '../dbconnector/dbcon.php';
            		$years = $conn->query("SELECT year FROM `tbl_partylist`")->fetch_array();
            	?>
                     <div class="panel panel-default">
                        <div class="panel-heading">
							<h4 class="modal-title" id="myModalLabel">         
								<div class="panel panel-default">
									
									<div id="panel1" class="panel-heading">
										<center>
											<div class="logos">
									<img style="width: 6pc;" src="logo/scclogo.png">
											</div><p class="report">STUDENT COUNCIL ORGANIZATION<br>SAINT CECILIA'S COLLEGE-CEBU, INC.</p><br>
										
										SCO Election Reports <?php echo $years['year']; ?>
										</div>
										</center>    
									</div>
							</h4>
                        </div>

						
					<br/>

                       <form method="post" action="sort.php?page=sort">			
							<select name="position" id="position" class = "form-control sedra1 pull-left" style = "width:300px;margin-left:19px; ">
								<option readonly>Sort by Position</option>
								<option>President</option>
								<option>Vice President</option>
								<option>Secretary</option>
								<option>Treasurer</option>
								<option>Auditor</option>
								<option>Mass Media Officer</option>
								<option>Peace Officer</option>
								<option>Activity Coordinator</option>		
								<option>1st year liaison</option>	
								<option>2nd year liaison</option>	
								<option>3rd year liaison</option>	
								<option>4th year liaison</option>	
													
							</select>

							&nbsp;
							&nbsp;
							<button id ="sort" class = "btn btn-success"><i class="fa fa-sort"></i> Sort
							</button>
							<script>
								
							</script>
							<button type="button" onclick="window.print();" style = "margin-right:14px;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i> Print
							</button>
								<button type="button" style = "margin-right:14px;" id ="print1" class = "pull-right btn btn-info"><i class = "fa fa-print"></i> <a href="candidate_finalList.php?page=finalReports" style="text-decoration: none; color: white;">Final List</a>
								</button>
							
                	
						</form>	
                        <div class="panel-body">							                            		
										<!-- President Area -->				
										<table class="table table-striped table-bordered table-hover ">
												<thead>

													<td style = "width:200px;" class = "alert alert">IMAGE</td>
													<td style = "width:600px;"class = "alert alert">PRESIDENT</td>
													<td style = "width:90px;"class = "alert alert">Total Vote</td>
												
												</thead>
												<?php
											require '../dbconnector/dbcon.php';
											$query = $conn->query("SELECT * FROM tbl_candidate WHERE position = 'president' and status = 'approved'");
											while($fetch = $query->fetch_array()){	
													$id = $fetch['candidate_id'];										
													$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
													$fetch1 = $query1->fetch_assoc();
										
												?>
												<tbody>
													<td><img id="img" src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; cursor: pointer; " > 
													<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname']. " ".$fetch ['department'];?></td>
													
													<td style = "width:20px; text-align:center"><?php echo $fetch1 ['total'];?></td>
												<?php }?>
												</tbody>
														
														
										</table>

										<!-- Vice President Area	 -->
														
									 	<table class="table table-striped table-bordered table-hover ">
												<thead>

													<td style = "width:200px;" class = "alert alert">IMAGE</td>
													<td style = "width:600px;"class = "alert alert">VICE PRESIDENT</td>
													<td style = "width:90px;"class = "alert alert">Total Vote</td>
												
												</thead>
												<?php
												require '../dbconnector/dbcon.php';
												$query = $conn->query("SELECT * FROM tbl_candidate WHERE position = 'vice president' and status = 'approved' ");
												while($fetch = $query->fetch_array()){
													$id = $fetch['candidate_id'];
													$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
													$fetch1 = $query1->fetch_assoc();
												
												?>
												<tbody>

													<td><img id="img" src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; cursor: pointer;  " > 
													<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname']. " ".$fetch ['department'];?></td>
													<td style = "width:20px; text-align:center"><?php echo $fetch1 ['total'];?></td>
												<?php }?>
												</tbody>
												
												
										</table>	
										
										<!-- Secretary Area -->
										<table class="table table-striped table-bordered table-hover ">
												<thead>

													<td style = "width:200px;" class = "alert alert">IMAGE</td>
													<td style = "width:600px;"class = "alert alert">SECRETARY</td>
													<td style = "width:90px;"class = "alert alert">Total Vote</td>
												
												</thead>
												<?php
												require '../dbconnector/dbcon.php';
												$query = $conn->query("SELECT * FROM tbl_candidate WHERE position = 'secretary' and status = 'approved' ");
												while($fetch = $query->fetch_array()){					
													$id = $fetch['candidate_id'];
													$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
													$fetch1 = $query1->fetch_assoc();
											
												?>
												<tbody>

													<td><img id="img" src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; cursor: pointer; " > 
													<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname']. " ".$fetch ['department'];?></td>
													<td style = "width:20px; text-align:center"><?php echo $fetch1 ['total'];?></td>
												<?php }?>
												</tbody>
												
												
										</table>	
										
										<!-- Treasurer Area -->			
										<table class="table table-striped table-bordered table-hover ">
												<thead>

													<td style = "width:200px;" class = "alert alert-">IMAGE</td>
													<td style = "width:600px;"class = "alert alert">TREASURER</td>
													<td style = "width:90px;"class = "alert alert-">Total Vote</td>
												
												</thead>
												<?php
												require '../dbconnector/dbcon.php';
												$query = $conn->query("SELECT * FROM tbl_candidate WHERE position = 'treasurer' and status = 'approved' ");
												while($fetch = $query->fetch_array()){
													$id = $fetch['candidate_id'];
													$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
													$fetch1 = $query1->fetch_assoc();
										
												?>
												<tbody>

													<td><img id="img" src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; cursor: pointer;" > 
													<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname']. " ".$fetch ['department'];?></td>
													<td style = "width:20px; text-align:center"><?php echo $fetch1 ['total'];?></td>
												<?php }?>
												</tbody>
												
												
										</table>


										<!-- Auditor Area -->														
										<table class="table table-striped table-bordered table-hover ">
												<thead>

													<td style = "width:200px;" class = "alert alert">IMAGE</td>
													<td style = "width:600px;"class = "alert alert">AUDITOR</td>
													<td style = "width:90px;"class = "alert alert">Total Vote</td>
												
												</thead>
												<?php
												require '../dbconnector/dbcon.php';
												$query = $conn->query("SELECT * FROM tbl_candidate WHERE position = 'auditor' and status = 'approved'");
												while($fetch = $query->fetch_array()){
													$id = $fetch['candidate_id'];
													$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
													$fetch1 = $query1->fetch_assoc();
										
												?>
												<tbody>

													<td><img id="img" src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; cursor: pointer;"> 
													<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname']. " ".$fetch ['department'];?></td>
													<td style = "width:20px; text-align:center"><?php echo $fetch1 ['total'];?></td>
												<?php }?>
												</tbody>
												
										</table>	
										
										<!-- Mass Media Officer Area	 -->			
										<table class="table table-striped table-bordered table-hover ">
												<thead>

													<td style = "width:200px;" class = "alert alers">IMAGE</td>
													<td style = "width:600px;"class = "alert alert">MASS MEDIA OFFICER</td>
													<td style = "width:90px;"class = "alert alert">Total Votes</td>
												
												</thead>
												<?php
												require '../dbconnector/dbcon.php';
												$query = $conn->query("SELECT * FROM tbl_candidate WHERE position = 'Mass Media Officer' and status = 'approved'");
												while($fetch = $query->fetch_array()){
													$id = $fetch['candidate_id'];
													$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
													$fetch1 = $query1->fetch_assoc();
										
												?>		
												<tbody>

													<td><img id="img" src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; cursor: pointer;" > 
													<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname']. " ".$fetch ['department'];?></td>
													<td style = "width:20px; text-align:center"><?php echo $fetch1 ['total'];?></td>
												<?php }?>
												</tbody>
												
												
										</table>	
										
										
										<!-- Peace Officer Area -->				
										<table class="table table-striped table-bordered table-hover ">
												<thead>

													<td style = "width:200px;" class = "alert alert">IMAGE</td>
													<td style = "width:600px;"class = "alert alert">PEACE OFFICER</td>
													<td style = "width:90px;"class = "alert alert">Total Vote</td>
												
												</thead>
												<?php
												require '../dbconnector/dbcon.php';
												$query = $conn->query("SELECT * FROM tbl_candidate WHERE position = 'peace officer' and status = 'approved'");
												while($fetch = $query->fetch_array()){
													$id = $fetch['candidate_id'];
													$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
													$fetch1 = $query1->fetch_assoc();
										
												?>
												<tbody>

													<td><img id="img" src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; cursor: pointer; " > 
													<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname']. " ".$fetch ['department'];?></td>
													<td style = "width:20px; text-align:center"><?php echo $fetch1 ['total'];?></td>
												<?php }?>
												</tbody>
												
												
										</table>	
										
										<!-- Activity Coordinator Area -->				
										<table class="table table-striped table-bordered table-hover ">
												<thead>

													<td style = "width:200px;" class = "alert alert">IMAGE</td>
													<td style = "width:600px;"class = "alert alert">ACTIVITY COORDINATOR</td>
													<td style = "width:90px;"class = "alert alert">Total Vote</td>
												
												</thead>
												<?php
												require '../dbconnector/dbcon.php';
												$query = $conn->query("SELECT * FROM tbl_candidate WHERE position = 'activity coordinator' and status = 'approved'");
												while($fetch = $query->fetch_array())
												{
													$id = $fetch['candidate_id'];
													$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
													$fetch1 = $query1->fetch_assoc();
										
												?>
												<tbody>
												
													<td><img id="img" src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; cursor: pointer;" > 
													<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname']. " ".$fetch ['department'];?></td>
													<td style = "width:20px; text-align:center"><?php echo $fetch1 ['total'];?></td>
												<?php }?>
												</tbody>
												
												
										</table>	
										<!-- 1st year liaison -->
										<table class="table table-striped table-bordered table-hover ">
												<thead>

													<td style = "width:200px;" class = "alert alert">IMAGE</td>
													<td style = "width:600px;"class = "alert alert">LIAISON 1st YEAR</td>
													<td style = "width:90px;"class = "alert alert">Total Vote</td>
												
												</thead>
												<?php
												require '../dbconnector/dbcon.php';
												$query = $conn->query("SELECT * FROM tbl_candidate WHERE position = 'Liaison 1st year' and status = 'approved'");
												while($fetch = $query->fetch_array())
												{
													$id = $fetch['candidate_id'];
													$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
													$fetch1 = $query1->fetch_assoc();
										
												?>
												<tbody>
												
													<td><img id="img" src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; cursor: pointer;" > 
													<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname']. " ".$fetch ['department'];?></td>
													<td style = "width:20px; text-align:center"><?php echo $fetch1 ['total'];?></td>
												<?php }?>
												</tbody>
												
												
										</table>	
										<!-- 2nd year liaison -->
										<table class="table table-striped table-bordered table-hover ">
												<thead>

													<td style = "width:200px;" class = "alert alert">IMAGE</td>
													<td style = "width:600px;"class = "alert alert">LIAISON 2nd YEAR</td>
													<td style = "width:90px;"class = "alert alert">Total Vote</td>
												
												</thead>
												<?php
												require '../dbconnector/dbcon.php';
												$query = $conn->query("SELECT * FROM tbl_candidate WHERE position = 'Liaison 2nd year' and status = 'approved'");
												while($fetch = $query->fetch_array())
												{
													$id = $fetch['candidate_id'];
													$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
													$fetch1 = $query1->fetch_assoc();
										
												?>
												<tbody>
												
													<td><img id="img" src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; cursor: pointer;" > 
													<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname']. " ".$fetch ['department'];?></td>
													<td style = "width:20px; text-align:center"><?php echo $fetch1 ['total'];?></td>
												<?php }?>
												</tbody>
												
												
										</table>	
													<!-- 3rd year liaison -->
													<table class="table table-striped table-bordered table-hover ">
												<thead>

													<td style = "width:200px;" class = "alert alert">IMAGE</td>
													<td style = "width:600px;"class = "alert alert">LIAISON 3rd YEAR</td>
													<td style = "width:90px;"class = "alert alert">Total Vote</td>
												
												</thead>
												<?php
												require '../dbconnector/dbcon.php';
												$query = $conn->query("SELECT * FROM tbl_candidate WHERE position = 'Liaison 3rd year' and status = 'approved'");
												while($fetch = $query->fetch_array())
												{
													$id = $fetch['candidate_id'];
													$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
													$fetch1 = $query1->fetch_assoc();
										
												?>
												<tbody>
												
													<td><img id="img" src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; cursor: pointer;" > 
													<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname']. " ".$fetch ['department'];?></td>
													<td style = "width:20px; text-align:center"><?php echo $fetch1 ['total'];?></td>
												<?php }?>
												</tbody>
												
												
										</table>	

											<!-- 4th year liaison -->
											<table class="table table-striped table-bordered table-hover ">
												<thead>

													<td style = "width:200px;" class = "alert alert">IMAGE</td>
													<td style = "width:600px;"class = "alert alert">LIAISON 4th YEAR</td>
													<td style = "width:90px;"class = "alert alert">Total Vote</td>
												
												</thead>
												<?php
												require '../dbconnector/dbcon.php';
												$query = $conn->query("SELECT * FROM tbl_candidate WHERE position = 'Liaison 4th year' and status = 'approved'");
												while($fetch = $query->fetch_array())
												{
													$id = $fetch['candidate_id'];
													$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
													$fetch1 = $query1->fetch_assoc();
										
												?>
												<tbody>
												
													<td><img id="img" src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; cursor: pointer;" > 
													<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname']. " ".$fetch ['department'];?></td>
													<td style = "width:20px; text-align:center"><?php echo $fetch1 ['total'];?></td>
												<?php }?>
												</tbody>
												
												
										</table>

									</div>				
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

</body>

</html>

