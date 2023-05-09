<?php include ('head.php');?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->

        <div id="page-wrapper">
            
            <div class="row">
                <br><br>
                <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="modal-title" id="myModalLabel">         
                                        <div class="panel panel-default">
                                            <div class="panel-heading"><i class = "fa fa-users"></i>
                                                Candidate Approve List
                                            </div>    
                                        </div>
                                    </h4>
                </div>
                <br>
                    <a href="export_candidate.php" style = "margin-right:2%;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i>Export Candidates</a>


                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                        <tr>
                                         
                                            
                                            <th>Image</th>
                                            <th>Position</th>
                                            <th>Party</th>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Email Add</th>
                                            <th>Department</th>
                                            <th>Year Level</th>
                                            <th>Gender</th>
                                            <th>Plat-form</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                        <tr>
                                        <?php 
                                            require '../dbconnector/dbcon.php';
                                            $bool = false;
                                            $query = $conn->query("SELECT tbl_candidate.candidate_id, tbl_candidate.platform, tbl_candidate.img, tbl_candidate.position,tbl_partylist.partylist_id, tbl_partylist.party, tbl_candidate.firstname, tbl_candidate.lastname, tbl_candidate.email, tbl_candidate.department, tbl_candidate.year_level, tbl_candidate.gender FROM tbl_candidate INNER JOIN tbl_partylist ON tbl_candidate.partylist_id = tbl_partylist.partylist_id WHERE status = 'approved' ORDER BY candidate_id");

                                                while($row = $query->fetch_array()){
                                                    $candidate_id=$row['candidate_id'];
                                        ?>
                                            <td width="50"><img src="<?php echo $row['img']; ?>" width="50" height="50" class="img-rounded"></td>
                                            <td><?php echo $row ['position'];?></td>
                                            <td><?php echo $row ['party'];?></td>
                                            <td><?php echo $row ['firstname'];?></td>
                                            <td><?php echo $row ['lastname'];?></td>
                                            <td><?php echo $row ['email'];?></td>
                                            <td><?php echo $row ['department'];?></td>
                                            <td><?php echo $row ['year_level'];?></td>
                                            <td><?php echo $row ['gender'];?></td>
                                            <td>
                                                <a id="<?php echo $candidate_id; ?>" href="#candidate_platform<?php echo $candidate_id; ?>"<?php echo $candidate_id?> data-toggle="modal"class="btn btn-success ">View<i class="fa fa-eye"></i></a> 
                                              <?php require ('candidate_platform_modal.php'); ?>                                                
                                            </td>
                                            
                                            
                                            <td style="text-align:center">
                                            
                                                 <a id="<?php echo $candidate_id; ?>" href="#delete_candidateapprove<?php echo $candidate_id; ?>"<?php echo $candidate_id?> data-toggle="modal"class="btn btn-danger "><i class="fa fa-trash-o"></i></a> 

                                             <?php include ('delete_candidateapprove_modal.php'); ?>
                                             
                                                  <a  id="<?php echo $row['candidate_id'] ?>" href="#edit_candidate<?php echo $row['candidate_id'] ?>"  data-toggle="modal"class="btn btn-info "><i class="fa fa-pencil"></i></a> 
                                                
                                            </td>
                                                        
                                                <?php 
                                                    
                                                    require 'edit_candidate_modal.php';
                                                ?>
                                        </tr>
                                        
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
              
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->

    <?php include ('script.php');
    // include ('footer.php');

    ?>


</body>

</html>

