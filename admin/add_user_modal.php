<div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-footer">
                
            </div>
			
			        <div class="modal-body">
						<form method = "post" enctype = "multipart/form-data">	
						<div class="form-group">
							<label>Username</label>
							<input class ="form-control" type = "text" name = "username" placeholder = "Username" required="true">
								
						</div>
						<div class="form-group">
							<label>Password</label>
								<input class="form-control" type ="password" name = "password" placeholder="Password" required="true">
						</div>
						<div class="form-group">
							<label>Firstname</label>
								<input class="form-control" type ="text" name = "firstname" placeholder="Firstname" required="true">
						</div>
						<div class="form-group">
							<label>Lastname</label>
								<input class="form-control"  type = "text" name = "lastname" placeholder="Please enter lastname" required="true">
						</div>

						<div class="form-group">
							<label>Email</label>
								<input class="form-control"  type = "email" name = "email" placeholder="Please enter email address" required="true" validate="true">
						</div>
				
							 <button name = "submit" type="submit" class="btn btn-primary">Save Data</button>
							 <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						</form>
					</div>
	
								
					<?php 
								
						require 'dbcon.php';
						if (isset($_POST['submit'])){								
						$username=$_POST['username'];
						$password=$_POST['password'];
						$firstname=$_POST['firstname'];
						$lastname=$_POST['lastname'];
						$email=$_POST['email'];
						// $password1 = password_hash($password, PASSWORD_DEFAULT);
								
						$query = $conn->query("SELECT * FROM tbl_admin WHERE username ='$username'") or die ($conn->error);
						$count1 = $query->num_rows;

						if ($count1  > 0){ 
 						echo "<script> window.location='user.php?error=usernametaken'</script>";
						}
						else{
							$conn->query("INSERT INTO `tbl_admin`(`username`, `password`, `firstname`, `lastname`, `email`) VALUES ('$username','$password','$firstname','$lastname','$email')");
							// header('location:user.php?error=added');
					
							}
						} 
					?>	
        </div>
    </div>
</div>
