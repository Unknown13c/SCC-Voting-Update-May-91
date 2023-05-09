<div class="modal fade" id="deleteUsers<?php echo $user_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <center>
      Are you sure you want to delete this User?
      </center>
      </div>
      <div class="modal-footer">
        <a class="btn btn-danger" href="delete_users.php?user_id=<?php echo $row['user_id']; ?>">Yes</a>
        <button type="button" class="btn"  class="close" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>