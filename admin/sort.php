
<?php include ('head.php');?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">				
                </div>			
								
				<hr/>				
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="modal-title" id="myModalLabel">         
							<div class="panel panel-default">
							<?php
									require '../dbconnector/dbcon.php';
									
									$position = $_POST['position'];
									$sort = $position;
									$query = $conn->query("SELECT * FROM tbl_candidate WHERE position = '$sort'");
									$fetch = $query->fetch_array();
									{									
										
								?>
					<div class="panel-heading">
							<center>
								<div class="logos">
									<img style="width: 6pc;" src="logo/scclogo.png">
								</div><p>STUDENT COUNCIL ORGANIZATION<br>SAINT CECILIA'S COLLEGE-CEBU, INC.</p><br>Election Report for <?php echo $fetch ['position'];?>s
								<?php }?>								
					</div>  </center>  
									
						</div>
						</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<a href = "canvassing.php?page=canvassingReports" id="back" class = "btn btn-warning pull-right" ><i class = "fa fa-arrow-left"> </i> Back</a>
						<button onclick="window.print();" style = "margin-right:14px; margin-bottom:12px;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i> Print</button>	
                            <div class="table-responsive">
		                              <table class="table table-striped table-bordered table-hover ">
							<thead>
								
								<td style = "width:200px;"class = "">Image</td>
								<td style = "width:600px;" class = "">Candidate </td>
								<td style = "width:300px;" class = "">Department </td>
								<td style = "width:300px;" class = "">Year </td>
								<td class = "">Total Vote</td>
							
							</thead>
								<?php
							require '../dbconnector/dbcon.php';
							
								$position = $_POST['position'];
								$sort = $position;
								$query = $conn->query("SELECT * FROM tbl_candidate WHERE position = '$sort'");
								while($fetch = $query->fetch_array())
								{
									$id = $fetch['candidate_id'];
									$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
									$fetch1 = $query1->fetch_assoc();
									
							?>
								<tbody> 
									<td><img src="../admin/<?php echo $fetch ['img'];?>" style = "width:3pc; height:40px; " >
									<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
									<td><?php echo $fetch['department'];?></td>
									<td><?php echo $fetch['year_level'];?></td>
									
									<td style = "width:20px; text-align:center"><button class = "btn"disabled><?php echo $fetch1 ['total'];?></button>	</td>
								<?php }?>
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

</body>

</html>

