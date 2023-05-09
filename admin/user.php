<?php include ('head.php');?>

<body>

    <div id="wrapper">

       
        <?php include ('side_bar.php');?>

        
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    
                </div>
                <br><br><br>
                <button class="btn btn-info" data-toggle="modal" data-target="#add_user"><i class="fa fa-plus"></i>Add User</button>
				<?php include ('add_user_modal.php');?>
                <hr/>
                <?php
                    if(isset($_GET["error"])){
                        if($_GET["error"] == "NoInternet"){
                            echo "<p style='color: red'>*No Internet Connection Coudn't send user's account</p>";
                        }else if ($_GET["error"] == "usernametaken") {
                            echo "<p style='color: red'>Username already taken</p>";
                        }
                        else if($_GET["error"] == "successfulysent"){
                            echo "<p style='color: green'>*Successfuly sent user's account</p>";
                        }else if ($_GET["error"] == "added") {
                            echo "<p style='color: green'>New Account Added</p>";
                        }else if ($_GET["error"] == "updated") {
                            echo "<p style='color: green'>Account updated</p>";
                        }
                    }

                ?>
                <div class="panel panel-default">
                        <div class="panel-heading">
                                <h4 class="modal-title" id="myModalLabel">         
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><i class = "fa fa-users"></i>
                                            Users Account
                                        </div>    
                                    </div>
                                </h4>
                         </div>
                
                        <div class="panel-body">
                             <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>                             
                                        <th>Firstname</th>
                                        <th>Lastname</th>                             
                                        <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>									
                                        <tr>
										<?php 
										require '../dbconnector/dbcon.php';
										$bool = false;
										$query = $conn->query("SELECT * FROM tbl_admin ORDER BY user_id ASC");
										while($row = $query->fetch_array()){
										$user_id=$row['user_id'];
                                       

										?>											
										
                                        <td><?php echo $row ['firstname'];?></td>
                                        <td><?php echo $row ['lastname'];?></td>
                                        <td>

                                             <a id="<?php echo $user_id; ?>" href="#deleteUsers<?php echo $user_id; ?>"<?php echo $user_id?> data-toggle="modal"class="btn btn-danger "><i class="fa fa-trash-o"></i></a> 

                                             <?php include("delete_user_modal.php");?>

                                              <a  id="<?php echo $row['user_id'] ?>" href="#user_email<?php echo $row['user_id'] ?>"  data-toggle="modal"class="btn btn-info "><i class="fa fa-envelope"></i></a> 

                                              <?php include("email_users_modal.php");?>

                                                <a  id="<?php echo $row['user_id'] ?>" href="#user_profile<?php echo $row['user_id'] ?>"  data-toggle="modal"class="btn btn-info "><i class="fa fa-pencil"></i></a>

                                             
                                        </td>
                                        </tr>

                                        <?php
                                            include 'user_profile_modal.php';
                                        ?>
										
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <?php include ('script.php');?>

</body>

</html>

