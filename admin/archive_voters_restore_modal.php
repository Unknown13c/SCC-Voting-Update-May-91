<div class="modal fade" id="archives_voters_restore<?php echo $voters_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      Are you sure you want to restore this Voter?
      </div>
      <div class="modal-footer">
        <a class="btn btn-info" href="archive_voters_restore.php?voters_id=<?php echo $row['voters_id']; ?>">Yes</a> 
        <button type="button" class="btn"  class="close" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>