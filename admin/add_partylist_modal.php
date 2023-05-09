<div class="modal fade" id="partylistModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal" style="border: none; background-color: transparent;">X</button>
            </div>										
            <div class="modal-body">
				<form method = "post" enctype = "multipart/form-data" action="add_partylist.php">
					<div class="form-field">
						<label>Party Name</label><br/>
						<input class ="form-control" type = "text" name = "party" placeholder = "Enter Partylist" required>
					</div>
					<div class="form-field">
						<label>Election Year</label><br/>
						<input class ="form-control" type = "text" name = "year" placeholder = "Enter Year" required >
					</div>					
					</br>
					<div class="modal-footer">
			     	<button name = "save" type="submit" class="btn btn-primary pull-left">Save Data</button>			     							
					<button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
					</div>
						
				</form>  
			</div>
<!-- 
			<?php
			require 'dbcon.php';
			
			if(isset($_POST['save'])){
				$party=$_POST['party'];
				$year = $_POST['year'];					
				$date = date("Y-m-d H:i:s");							
				$conn->query("INSERT INTO tbl_partylist(party,year,date) VALUES('$party','$year','$date')");
				$conn->query("INSERT INTO tbl_activitylogs(username, action) values ('$_SESSION[username]','New partylist added')")or die($conn->error);

				echo "<script>window.location('dashboard.php?error=partylistAdded')</script>";
			}else{							
			}

			?> -->
		</div>                                
	</div>								
</div>