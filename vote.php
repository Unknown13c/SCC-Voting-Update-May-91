<?php include ('head.php');?>
<?php include("sess.php");?>
<body >
	<?php include 'side_bar.php'; ?>
   <style type="text/css">
   		input[type=checkbox]
			{
			  /* Double-sized Checkboxes */
			  -ms-transform: scale(2); /* IE */
			  -moz-transform: scale(2); /* FF */
			  -webkit-transform: scale(2); /* Safari and Chrome */
			  -o-transform: scale(2); /* Opera */
			  transform: scale(2);
			  padding: 5px;
			  cursor: pointer;
			}

			.vote{
				left: 10%;
			}

			.platfromBtn{
			padding: 0.5em;
			margin: 0.5em;
			background-color: #A89F9F;
			border: none;
			/*width: 80%;*/
			color: white;
			border-radius: 3px;
			}

			/*candidate profile card*/
			.h3 {
				margin: 10px 0;
			}

			.h6 {
				margin: 5px 0;
				text-transform: uppercase;
			}

			.p {
				font-size: 14px;
				line-height: 21px;
			}
			#card-container1{
				display: flex;
				justify-content: center;
				text-align: center;
				display:row;
				float:left;
				padding-left:50px;		
			}

			.card-container {
				background-color: #e00202;
				border-radius: 6px;
				box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);
				border: 1px solid #FAF7FFFF;
				color: #F9F5FFFF;
				padding-top: 30px;
				position: relative;
				width: 350px;
				max-width: 100%;
				text-align: center;
				padding-bottom: 20px;
				margin: 30px;
				

			}

			.card-container .pro {
				color: #231E39;
				background-color: #FEBB0B;
				border-radius: 3px;
				font-size: 14px;
				font-weight: bold;
				padding: 3px 7px;
				position: absolute;
				top: 30px;
				left: 30px;
			}

			.card-container .round {
				border: 1px solid #DAE1E8FF;
				border-radius: 50%;
				padding: 7px;
			}

			button.primary {
				background-color: #ADABB0FF;
				border: 2px solid #FAF7FFFF;
				border-radius: 3px;
				color: #000000FF;
				font-family: Montserrat, sans-serif;
				font-weight: 500;
				padding: 10px 25px;
			}

			button.primary.ghost {
				background-color: transparent;
				color: #FAF7FFFF;
			}
			.panel{
				background-color:#eeeeee;
			}


   </style>
	<form method = "POST" action = "vote_result.php">
	<div class="col-lg-6"><br>	                   
                    	<?php
                        	if(isset($_GET['error'])){
                        		if($_GET['error'] == "Choosecandidate"){
                        				echo "<center><div class='panel panel-danger'><h4 style='color: red'>Choose candidate before you proceed!</h4></div></center>";
                        		}
                        	}
                        ?>
                        
                        
                    
                   <div class="panel panel" style="background-color:#54515EFF;">
                        <div class="panel-heading">
							<h4 style="float:right; color:white;font-family: system-ui;">Vote 1 Candidates</h4>
                        	<center><h3 style="color:White; font-weight:bold; letter-spacing:2px;">PRESIDENT</h3></center>
							
                        </div>



                        <div class="panel-body" style="background-color: #A3A1A6FF;">

						<?php
						 $bool = false;
							$query = $conn->query("SELECT tbl_candidate.candidate_id, tbl_candidate.platform, tbl_candidate.img, tbl_candidate.position,tbl_partylist.partylist_id, tbl_partylist.party, tbl_candidate.firstname, tbl_candidate.lastname, tbl_candidate.email, tbl_candidate.department, tbl_candidate.year_level, tbl_candidate.gender FROM tbl_candidate INNER JOIN tbl_partylist ON tbl_candidate.partylist_id = tbl_partylist.partylist_id WHERE `position` = 'President' and status = 'approved'") or die(mysqli_errno());
							while($fetch = $query->fetch_array()){
								$candidate_id = $fetch['candidate_id'];
							?>
						<div id = "card-container1">
                		<div class="card-container">
								<!-- <span class="pro">PRO</span> -->
								<img class="circle" src = "admin/<?php echo $fetch['img']?>" style = "width:10pc; height:10pc; cursor: pointer; border-radius:6px; " alt="user" />
								<h3 class="h3">Name: <?php echo $fetch['firstname']." ".$fetch['lastname'] ?></h3>
								<h6 class="h6">Gender: <?php echo $fetch['gender'] ?></h6>
								<h6 class="h6">Deparment: <?php echo $fetch['department'] ?></h6>
								<h6 class="h6">Year Level: <?php echo $fetch['year_level'] ?></h6>
								<h6 class="h6">Party: <?php echo $fetch['party'] ?></h6>
								<p class="p"> <br/></p>
								<div class="buttons">
									<button class="primary" type="button"  data-toggle="modal" data-target="#candidate_platform<?php echo$fetch['candidate_id']; ?>" id="<?php echo$fetch['candidate_id'];?>"><b>
										Platform
							</b></button>									
									<button type="button" class="primary ghost">Vote &nbsp;
										<input  type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" id="pres_id" name ="pres_id" class = "pres">
									</button>
								</div>
						</div>
					</div>
							<?php
							require 'candidatePlatform.php';
							?>

 <!--                           	<div id = "position">
                           	<div class="vice-pre">
                       		<div class="descrip">
								<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px; " height = "150px" width = "150px" class = "img">
							</div>
							
							<div class="descrip">
								<?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Department: </strong> ".$fetch['department']."<br/><strong>Party: </strong> ".$fetch['party']?>
							<div class="givevote">
								<input  type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" id="pres_id" name ="pres_id" class = "pres"> &nbsp;<span class="vote">Vote <br>
									<button class="platfromBtn" type="button"  data-toggle="modal" data-target="#candidate_platform<?php echo$fetch['candidate_id']; ?>" id="<?php echo$fetch['candidate_id'];?>"><i class="fa fa-eye"></i>Platform</button>


								</span>
								</div>
							 </div>
						</div>
					</div> -->

	
						<?php
							}
						?>

						</div>                       
                    </div>
                </div>




			
<!-- Vice President area	 -->

	<div class="col-lg-6">                    
                     <div class="panel panel" style="background-color:#54515EFF;">
                        <div class="panel-heading">
							<h4 style="float:right; color:white;font-family: system-ui;">Vote 1 Candidates</h4>
                        	<center><h3 style="color:white; font-weight:bold; letter-spacing:2px;">VICE PRESIDENT</h3></center>
                        </div>

                        <div class="panel-body" style="background-color: #A3A1A6FF;">
						<?php
						 $bool = false;
							$query = $conn->query("SELECT tbl_candidate.candidate_id, tbl_candidate.platform, tbl_candidate.img, tbl_candidate.position,tbl_partylist.partylist_id, tbl_partylist.party, tbl_candidate.firstname, tbl_candidate.lastname, tbl_candidate.email, tbl_candidate.department, tbl_candidate.year_level, tbl_candidate.gender FROM tbl_candidate INNER JOIN tbl_partylist ON tbl_candidate.partylist_id = tbl_partylist.partylist_id WHERE `position` = 'Vice President' and status = 'approved'") or die(mysqli_errno());
							while($fetch = $query->fetch_array()){
								$candidate_id = $fetch['candidate_id'];
							?>

					<div id = "card-container1">
                		<div class="card-container">
								<!-- <span class="pro">PRO</span> -->
								<img class="circle" src = "admin/<?php echo $fetch['img']?>" style = "width:10pc; height:10pc; cursor: pointer; border-radius:6px; " alt="user" />
								<h3 class="h3">Name: <?php echo $fetch['firstname']." ".$fetch['lastname'] ?></h3>
								<h6 class="h6">Gender: <?php echo $fetch['gender'] ?></h6>
								<h6 class="h6">Deparment: <?php echo $fetch['department'] ?></h6>
								<h6 class="h6">Year Level: <?php echo $fetch['year_level'] ?></h6>
								<h6 class="h6">Party: <?php echo $fetch['party'] ?></h6>
								<p class="p"><br/> </p>
								<div class="buttons">
									<button class="primary" type="button"  data-toggle="modal" data-target="#candidate_platform<?php echo$fetch['candidate_id']; ?>" id="<?php echo$fetch['candidate_id'];?>"><b>
										Platform
							</b></button>									
									<button type="button" class="primary ghost">Vote &nbsp;
										<input  type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" id="vp_id" name ="vp_id" class = "vpres">
									</button>
								</div>
						</div>
					</div>
							<?php
							require 'candidatePlatform.php';
							?>

<!--                            	<div id = "position">
                           	<div class="vice-pre">
                       		<div class="descrip">
								<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px; " height = "150px" width = "150px" class = "img">
							</div>
							
							<div class="descrip">
								<?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Department: </strong> ".$fetch['department']."<br/><strong>Party: </strong> ".$fetch['party']?>
							<div class="givevote">
								<input  type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" id="vp_id" name ="vp_id" class = "vpres"> &nbsp;<span class="vote">Vote <br>
									<button class="platfromBtn" type="button"  data-toggle="modal" data-target="#candidate_platform<?php echo$fetch['candidate_id']; ?>" id="<?php echo$fetch['candidate_id'];?>"><i class="fa fa-eye"></i>Platform</button>

									<?php
										require 'candidatePlatform.php';
									?>
								</span>
								</div>
							 </div>
						</div>
					</div> -->

	
						<?php
							}
						?>

						</div>                       
                    </div>
                </div>	 
				
	
	<!-- Secretary area -->
		<div class="col-lg-6">                    
            <div class="panel panel" style="background-color:#54515EFF;">
                        <div class="panel-heading">
							<h4 style="float:right; color:white;font-family: system-ui;">Vote 1 Candidates</h4>
                        	<center><h3 style="color:White; font-weight:bold; letter-spacing:2px;">SECRETARY</h3></center>
                        </div>

                        <div class="panel-body" style="background-color: #A3A1A6FF;">
						<?php
						 $bool = false;
							$query = $conn->query("SELECT tbl_candidate.candidate_id, tbl_candidate.platform, tbl_candidate.img, tbl_candidate.position,tbl_partylist.partylist_id, tbl_partylist.party, tbl_candidate.firstname, tbl_candidate.lastname, tbl_candidate.email, tbl_candidate.department, tbl_candidate.year_level, tbl_candidate.gender FROM tbl_candidate INNER JOIN tbl_partylist ON tbl_candidate.partylist_id = tbl_partylist.partylist_id WHERE `position` = 'Secretary' and status = 'approved'") or die(mysqli_errno());
							while($fetch = $query->fetch_array()){
								$candidate_id = $fetch['candidate_id'];
							?>

					<div id = "card-container1">
                		<div class="card-container">
								<!-- <span class="pro">PRO</span> -->
								<img class="circle" src = "admin/<?php echo $fetch['img']?>" style = "width:10pc; height:10pc; cursor: pointer; border-radius:6px; " alt="user" />
								<h3 class="h3">Name: <?php echo $fetch['firstname']." ".$fetch['lastname'] ?></h3>
								<h6 class="h6">Gender: <?php echo $fetch['gender'] ?></h6>
								<h6 class="h6">Deparment: <?php echo $fetch['department'] ?></h6>
								<h6 class="h6">Year Level: <?php echo $fetch['year_level'] ?></h6>
								<h6 class="h6">Party: <?php echo $fetch['party'] ?></h6>
								<p class="p"><br/> </p>
								<div class="buttons">
									<button class="primary" type="button"  data-toggle="modal" data-target="#candidate_platform<?php echo$fetch['candidate_id']; ?>" id="<?php echo$fetch['candidate_id'];?>"><b>
										Platform
							</b></button>									
									<button type="button" class="primary ghost">Vote &nbsp;
										<input  type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" id="sec_id" name ="sec_id" class = "secretary">
									</button>
								</div>
						</div>
					</div>
							<?php
							require 'candidatePlatform.php';
							?>

 <!--                           	<div id = "position">
                           	<div class="vice-pre">
                       		<div class="descrip">
								<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px; " height = "150px" width = "150px" class = "img">
							</div>
							
							<div class="descrip">
								<?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Department: </strong> ".$fetch['department']."<br/><strong>Party: </strong> ".$fetch['party']?>
							<div class="givevote">
								<input  type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" id="sec_id" name ="sec_id" class = "secretary"> &nbsp;<span class="vote">Vote <br>
									<button class="platfromBtn" type="button"  data-toggle="modal" data-target="#candidate_platform<?php echo$fetch['candidate_id']; ?>" id="<?php echo$fetch['candidate_id'];?>"><i class="fa fa-eye"></i>Platform</button>

									<?php
										require 'candidatePlatform.php';
									?>
								</span>
								</div>
							 </div>
						</div>
					</div> -->

	
						<?php
							}
						?>

						</div>                       
                    </div>
                </div>

<!-- Treasurer area -->

		<div class="col-lg-6">
            <div class="panel panel" style="background-color:#54515EFF;">
                        <div class="panel-heading">
							<h4 style="float:right; color:white;font-family: system-ui;">Vote 1 Candidates</h4>
                        	<center><h3 style="color:White; font-weight:bold; letter-spacing:2px;">TREASURER</h3></center>
                        </div>

                        <div class="panel-body" style="background-color: #A3A1A6FF;">
						<?php
						 $bool = false;
							$query = $conn->query("SELECT tbl_candidate.candidate_id, tbl_candidate.platform, tbl_candidate.img, tbl_candidate.position,tbl_partylist.partylist_id, tbl_partylist.party, tbl_candidate.firstname, tbl_candidate.lastname, tbl_candidate.email, tbl_candidate.department, tbl_candidate.year_level, tbl_candidate.gender FROM tbl_candidate INNER JOIN tbl_partylist ON tbl_candidate.partylist_id = tbl_partylist.partylist_id WHERE `position` = 'Treasurer' and status = 'approved'") or die(mysqli_errno());
							while($fetch = $query->fetch_array()){
								$candidate_id = $fetch['candidate_id'];
							?>
					<div id = "card-container1">
                		<div class="card-container">
								<!-- <span class="pro">PRO</span> -->
								<img class="circle" src = "admin/<?php echo $fetch['img']?>"  style = "width:10pc; height:10pc; cursor: pointer; border-radius:6px; " alt="user" />
								<h3 class="h3">Name: <?php echo $fetch['firstname']." ".$fetch['lastname'] ?></h3>
								<h6 class="h6">Gender: <?php echo $fetch['gender'] ?></h6>
								<h6 class="h6">Deparment: <?php echo $fetch['department'] ?></h6>
								<h6 class="h6">Year Level: <?php echo $fetch['year_level'] ?></h6>
								<h6 class="h6">Party: <?php echo $fetch['party'] ?></h6>
								<p class="p"><br/> </p>
								<div class="buttons">
									<button class="primary" type="button"  data-toggle="modal" data-target="#candidate_platform<?php echo$fetch['candidate_id']; ?>" id="<?php echo$fetch['candidate_id'];?>"><b>
										Platform
							</b></button>									
									<button type="button" class="primary ghost">Vote &nbsp;
										<input  type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" id="tre_id" name ="tre_id" class = "treasurer">
									</button>
								</div>
						</div>
					</div>
							<?php
							require 'candidatePlatform.php';
							?>

<!--                            	<div id = "position">
                           	<div class="vice-pre">
                       		<div class="descrip">
								<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px; " height = "150px" width = "150px" class = "img">
							</div>
							
							<div class="descrip">
								<?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Department: </strong> ".$fetch['department']."<br/><strong>Party: </strong> ".$fetch['party']?>
							<div class="givevote">
								<input  type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" id="tre_id" name ="tre_id" class = "treasurer"> &nbsp;<span class="vote">Vote <br>
									<button class="platfromBtn" type="button"  data-toggle="modal" data-target="#candidate_platform<?php echo$fetch['candidate_id']; ?>" id="<?php echo$fetch['candidate_id'];?>"><i class="fa fa-eye"></i>Platform</button>

									<?php
										require 'candidatePlatform.php';
									?>
								</span>
								</div>
							 </div>
						</div>
					</div> -->

	
						<?php
							}
						?>

						</div>                       
                    </div>
                </div>

	<!-- Auditor area -->
		<div class="col-lg-6">
             <div class="panel panel" style="background-color:#54515EFF;">
                        <div class="panel-heading">
							<h4 style="float:right; color:white;font-family: system-ui;">Vote 1 Candidates</h4>
                        	<center><h3 style="color:White; font-weight:bold; letter-spacing:2px;">AUDITOR</h3></center>
                        </div>

                        <div class="panel-body" style="background-color: #A3A1A6FF;">
						<?php
						 $bool = false;
							$query = $conn->query("SELECT tbl_candidate.candidate_id, tbl_candidate.platform, tbl_candidate.img, tbl_candidate.position,tbl_partylist.partylist_id, tbl_partylist.party, tbl_candidate.firstname, tbl_candidate.lastname, tbl_candidate.email, tbl_candidate.department, tbl_candidate.year_level, tbl_candidate.gender FROM tbl_candidate INNER JOIN tbl_partylist ON tbl_candidate.partylist_id = tbl_partylist.partylist_id WHERE `position` = 'Auditor' and status = 'approved'") or die(mysqli_errno());
							while($fetch = $query->fetch_array()){
								$candidate_id = $fetch['candidate_id'];
							?>
					<div id = "card-container1">
                		<div class="card-container">
								<!-- <span class="pro">PRO</span> -->
								<img class="circle" src = "admin/<?php echo $fetch['img']?>"  style = "width:10pc; height:10pc; cursor: pointer; border-radius:6px; " alt="user" />
								<h3 class="h3">Name: <?php echo $fetch['firstname']." ".$fetch['lastname'] ?></h3>
								<h6 class="h6">Gender: <?php echo $fetch['gender'] ?></h6>
								<h6 class="h6">Deparment: <?php echo $fetch['department'] ?></h6>
								<h6 class="h6">Year Level: <?php echo $fetch['year_level'] ?></h6>
								<h6 class="h6">Party: <?php echo $fetch['party'] ?></h6>
								<p class="p"><br/> </p>
								<div class="buttons">
									<button class="primary" type="button"  data-toggle="modal" data-target="#candidate_platform<?php echo$fetch['candidate_id']; ?>" id="<?php echo$fetch['candidate_id'];?>"><b>
										Platform
							</b></button>									
									<button type="button" class="primary ghost">Vote &nbsp;
										<input  type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" id="aud_id" name ="aud_id" class = "auditor">
									</button>
								</div>
						</div>
					</div>
							<?php
							require 'candidatePlatform.php';
							?>
<!-- 							
                           	<div id = "position">
                           	<div class="vice-pre">
                       		<div class="descrip">
								<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px; " height = "150px" width = "150px" class = "img">
							</div>
							
							<div class="descrip">
								<?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Department: </strong> ".$fetch['department']."<br/><strong>Party: </strong> ".$fetch['party']?>
							<div class="givevote">
								<input  type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" id="aud_id" name ="aud_id" class = "auditor"> &nbsp;<span class="vote">Vote <br>
									<button class="platfromBtn" type="button"  data-toggle="modal" data-target="#candidate_platform<?php echo$fetch['candidate_id']; ?>" id="<?php echo$fetch['candidate_id'];?>"><i class="fa fa-eye"></i>Platform</button>

									<?php
										require 'candidatePlatform.php';
									?>
								</span>
								</div>
							 </div>
						</div>
					</div> -->

	
						<?php
							}
						?>

						</div>                       
                    </div>
                </div>
    <!--  Mass Media Officer area -->
	 	<div class="col-lg-6">
	 		<div class="panel panel" style="background-color:#54515EFF;">
                        <div class="panel-heading">
							<h4 style="float:right; color:white; font-family: system-ui;">Vote 3 Candidates</h4>
                        	<center><h3 style="color:White; font-weight:bold; letter-spacing:2px;">MASS MEDIA OFFICER</h3></center>
                 </div>
                        <div class="panel-body" style="background-color: #A3A1A6FF;">
						<?php
						 $bool = false;
							$query = $conn->query("SELECT tbl_candidate.candidate_id, tbl_candidate.platform, tbl_candidate.img, tbl_candidate.position,tbl_partylist.partylist_id, tbl_partylist.party, tbl_candidate.firstname, tbl_candidate.lastname, tbl_candidate.email, tbl_candidate.department, tbl_candidate.year_level, tbl_candidate.gender FROM tbl_candidate INNER JOIN tbl_partylist ON tbl_candidate.partylist_id = tbl_partylist.partylist_id WHERE `position` = 'Mass Media Officer' and status = 'approved'") or die(mysqli_errno());
							while($fetch = $query->fetch_array()){
								$candidate_id = $fetch['candidate_id'];
							?>
					<div id = "card-container1">
                		<div class="card-container">
								<!-- <span class="pro">PRO</span> -->
								<img class="circle" src = "admin/<?php echo $fetch['img']?>"  style = "width:10pc; height:10pc; cursor: pointer; border-radius:6px; " alt="user" />
								<h3 class="h3">Name: <?php echo $fetch['firstname']." ".$fetch['lastname'] ?></h3>
								<h6 class="h6">Gender: <?php echo $fetch['gender'] ?></h6>
								<h6 class="h6">Deparment: <?php echo $fetch['department'] ?></h6>
								<h6 class="h6">Year Level: <?php echo $fetch['year_level'] ?></h6>
								<h6 class="h6">Party: <?php echo $fetch['party'] ?></h6>
								<p class="p"><br/> </p>
								<div class="buttons">
									<button class="primary" type="button"  data-toggle="modal" data-target="#candidate_platform<?php echo$fetch['candidate_id']; ?>" id="<?php echo$fetch['candidate_id'];?>"><b>
										Platform
							</b></button>									
									<button type="button" class="primary ghost">Vote &nbsp;
										<input  type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" id="mmo_id" name ="mmo_id[]" class = "mmo">
									</button>
								</div>
						</div>
					</div>
							<?php
							require 'candidatePlatform.php';
							?>

<!--                            	<div id = "position">
                           	<div class="vice-pre">
                       		<div class="descrip">
								<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px; " height = "150px" width = "150px" class = "img">
							</div>
							
							<div class="descrip">
								<?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Department: </strong> ".$fetch['department']."<br/><strong>Party: </strong> ".$fetch['party']?>
							<div class="givevote">
								<input  type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" id="mmo_id" name ="mmo_id" class = "mmo"> &nbsp;<span class="vote">Vote <br>
									<button class="platfromBtn" type="button"  data-toggle="modal" data-target="#candidate_platform<?php echo$fetch['candidate_id']; ?>" id="<?php echo$fetch['candidate_id'];?>"><i class="fa fa-eye"></i>Platform</button>

									<?php
										require 'candidatePlatform.php';
									?>
								</span>
								</div>
							 </div>
						</div>
					</div> -->

	
						<?php
							}
						?>

						</div>                       
                    </div>
                </div>


   <!--   Activity Coordinator area -SENATOR -->
	<div class="col-lg-6">
	 		<div class="panel panel" style="background-color:#54515EFF;">
                        <div class="panel-heading">
							<h4 style="float:right; color:white;font-family: system-ui;">Vote 12 Candidates</h4>
                        	<center><h3 style="color:White; font-weight:bold; letter-spacing:2px;">SENATOR</h3></center>
                 </div>
                        <div class="panel-body" style="background-color: #A3A1A6FF;">
						<?php
						 $bool = false;
							$query = $conn->query("SELECT tbl_candidate.candidate_id, tbl_candidate.platform, tbl_candidate.img, tbl_candidate.position,tbl_partylist.partylist_id, tbl_partylist.party, tbl_candidate.firstname, tbl_candidate.lastname, tbl_candidate.email, tbl_candidate.department, tbl_candidate.year_level, tbl_candidate.gender FROM tbl_candidate INNER JOIN tbl_partylist ON tbl_candidate.partylist_id = tbl_partylist.partylist_id WHERE `position` = 'Senator' and status = 'approved'") or die(mysqli_errno());
							while($fetch = $query->fetch_array()){
								$candidate_id = $fetch['candidate_id'];
							?>	
					<div id = "card-container1">
                		<div class="card-container">
								<!-- <span class="pro">PRO</span> -->
								<img class="circle" src = "admin/<?php echo $fetch['img']?>"  style = "width:10pc; height:10pc; cursor: pointer; border-radius:6px; " alt="user" />
								<h3 class="h3">Name: <?php echo $fetch['firstname']." ".$fetch['lastname'] ?></h3>
								<h6 class="h6">Gender: <?php echo $fetch['gender'] ?></h6>
								<h6 class="h6">Deparment: <?php echo $fetch['department'] ?></h6>
								<h6 class="h6">Year Level: <?php echo $fetch['year_level'] ?></h6>
								<h6 class="h6">Party: <?php echo $fetch['party'] ?></h6>
								<p class="p"><br/> </p>
								<div class="buttons">
									<button class="primary" type="button"  data-toggle="modal" data-target="#candidate_platform<?php echo$fetch['candidate_id']; ?>" id="<?php echo$fetch['candidate_id'];?>"><b>
										Platform
							</b></button>									
									<button type="button" class="primary ghost">Vote &nbsp;
										<input  type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" id="Sen_id" name ="Sen_id[]" class = "Sen">
									</button>
								</div>
						</div>
					</div>
							<?php
							require 'candidatePlatform.php';
							?>

<!--                            	<div id = "position">
                           	<div class="vice-pre">
                       		<div class="descrip">
								<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px; " height = "150px" width = "150px" class = "img">
							</div>
							
							<div class="descrip">
								<?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Department: </strong> ".$fetch['department']."<br/><strong>Party: </strong> ".$fetch['party']?>
							<div class="givevote">
								<input  type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" id="a_id" name ="a_id" class = "actcoordinator"> &nbsp;<span class="vote">Vote <br>
									<button class="platfromBtn" type="button"  data-toggle="modal" data-target="#candidate_platform<?php echo$fetch['candidate_id']; ?>" id="<?php echo$fetch['candidate_id'];?>"><i class="fa fa-eye"></i>Platform</button>

									<?php
										require 'candidatePlatform.php';
									?>
								</span>
								</div>
							 </div>
						</div>
					</div> -->

	
						<?php
							}
						?>

						</div>                       
                    </div>
                </div>

		<center>
			<p>Remaining Votes Left: <em id="count"></em></p>
			<button class="submit_vote" type = "submit" id="submitvote" name="submit" disabled>Submit Ballot</button>
			</center>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</form>


<div>



</body>
<?php include ('script.php');?>
  <script type = "text/javascript">

	var total=0;
		$(document).ready(function(){
			// SCO President
			$(".pres").on("change", function(){
				if($(".pres:checked").length == 1)
					{
						$(".pres").attr("disabled", "disabled");
						$(".pres:checked").removeAttr("disabled");
						total += 1;
						document.getElementById("count").innerHTML = 20-total;

						
					}
				else
					{
						$(".pres").removeAttr("disabled");
						

					}
			});

			// SCO Vice President
			$(".vpres").on("change", function(){
				if($(".vpres:checked").length == 1)
					{
						$(".vpres").attr("disabled", "disabled");
						$(".vpres:checked").removeAttr("disabled");
						total += 1;
						document.getElementById("count").innerHTML = 20-total;
					}
				else
					{
						$(".vpres").removeAttr("disabled");
					}
			});

			// SCO Secretary
			$(".secretary").on("change", function(){
				if($(".secretary:checked").length == 1)
					{
						$(".secretary").attr("disabled", "disabled");
						$(".secretary:checked").removeAttr("disabled");
						total += 1;
						document.getElementById("count").innerHTML = 20-total;
					}
				else
					{
						$(".secretary").removeAttr("disabled");
					}
			});

			// SCO Treasurer
			$(".treasurer").on("change", function(){
				if($(".treasurer:checked").length == 1)
					{
						$(".treasurer").attr("disabled", "disabled");
						$(".treasurer:checked").removeAttr("disabled");
						total += 1;
						document.getElementById("count").innerHTML = 20-total;
					}
				else
					{
						$(".treasurer").removeAttr("disabled");
					}
			});

			// SCO Auditor
			$(".auditor").on("change", function(){
				if($(".auditor:checked").length == 1)
					{
						$(".auditor").attr("disabled", "disabled");
						$(".auditor:checked").removeAttr("disabled");
						total += 1;
						document.getElementById("count").innerHTML = 20-total;
					}
				else
					{
						$(".auditor").removeAttr("disabled");
					}
			});
			

			// SCO Mass Media Officer
			$(".mmo").on("change", function(){
				if($(".mmo:checked").length == 3)
					{
						$(".mmo").attr("disabled", "disabled");
						$(".mmo:checked").removeAttr("disabled");
						total += 3;
						document.getElementById("count").innerHTML = 20-total;
					}
				else
					{
						$(".mmo").removeAttr("disabled");
					}
				
			});

			// SCO Peace Officer
			// $(".pofficer").on("change", function(){
			// 	if($(".pofficer:checked").length == 3)
			// 		{
			// 			$(".pofficer").attr("disabled", "disabled");
			// 			$(".pofficer:checked").removeAttr("disabled");
			// 		}
			// 	else
			// 		{
			// 			$(".pofficer").removeAttr("disabled");
			// 		}
			// });

			// SCO SENATOR
			$(".Sen").on("change", function(){
				if($(".Sen:checked").length == 12)
				{
					$(".Sen").attr("disabled", "disabled");
					$(".Sen:checked").removeAttr("disabled");
					total += 12;
					document.getElementById("count").innerHTML = 20-total;
					if(total == 20){
						document.getElementById("submitvote").disabled = false;
					}else{
						document.getElementById("submitvote").disabled = true;
					}
				}
			else
				{
					$(".Sen").removeAttr("disabled");
				}
			});




			// 1st year
			// $(".1st").on("change", function(){
			// 	if($(".1st:checked").length == 1)
			// 	{
			// 		$(".1st").attr("disabled", "disabled");
			// 		$(".1st:checked").removeAttr("disabled");
			// 	}
			// else
			// 	{
			// 		$(".1st").removeAttr("disabled");
			// 	}
			// });

			// 	2nd year
			// 	$(".2nd").on("change", function(){
			// 	if($(".2nd:checked").length == 1)
			// 	{
			// 		$(".2nd").attr("disabled", "disabled");
			// 		$(".2nd:checked").removeAttr("disabled");
			// 	}
			// else
			// 	{
			// 		$(".2nd").removeAttr("disabled");
			// 	}
			// });
			// 			3rd year
			// 			$(".3rd").on("change", function(){
			// 	if($(".3rd:checked").length == 1)
			// 	{
			// 		$(".3rd").attr("disabled", "disabled");
			// 		$(".3rd:checked").removeAttr("disabled");
			// 	}
			// else
			// 	{
			// 		$(".3rd").removeAttr("disabled");
			// 	}
			// });
			// 			4th year
			// 			$(".4th").on("change", function(){
			// 	if($(".4th:checked").length == 1)
			// 	{
			// 		$(".4th").attr("disabled", "disabled");
			// 		$(".4th:checked").removeAttr("disabled");
			// 	}
			// else
			// 	{
			// 		$(".4th").removeAttr("disabled");
			// 	}
			// });

		});	
	</script>
 
	

</html>

