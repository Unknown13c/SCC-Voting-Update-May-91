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
                      <div class="panel-heading"><i class = "fa fa-inbox"></i>
                        Message Inbox
                      </div>    
                    </div>
                  </h4>
                  <?php
                  if (isset($_GET["error"])) {
                      if($_GET["error"] == "messageDelete"){
                        echo "<p style='color:red'>Message deleted Successfuly</p>";
                      }
                  }
                  ?>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Fullname</th>
                                    <th>Messages</th>
                                    <th>Action</th>         
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                require '../dbconnector/dbcon.php';
                                $bool = false;
                                $query = $conn->query("SELECT * FROM tbl_messages");
                                    while($row = $query->fetch_array()){
                                        $message_id = $row['m_id'];
                                    ?>
                              
                                    <tr >
                                           
                                            <td><?php echo $row ['v_name'];?></td>
                                            <td><?php echo $row ['v_message'];?></td>
                                            
                                            <td>                                                
                                                <a id="<?php echo $message_id; ?>" href="#deleteMessage<?php echo $message_id; ?>"<?php echo $message_id?> data-toggle="modal"class="btn btn-danger ">Delete <i class="fa fa-trash-o"></i></a> 
                                              <?php require ('delete_message_modal.php'); ?>
                                            </td>
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

