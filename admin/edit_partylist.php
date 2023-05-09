<?php
if(!$bool){
?>
<div class="modal fade" id="editPartylist<?php echo $partylist_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal" style="border: none; background-color: transparent;">X</button>
            </div>										
            <div class="modal-body">
				<form method = "post" enctype = "multipart/form-data">
					<div class="form-field">
						<!-- <label>Partylist Id</label><br/> -->
						<input class ="form-control" type = "hidden" name = "partylist_id" value="<?php echo $row['partylist_id']; ?>" required >
					</div>	
					<div class="form-field">
						<label>Partylist Name</label><br/>
						<input class ="form-control" type = "text" name = "party" value="<?php echo $row['party']; ?>" required >
					</div>					
					</br>
					<div class="modal-footer">
			     	<button name = "update" type="submit" class="btn btn-primary pull-left">Save Data</button>			     							
					<button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
					</div>						
				</form>  
			</div>

		</div>                                
	</div>								
</div>
			<?php
			require '../dbconnector/dbcon.php';
			
			if(isset($_POST['update'])){
				$bool = true;
				$party=$_POST['party'];
				$id = $_POST['partylist_id'];
				$conn->query("UPDATE tbl_partylist SET party = '$party' WHERE partylist_id = '$id'")or die($conn->error);
				echo "<script> window.location='dashboard.php?partylist=updated' </script>";
			
			}

			?>
<?php
}
?>