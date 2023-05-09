
<div class="modal fade" id="delete_userlog<?php echo $user_id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">																
			<div class="modal-body">
				<center>	
				Are you sure you want to delete this logs?
				</center>
			</div>
									
			<div class="modal-footer">
				<a class="btn btn-danger" href="delete_userlog.php?user_id=<?php echo$user_id; ?>"><i class="icon-check"></i>&nbsp;Yes</a>

				<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;No</button>
			</div>
		</div>
	</div>	
</div>