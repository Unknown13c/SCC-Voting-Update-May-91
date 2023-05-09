<!-- done -->
<?php
	if(!$bool){
?>
<div class="modal fade" id="edit_candidate<?php  echo $candidate_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
		<div class="modal-content">
            <div class="modal-body">
				<form method = "post" enctype = "multipart/form-data">	
				     <img src= <?php echo $row ['img']?> width="50" height="50" class="img-rounded">
					<input type="hidden" name="candidate_id" value="<?php echo $row['candidate_id'] ?>">

					<div class="form-group">
							<label>Image</label>
							<input type="file" name="image" value="<?php echo $row ['img']?>" > 
					</div>

					<div class="form-group">
						<label>Position</label>
						<select class = "form-control" name = "position" value = "<?php echo $row ['img']?>">
								<option><?php echo $row ['position']?></option>
								<option>President</option>
								<option>Vice President</option>
								<option>Secretary</option>
								<option>Treasurer</option> 
								<option>Auditor</option>
								<option>Mass Media Officer</option>
								<option>Peace Officer</option>
								<option>Activity Coordinator</option>
							</select>
					</div>
					<div class="form-group">
						<label>Party Name</label>
					<select class="form-control" name="partylist_id" value="<?php echo $row ['partylist_id']?>">
					<option><?php echo $row ['partylist_id']?></option>
					<?php
						require 'dbcon.php';
						$partylist = $conn->query("SELECT * FROM tbl_partylist");
						while ($data = $partylist->fetch_array()) {
							$party_id = $data['partylist_id'];
							echo "<option value='".$data['partylist_id']."'>".$data['party']."</option>";
						}
					?>
					</select>
					</div>				
					<div class="form-group">
						<label>Firstname</label>
						<input class="form-control" type ="text" name = "firstname" required="true" value = "<?php echo $row ['firstname']?>">
					</div>
					<div class="form-group">
						<label>Lastname</label>
						<input class="form-control"  type = "text" name = "lastname" value = "<?php echo $row ['lastname']?>">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input class="form-control"  type = "text" name = "email" value = "<?php echo $row ['email']?>" required="true" validate>
					</div>					
					<div class="form-group">
					<label>Department</label>
						<select class = "form-control" name = "department" value = "<?php echo $row ['department']?>">
							<option><?php echo $row ['department']?></option>
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
						<label>Year Level</label>
						<select class = "form-control" name = "year_level" value = "<?php echo $row ['year_level']?>">
							<option><?php echo $row ['year_level']?></option>
							<option >Select Year level</option>
							<option>1st Year</option>
							<option>2nd Year</option>
							<option>3rd Year</option>
							<option>4th Year</option>
						</select>
					</div>					
					<div class="form-group">
						<label>Gender</label>
							<select class = "form-control" name = "gender" value = "<?php echo $row ['gender']?>">
								<option><?php echo $row ['gender']?></option>
								<option>Select gender</option>
								<option>Male</option>
								<option>Female</option>
							</select>
					</div>
					
					<button name = "update" type="submit" class="btn btn-primary">Save Data</button>

              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          
				</form>

			</div>
		</div>
	</div>
</div>
<!-- /.modal-content -->
                               
	<?php 
		require 'dbcon.php';
		if(ISSET($_POST['update'])){
			$bool = true;
			$position=$_POST['position'];
			$partylist=$_POST['partylist_id'];
			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$email=$_POST['email'];
			$department=$_POST['department'];
			$year_level=$_POST['year_level'];
			$gender=$_POST['gender'];
			$candidate_id=$_POST['candidate_id'];

			$photo=$_FILES['image']['tmp_name'];

			$sql="SELECT * FROM tbl_candidate WHERE candidate_id  = $candidate_id";
			$query=$conn->query($sql);
			$row=$query->fetch_assoc();

if(!empty($photo)){

	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);
	move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);			
	$location="uploads/" . $_FILES["image"]["name"];


	$conn->query("UPDATE tbl_candidate SET position = '$position',partylist_id='$partylist', firstname = '$firstname', lastname = '$lastname', email = '$email', department= '$department',  year_level = '$year_level', gender = '$gender',img ='$location' WHERE candidate_id = '$candidate_id'")or die($conn->error);
	echo "<script> window.location='approvecandidatelist.php?error=updated' </script>";

}else{
	$location = $row['img'];
	$conn->query("UPDATE tbl_candidate SET position = '$position',partylist_id='$partylist',firstname = '$firstname', lastname = '$lastname', email = '$email', department= '$department',  year_level = '$year_level', gender = '$gender',img ='$location' WHERE candidate_id = '$candidate_id'")or die($conn->error);
	echo "<script> window.location='approvecandidatelist.php?error=updated' </script>";
}
		}	
		
		
	?>
								
<?php
	}
?>