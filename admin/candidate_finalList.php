<?php include ('head.php');?>

<body >

    <div id="wrapper">
        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
            	<br>
					<div class="grandMothers">
						<div class="final-mother">
							<div class="final-logo">
								<img src="logo/scclogo.png" alt="left logo">
							</div>
							<div class="center-header">
								<h4>St. Cecilia's College-Cebu, Inc. <br>
								A La Salle Supervised School <br> Ward II, Poblacion, Minglanilla, Cebu</h4> 
							</div>
							<div class="final-logo1">
							<!-- 	<img src="logo/scclogo.png" alt="Right logo"> -->
								
							</div>

						</div>
						<div class="content-header">
							<?php
			            		require '../dbconnector/dbcon.php';
			            		$years = $conn->query("SELECT year FROM `tbl_partylist`")->fetch_array();
			            	?>
							<h4>THE NEWLY ELECTED STUDENT COUNCIL OFFICER (SCO)<br><br> COLLEGE DEPARTMENT <br><br>
								A.Y. <?php echo $years['year']; ?>
							</h4>
						</div>
					

					<div class="content-body">
						 <?php
                     require '../dbconnector/dbcon.php';
                         
                        $C1 = $conn->query("SELECT *, (SELECT COUNT(*) FROM votes v WHERE v.candidate_id = c.candidate_id) as total FROM tbl_candidate c WHERE  position = 'President' and status = 'approved' ORDER BY total DESC")->fetch_array(); 

                        $C2 = $conn->query("SELECT *, (SELECT COUNT(*) FROM votes v WHERE v.candidate_id = c.candidate_id) as total FROM tbl_candidate c WHERE  position = 'Vice President' and status = 'approved' ORDER BY total DESC")->fetch_array();        

                        $C3 = $conn->query("SELECT *, (SELECT COUNT(*) FROM votes v WHERE v.candidate_id = c.candidate_id) as total FROM tbl_candidate c WHERE  position = 'Secretary' and status = 'approved' ORDER BY total DESC")->fetch_array();

                        $C4 = $conn->query("SELECT *, (SELECT COUNT(*) FROM votes v WHERE v.candidate_id = c.candidate_id) as total FROM tbl_candidate c WHERE  position = 'Treasurer' and status = 'approved' ORDER BY total DESC")->fetch_array(); 

                        $C5 = $conn->query("SELECT *, (SELECT COUNT(*) FROM votes v WHERE v.candidate_id = c.candidate_id) as total FROM tbl_candidate c WHERE  position = 'Mass Media Officer' and status = 'approved' ORDER BY total DESC")->fetch_array(); 
                                              
                        $C6 = $conn->query("SELECT *, (SELECT COUNT(*) FROM votes v WHERE v.candidate_id = c.candidate_id) as total FROM tbl_candidate c WHERE  position = 'Auditor' and status = 'approved'  ORDER BY total DESC")->fetch_array(); 

                        $C7 = $conn->query("SELECT *, (SELECT COUNT(*) FROM votes v WHERE v.candidate_id = c.candidate_id) as total FROM tbl_candidate c WHERE  position = 'Peace Officer' and status = 'approved' ORDER BY total DESC")->fetch_array(); 

                        $C8 = $conn->query("SELECT *, (SELECT COUNT(*) FROM votes v WHERE v.candidate_id = c.candidate_id) as total FROM tbl_candidate c WHERE  position = 'Activity Coordinator' and status = 'approved'  ORDER BY total DESC ")->fetch_array();     
                            ?>


						<div class="content-position">
							<ul>
								<li><b>President:</b> <?php echo $C1['firstname']." , ".$C1['lastname']." ".$C1['department']." ".$C1['year_level'];?></li>
								<li><b>Vice President:</b> <?php echo $C2['firstname']." , ".$C2['lastname']." ".$C2['department']." ".$C2['year_level'];?></li>
								<li><b>Secretary:</b> <?php echo $C3['firstname']." , ".$C3['lastname']." ".$C3['department']." ".$C3['year_level'];?></li>
								<li><b>Treasurer:</b> <?php echo $C4['firstname']." , ".$C4['lastname']." ".$C4['department']." ".$C4['year_level'];?></li>
								<li><b>Mass Media Officer:</b> <?php echo $C5['firstname']." , ".$C5['lastname']." ".$C5['department']." ".$C5['year_level'];?></li>
								<li><b>Auditor:</b> <?php echo $C6['firstname']." , ".$C6['lastname']." ".$C6['department']." ".$C6['year_level'];?></li>
								<li><b>Peace Officer:</b>
									<ul>
										<li>1. <?php echo $C7['firstname']." , ".$C7['lastname']." ".$C7['department']." ".$C7['year_level'];?></li>
										
									</ul>
								</li>
								<li><b>Activity Coordinator:</b>
								<ul>
									<li>1. <?php echo $C8['firstname']." , ".$C8['lastname']." ".$C8['department']." ".$C8['year_level'];?></li>
									
								</ul></li>

							</ul>
						</div>
							<div class="content-admin">
								<h4><b>Prepared By:</b> <span>Ms. Elma R. Quiero</span></h4>        
								<h4> SAO/Prefect of Discipline</h4>
								<br>
								<br>
								<h4><b>Noted By:</b> <span>Mr. Alfredo S. Moreno</span></h4>
								<h4>Dean of College</h4>
							</div>
							<button type="button" onclick="window.print();" style="margin-left: 2em;" id ="print" class = "pull-left btn btn-info"><i class = "fa fa-print"></i> Print
							</button>
					</div>
            </div>
                        <!-- /.panel-body -->
        </div>
                    <!-- /.panel -->
    </div>
            <!-- /.row -->
    <?php include ('script.php');?>

</body>

</html>

