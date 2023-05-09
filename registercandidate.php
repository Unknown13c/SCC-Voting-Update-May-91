<?php include ('head.php');

?>
<body style="background-color: white;">

	<?php
	include ('nav-bar.php');
	?>
	<div class="container-mothers">
		<div class="container-child">
			<img src="logo/candidates.jpg">
		</div>						
			<div class="containers">						
            <div class="modal-body">
				<form action="include/register.inc.php" method = "post" enctype = "multipart/form-data">	
					<h2><i class="fa fa-users"></i> | Candidate's Registration</h2>
					 <?php
					  	if(isset($_GET["error"])){
					  		if($_GET["error"] == "emptyInput"){
					  			echo "<p style='color: red'>Please fill fields</p>";
					  			}else if($_GET["error"] == "emailExist"){
					  			echo "<p style='color: red'>Email already taken</p>";
					  			}elseif($_GET['error'] == 'invalidEmail'){
					  			echo "<p style='color: red'>Email is invalid</p>";
					  			}elseif($_GET['error'] == "emptyImage"){
								echo "<p style='color: red'>Upload image</p>";
					  			}else if($_GET["error"] == "none"){
					  			echo "<p style='color: green'>Your registration is pending for approval</p>";
					  		}  	
							}
					  	?>


					<div class="form-group">
                        <label><strong>Upload Image</strong></label>
						<input  type="file" name="image" required> 
                    </div>
                    <!-- <div class="form-group">
                        <label><strong>Upload Grade</strong></label>
						<input  type="file" name="image_grade" require> 
                    </div> -->

					<div class="form-group">
						<label><strong>Position</strong></label>
						<select class = "form-control" name = "position" required>
								<option selected disabled>Select Position</option>
								<option>President</option>
								<option>Vice President</option>
								<option>Secretary</option>
								<option>Treasurer</option>
								<option>Auditor</option>
								<option>Mass Media Officer</option>
								<option>Senator</option>
								
								
							</select>
					</div>
				<div class="form-group">
						<label><strong>Party Name</strong></label>
					<select class="form-control" name="partylist_id" required>
						<option selected disabled >Select Partylist</option>
					<?php
						require 'dbconnector/dbcon.php';
						$partylist = $conn->query("SELECT * FROM tbl_partylist");
						while ($data = $partylist->fetch_array()) {
							$party_id = $data['partylist_id'];
							echo "<option value='".$data['partylist_id']."'>".$data['party']."</option>";
						}
					?>
					</select>
					</div>
					
					<div class="form-group">
						<label ><strong>Platform</strong></label>
					  <textarea class="form-control" name="platform" placeholder="Enter your platform" required></textarea>			  
					</div>
	
					<div class="form-group">
						<label><strong>Firstname</strong></label>
							<input class="form-control" type="text" name = "firstname" placeholder="Enter Firstname" required>
					</div>
					<div class="form-group">
						<label><strong>Lastname</strong></label>
							<input class="form-control"  type="text" name = "lastname" placeholder="Enter Lastname" required>
					</div>
					<div class="form-group">
						<label><strong>Email Address</strong></label>
							<input class="form-control"  type="text" name = "email" placeholder="Enter Email Address" required>
					</div>					
					<div class="form-group">
						<label><strong>Department</strong></label>
							<select class="form-control" name="department" placeholder="Select Department" required>
								<option selected disabled>Select Department</option>
								<option>BSIT</option>
								<option>BSBA</option>
								<option>BSHM</option>
								<option>BSTM</option>
								<option>BEED</option>
								<option>BSED</option>
								<option>BSCRIM</option>
							</select>
					</div>
					<div class="form-group">
						<label><strong>Year Level</strong></label>
							<select class="form-control" name="year_level" placeholder="Select Year Level" required>
								<option selected disabled>Select year level</option>
								<option>1st Year</option>
								<option>2nd Year</option>
								<option>3rd Year</option>
								<option>4th Year</option>
							</select>
					</div>															
					<div class="form-group">
						<label><strong>Gender</strong></label>
							<select class="form-control" name="gender" placeholder="Select Gender" required>
								<option selected disabled>Select gender</option>
								<option>Male</option>
								<option>Female</option>
							</select>
					</div>
											
				<button class="btn-register" name="submit">Register</button>
				<p>Note:* Make sure your email may not duplicate to other or else you cannot register as candidate! Thankyou</p>
				</form>  
					
			</div>
			</div>	

			</div>
			
										
										
<!-- 							
<?php 
include 'footer.php';
?> -->
</body>
</html>