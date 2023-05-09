<?php include ('head.php');?>

<body>
<div id="wrapper">
        <?php include ('side_bar.php');?>
<div id="page-wrapper">
    <div class="row">
      <?php
          $count1 =  $conn->query("SELECT COUNT(*) as total FROM `tbl_candidate` WHERE `status` = 'delete'")->fetch_array();
          $count2 =  $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `status1` = 'delete' ")->fetch_array();
            $count3 =  $conn->query("SELECT COUNT(*) as total FROM `tbl_candidate` WHERE `status` = 'deletecandidate'")->fetch_array();

      ?> <br><br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="modal-title" id="myModalLabel">         
                    <div class="panel panel-default">
                      <div class="panel-heading"><i class = "fa fa-archive"></i>
                        Archive Voters
                      </div>    
                    </div>
                  </h4>
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="archives_candidate.php">Rejected Candidates  <?php echo $count1['total']?></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="archive_voters.php">Deleted Voters <?php echo $count2['total']?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="archives_candidate1.php">Deleted Candidate <?php echo $count3['total']?></a>
                </li>
                </ul>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                
                                    <th>Student ID</th>
                                      <th>Names</th>
                                      <th>Lastname</th>
                                      <th>Email Add</th>
                                      <th>Gender</th>
                                      <th>Department</th>
                                      <th>Year Level</th>
                                      <th>Birthdate</th>
                                      <th>School Year</th>
                                    <th>Actions</th>                              
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    require '../dbconnector/dbcon.php';
                                    $bool = false;
                                    $query = $conn->query("SELECT * FROM voters WHERE status1='delete'");
                                    while($row = $query->fetch_array()){
                                    $voters_id=$row['voters_id'];
                                    ?>
                              
                                    <tr >
                                        <td><?php echo $row['id_number'];?></td>
                                        <td><?php echo $row['firstname']?></td>
                                        <td><?php echo $row['lastname'];?></td>
                                        <td><?php echo $row['email'];?></td>
                                        <td><?php echo $row['gender'];?></td>
                                        <td><?php echo $row['department'];?></td>
                                        <td><?php echo $row['year_level'];?></td>
                                        <td><?php echo $row['birthdate'];?></td>
                                        <td><?php echo $row['school_year'];?></td>
                                        <td style="text-align: center;">
                                                

                                                 <a id="<?php echo $voters_id; ?>" href="#archives_voters_delete<?php echo $voters_id; ?>"<?php echo $voters_id?> data-toggle="modal"class="btn btn-danger "><i class="fa fa-trash-o "></i></a>

                                                 <?php include 'archive_voters_delete_modal.php' ?>

                                               <a id="<?php echo $voters_id; ?>" href="#archives_voters_restore<?php echo $voters_id; ?>"<?php echo $voters_id?> data-toggle="modal"class="btn btn-info "><i class="fa fa-undo "></i></a>

                                               <?php include 'archive_voters_restore_modal.php' ?>

                                               
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


    <!-- /#wrapper -->
    <?php include ('script.php');?>

</body>

</html>

