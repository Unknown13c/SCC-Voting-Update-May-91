<?php include ('head.php');?>

<body>
<div id="wrapper">
        <?php include ('side_bar.php');?>
<div id="page-wrapper">
    <div class="row">
      <br><br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="modal-title" id="myModalLabel">         
                    <div class="panel panel-default">
                      <div class="panel-heading"><i class = "fa fa-users"></i>
                        Records Data
                      </div>    
                    </div>
                  </h4>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                
                                    <th>candidate_id</th>
                                    <th>Voters_id</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Department</th>
                                    <th>Year Level</th>
  
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                   require '../dbconnector/dbcon.php';
                                    
                                    $query = $conn->query("SELECT votes.vote_id, tbl_candidate.candidate_id, tbl_candidate.firstname, tbl_candidate.lastname,tbl_candidate.department, voters.voters_id, voters.firstname,voters.lastname, voters.department, voters.year_level FROM votes INNER JOIN voters ON votes.voters_id = voters.voters_id INNER JOIN tbl_candidate ON votes.candidate_id = tbl_candidate.candidate_id");
                                    while($row = $query->fetch_array()){
                                    $voters_id=$row['voters_id'];
                                    ?>
                              
                                    <tr >
                                        <td><?php echo $row['candidate_id'];?></td>
                                        <td><?php echo $row['voters_id'];?></td>
                                        <td><?php echo $row['firstname'];?></td>
                                        <td><?php echo $row['lastname'];?></td>
                                        <td><?php echo $row['prog_study'];?></td>
                                        <td><?php echo $row['year_level'];?></td>
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

  <!-- charts for area -->
    <!-- /#wrapper -->
    <?php include ('script.php');?>

</body>

</html>

