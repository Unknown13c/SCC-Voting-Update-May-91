<!-- EMAIL PROPERTY FOR NOTIFYING THE VOTERS AREA -->
<div class="modal fade" id="email_message" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-footer">
            </div>                                        
            <div class="modal-body">
                <form action="notify_email.php" method = "get" enctype = "multipart/form-data">
                    <div class="form-group">
                        <label>Announcement</label>
                        <textarea class="form-control"  type = "text" name = "lastname" autofocus placeholder="Let's notify the voters..." required="true"></textarea>
                    </div>
                    <button name="notify" type="submit" class="btn btn-primary ">Notify</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </form>  
            </div>                                              
        </div>                          
    </div>                               
</div>
<!-- Modal form to notify voters -->

            
     