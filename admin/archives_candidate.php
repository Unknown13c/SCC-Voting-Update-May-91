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
      ?>
        <br><br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="modal-title" id="myModalLabel">         
                    <div class="panel panel-default">
                      <div class="panel-heading"><i class = "fa fa-archive"></i>
                        Archives Data
                      </div>    
                    </div>
                  </h4>
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="archives_candidate.php">Rejected Candidates <?php echo $count1['total']?></a>
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
                                <tr>
                                    <th>Image</th>
                                    <th>Position</th>
                                    <th>Party Name</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email Add</th>
                                    <th>Department</th>
                                    <th>Year Level</th>
                                    <th>Gender</th>
                                    <th>Action</th>         
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                require '../dbconnector/dbcon.php';
                                $bool = false;
                                $query = $conn->query("SELECT tbl_candidate.candidate_id, tbl_candidate.img, tbl_candidate.position,tbl_partylist.partylist_id, tbl_partylist.party, tbl_candidate.firstname, tbl_candidate.lastname, tbl_candidate.email, tbl_candidate.department, tbl_candidate.year_level, tbl_candidate.gender FROM tbl_candidate INNER JOIN tbl_partylist ON tbl_candidate.partylist_id = tbl_partylist.partylist_id WHERE status = 'delete' ORDER BY candidate_id");
                                    while($row = $query->fetch_array()){
                                        $candidate_id = $row['candidate_id'];
                                    ?>
                              
                                    <tr >
                                       <td width="50"><img src="<?php echo $row['img']; ?>" width="50" height="50" class="img-rounded"></td>
                                           
                                            <td><?php echo $row ['position'];?></td>
                                            <td><?php echo $row ['party'];?></td>
                                            <td><?php echo $row ['firstname'];?></td>
                                            <td><?php echo $row ['lastname'];?></td>
                                            <td><?php echo $row ['email'];?></td>
                                            <td><?php echo $row ['department'];?></td>
                                            <td><?php echo $row ['year_level'];?></td>
                                            <td><?php echo $row ['gender'];?></td>
                                            <td style="text-align:center">
                                            
                                            <a id="<?php echo $candidate_id; ?>" href="#delete_archive<?php echo $candidate_id; ?>"<?php echo $candidate_id?> data-toggle="modal"class="btn btn-danger "><i class="fa fa-trash-o"></i></a> 
                                              <?php require ('archive_delete_modal.php'); ?> 

                                            <a id="<?php echo $candidate_id; ?>" href="#restore_archive<?php echo $candidate_id; ?>"<?php echo $candidate_id?> data-toggle="modal"class="btn btn-info "><i class="fa fa-undo "></i></a>
                                           
                                                
                                            </td>
                                              <?php include ('restore_archive_modal.php')?>
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

