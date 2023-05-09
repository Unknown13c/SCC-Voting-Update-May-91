<?php
    if(!$bool){
?>
<div class="modal fade" id="user_profile<?php  echo $user_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button style="background-color: none; border-style: none; float: right;" data-dismiss="modal">X</button>        
              <h4 class="modal-title" id="myModalLabel">         
                <div class="panel ">
                  <div class="panel-heading">
                   <h3 style="padding: 1em; background-color: red; border-radius: 4px; color: white;"> <i class="fa fa-user"></i>| Account Property</h3>
                  </div>    
                </div>
              </h4>
   
          <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
            <div class="form-group">
                <label>Name:</label>                
                <input class="form-control" type="text" value="<?php echo $row['firstname']?>" name="firstname">
            </div>
            <div class="form-group">
                <label>Lastname:</label>
                <input class="form-control" type="text" value="<?php echo $row['lastname']?>" name="lastname">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input class="form-control" type="email" value="<?php echo $row['email']?>" name="email">
            </div>    
         
               <button name="saveinfo" class="btn btn-info" > <i class="fa fa-save"></i> Save</button>
               <br>&nbsp;

            <p>Would you like to change your password? <span><a href="changepass.php">Here</a></span></p>
             <!--  <button name="changepass" style="top: 60%" class="btn btn-info pull right" ><i class="fa fa-key"></i>Change Password</button> -->
         
             
          </form> 



          <?php 
          require '../dbconnector/dbcon.php';
          if(isset($_POST['saveinfo'])){
            $id = $_POST['user_id'];
            $name = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            // $phone = $_POST['Phone'];
        
            $conn->query("UPDATE tbl_admin SET  firstname = '$name', lastname = '$lastname', email = '$email' WHERE user_id = '$id'")or die($conn->error);
        echo "<script> window.location='user.php?error=updated' </script>";
          } 
          
          
        ?>


         
         
    </div>
  </div>
</div>




<?php
   }
?>