<?php include ('head.php');?>

<body>
<div id="wrapper">
        <?php include ('side_bar.php');?>
<div id="page-wrapper">
    <div class="row"><br><br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="modal-title" id="myModalLabel">         
                    <div class="panel panel-default">
                      <div class="panel-heading"><i class = "fa fa-users"></i>
                         Time | Activity Logs
                      </div>                           
                    </div>
                  </h4>

<!--                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#delete_clearlogs"> <i class="fa fa-trash-o"></i>
                 Empty logs
                </button> -->

                <?php 
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "emptyLogs") {
                            echo "<p style='color: green'><br>Logs Empty</p>";
                        }
                    }

                ?>
                                 
                </div>


                <!-- Modal -->
                <div class="modal fade" id="delete_clearlogs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                        <center>                        
                        Delete all logs?
                        </center>
                      </div>
                      <div class="modal-footer">
                        <a class="btn btn-danger" href="delete_userclear_logs.php">Yes</a>
                        <button type="button" class="btn"  class="close" data-dismiss="modal">No</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Actions</th>
                                    <th>Time</th>
                                  <!--   <th>Action</th>  -->      
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                // require '../dbconnector/dbcon.php';
                                $bool = false;
                                $query = $conn->query("SELECT * FROM tbl_activitylogs");
                                        while($row = $query->fetch_array()){
                                        $user_id = $row['logs_id'];
                                        $username= $row['username'];
                                    ?>
                              
                                    <tr >
                                       
                                           
                                            <td><?php echo $row ['username'];?></td>
                                            <td><?php echo $row ['action'];?></td>
                                            <td><?php echo $row ['login_time'];?></td>
<!--                                             <td>
                                            <a id="<?php echo $user_id; ?>" href="#delete_userlog<?php echo $user_id; ?>"<?php echo $user_id?> data-toggle="modal"class="btn btn-danger "><i class="fa fa-trash-o"></i></a> 

                                                 <?php include ('delete_userlog_modal.php'); ?>

                                                
                                            </td> -->
                                           
                                    </tr>
                               
                
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

