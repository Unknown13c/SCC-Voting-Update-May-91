<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-footer">
            </div>										
            <div class="modal-body">
				<form action="add_voters.php" method = "post" enctype = "multipart/form-data" id="newModalForm">
					<div class="form-field">
						<label>Student ID</label><br/>
						<input class ="form-control" type = "text"  id="id_number" name = "id_number" placeholder = "Student ID" required>
					</div>
					<div class="form-field">
						<label>First Name</label><br/>
						<input class="form-control" type ="text" id="firstname" name = "firstname" placeholder="First Name" required="true">
					</div>					
					<div class="form-field">
						<label>Last Name</label><br/>
						<input class="form-control"  type = "text" id="lastname" name = "lastname" placeholder="Last Name" required="true">
					</div>
					<div class="form-field">
						<label>Email Add</label><br/>
						<input class="form-control"  type = "text" id="email" name = "email" placeholder="Email Address" required="true">
					</div>

					<div class="form-field">
						<label>Gender</label> <br/>
						<select class = "form-control" id="gender" name = "gender" required>
							<option disabled selected>Select Gender</option>
							<option >Male</option>
							<option >Female</option>														
						</select>
					</div>
					<div class="form-field">
					<label>Department</label>
						<select class = "form-control" id="prog_study" name = "prog_study" placeholder="Select Department" required >
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
					<div class="form-field">
					<label>Year</label> <br/>
						<select class = "form-control" id="year_level" name = "year_level" required>
							<option disabled selected>Select Year Level</option>
							<option>1st Year</option>
							<option>2nd Year</option>
							<option>3rd Year</option>
							<option>4th Year</option>								
						</select>
					</div>
					</br>
					<button name="submit" type="submit" class="btn btn-primary" onclick="submitVoters()">Save Data</button>
              		<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				</form>  
			</div>
         								
        </div>                               
	</div>								
</div>
