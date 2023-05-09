<?php include ('head.php');?>
<?php include ('sess.php');?>

<body>
<style>
          .Assign{
				display: flex;
				justify-content: center;
				text-align: center;
				display:row;
				float:left;
				padding-left:50px;		
			}



</style>
 <?php include 'side_bar.php'; ?>

				        <?php
							if(isset($_POST['submit'])){	
									if(!isset($_POST['pres_id'])){
										$_SESSION['pres_id'] = "";
										header("Location: vote.php?error=Choosecandidate");
									}else{
										$_SESSION['pres_id'] = $_POST['pres_id'];
									}if(!isset($_POST['vp_id'])){
										$_SESSION['vp_id'] = "";
										header("Location: vote.php?error=Choosecandidate");
									}else{
										$_SESSION['vp_id'] = $_POST['vp_id'];
									}if(!isset($_POST['sec_id'])){
										$_SESSION['sec_id'] = "";
										header("Location: vote.php?error=Choosecandidate");
									}else{
										$_SESSION['sec_id'] = $_POST['sec_id'];
									}if(!isset($_POST['tre_id'])){
										$_SESSION['tre_id'] = "";
										header("Location: vote.php?error=Choosecandidate");
									}else{
										$_SESSION['tre_id'] = $_POST['tre_id'];
									}if(!isset($_POST['aud_id'])){
										$_SESSION['aud_id'] = "";
										header("Location: vote.php?error=Choosecandidate");
									}else{
										$_SESSION['aud_id'] = $_POST['aud_id'];
									}if(!isset($_POST['mmo_id'])){
										$mmo = $_POST['mmo_id']= "";
										header("Location: vote.php?error=Choosecandidate");
									}else{
										$mmo = $_POST['mmo_id'];
										$_SESSION['mmo_id'] = $_POST['mmo_id'];

									}if(!isset($_POST['Sen_id'])){
										// $_SESSION['p_id'] = "";
										$Senator=$_POST['Sen_id']="";
										
										header("Location: vote.php?error=Choosecandidate");
									}else{
										$Senator = $_POST['Sen_id'];
										$_SESSION['Sen_id'] = $_POST['Sen_id'];
									}
								}

								
						?>
		<form method="post" action="submit_vote.php">			   
			<center>
			<br>
			  <div class="col-lg-6"  >
			  <div class = "alert alert"style="background-color:gray;">
			  <!-- 	President area -->
			  <div class="panel panel" style="background-color:white; font-family:tahoma;">
			   <div class="panel-heading"><center><h3 style="color:#ec0303; font-weight:bold; letter-spacing:3px;">President</h3></center></div>
			 </div>
				<br />
				<?php
					if(!$_SESSION['pres_id']){
					}else{
					$fetch = $conn->query("SELECT * FROM `tbl_candidate` WHERE `candidate_id` = '$_SESSION[pres_id]'")->fetch_array();
					echo "<img src = 'admin/".$fetch['img']."' style = 'width:18%; color:black;' /><br><br>".$fetch['firstname']."&nbsp&nbsp".$fetch['lastname']."&nbsp&nbsp".$fetch['year_level']."&nbsp".$fetch['department']."";
						}
				?></div>
				
				
	
				
				<!-- Vice President Area -->
				
				 <div class = "alert alert"style="background-color: gray;">
				<div class="panel panel" style="background-color:white; font-family:tahoma;">
			   <div class="panel-heading"><center><h3 style="color:#ec0303; font-weight:bold; letter-spacing:3px;">Vice President</h3></center></div>
				</div>
				<?php
					if(!$_SESSION['vp_id']){
					}else{
					$fetch = $conn->query("SELECT * FROM `tbl_candidate` WHERE `candidate_id` = '$_SESSION[vp_id]'")->fetch_array(); 
					echo "<img src = 'admin/".$fetch['img']."' style = 'width:18%; ' /><br><br>".$fetch['firstname']."&nbsp".$fetch['lastname']."&nbsp".$fetch['year_level']."&nbsp".$fetch['department']."";
						}
				?>
				</div>
				

				<!-- Secretary Area -->
				
				 <div class = "alert alert"style="background-color: gray;">
				<div class="panel panel" style="background-color:white; font-family:tahoma;">
			   <div class="panel-heading"><center><h3 style="color:#ec0303; font-weight:bold; letter-spacing:3px;">Secretary</h3></center></div>
				</div>
				<br/>
				<?php
					if(!$_SESSION['sec_id']){
					}else{
					$fetch = $conn->query("SELECT * FROM `tbl_candidate` WHERE `candidate_id` = '$_SESSION[sec_id]'")->fetch_array(); 
					echo "<img src = 'admin/".$fetch['img']."' style = 'width:15%; ' /><br><br>".$fetch['firstname']."&nbsp".$fetch['lastname']."&nbsp".$fetch['year_level']."&nbsp".$fetch['department']."";
						}
				?>
					
				</div>

				<!-- Treasurer Area -->
				
				 <div class = "alert alert"style="background-color: gray;">
				<div class="panel panel" style="background-color:white; font-family:tahoma;">
			    <div class="panel-heading"><center><h3 style="color:#ec0303; font-weight:bold; letter-spacing:3px;">Treasurer</h3></center></div>
				</div>
				<br />
				<?php
					if(!$_SESSION['tre_id']){
					}else{
					$fetch = $conn->query("SELECT * FROM `tbl_candidate` WHERE `candidate_id` = '$_SESSION[tre_id]'")->fetch_array(); 
					echo "<img src = 'admin/".$fetch['img']."' style = 'width:15%;' /><br><br>".$fetch['firstname']."&nbsp".$fetch['lastname']."&nbsp".$fetch['year_level']."&nbsp".$fetch['department']."";
						}
				?>
				
				</div>

				<!-- Auditor Area -->
				
				 <div class = "alert alert"style="background-color: gray;">
				<div class="panel panel" style="background-color:white; font-family:tahoma;">
			   <div class="panel-heading"><center><h3 style="color:#ec0303; font-weight:bold; letter-spacing:3px;">Auditor</h3></center></div>
				</div>
				<br />
				<?php
					if(!$_SESSION['aud_id']){
					}else{
					$fetch = $conn->query("SELECT * FROM `tbl_candidate` WHERE `candidate_id` = '$_SESSION[aud_id]'")->fetch_array();
					echo "<img src = 'admin/".$fetch['img']."' style = 'width:15%;' /><br><br>".$fetch['firstname']."&nbsp".$fetch['lastname']."&nbsp".$fetch['year_level']."&nbsp".$fetch['department']."";
						}
				?>
				
				</div>

				<!-- Mass media Officer Area -->
				
				 <div class = "alert alert"style="background-color: gray;">
				<div class="panel panel" style="background-color:white; font-family:tahoma;">
			   <div class="panel-heading"><center><h3 style="color:#ec0303; font-weight:bold; letter-spacing:3px;">Mass Media Officer</h3></center></div>
			    </div>
				<br />
				<?php
				foreach($mmo as $row1 =>$_SESSION['mmo']){
					
					if(!$mmo){
					}else{
					$fetch = $conn->query("SELECT * FROM `tbl_candidate` WHERE `candidate_id` = '$_SESSION[mmo]'")->fetch_array();
					echo "<img src = 'admin/".$fetch['img']."' style = 'width:18%;display: flex;' /><br>".$fetch['firstname']."&nbsp".$fetch['lastname']."&nbsp".$fetch['year_level']."&nbsp".$fetch['department']."";
						}
					}
				?>
				
				</div>

				<!--SENATOR -->
				
				 <div class = "alert alert"style="background-color: gray;">
				<div class="panel panel" style="background-color:white; font-family:tahoma;">
			   <div class="panel-heading"><center><h3 style="color:#ec0303; font-weight:bold; letter-spacing:3px;">Senator</h3></center></div>
			    </div>
				<br />
				<?php
				foreach($Senator as $row =>$_SESSION['Senat']){

					if(!$Senator){
					}else{
					$fetch = $conn->query("SELECT * FROM `tbl_candidate` WHERE `candidate_id` = '$_SESSION[Senat]'")->fetch_array();
					echo "<img src = 'admin/".$fetch['img']."' style = 'width:18%;' />".$fetch['firstname']."&nbsp".$fetch['lastname']."&nbsp".$fetch['year_level']."&nbsp".$fetch['department']."";
						}
				}
				?>
				</div>
				
		</center>
	</form>
				<?php
					$self = $conn->query("SELECT * FROM voters");
					while($voter = $self->fetch_array()){
						$voters_id = $voter['voters_id'];
					}
				?>
				<center>
					<button  class="submit_vote">
					 <a style="text-decoration: none;" id="<?php echo $voters_id; ?>" href="#send_email_voters<?php echo $voters_id; ?>"<?php echo $voters_id?> data-toggle="modal">Submit Vote</a>
					</button>
					 	<?php include ('submit_vote_modal.php'); ?>
					<br><br>

					<button class="btn_back"><a  href = "vote.php" ><i class="icon-remove icon-large"></i>Back</a></button>
					<br><br>
				</center>


</body>

<?php include ('script.php');?>
</html>

