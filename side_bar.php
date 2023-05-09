
</div>
<nav >
<img src="logo/scc-logo1.png" style="height: 1%; width: 32pc; margin-left:30px;">
   <div class="logo">
   </div>
   <ul class=" navbar-right">
    <?php require 'dbconnector/dbcon.php';
    			$query = $conn->query("SELECT * from voters where voters_id ='$session_id'")or die (mysql_error ());
    			while ($row = $query->fetch_array()){
    			 ?>
          <li><p style="color: #ffffff;"><a href="vote.php"><i class="fa fa-user"></i></a> <?php echo $user_username = $user_row['firstname']." ".$user_row['lastname'];?> | <a href="logout.php"> <i class="fa fa-sign-out" ></i></a> </p></li>
          
    </ul>
		<?php }?>
 </nav>
</div>


