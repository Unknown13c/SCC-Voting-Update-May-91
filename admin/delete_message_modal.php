<div class="modal fade" id="deleteMessage<?php echo $message_id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">                      
      <div class="modal-body">
        <center>
        Do you want to delete this Message?
        </center>
      </div>
                  
      <div class="modal-footer">
        <a class="btn btn-danger" href="message_delete.php?message_id=<?php echo $message_id; ?>"><i class="icon-check"></i>&nbsp;Yes</a>
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
      </div>
    </div>
  </div>  
</div>
