<?php include ('session.php');?>
<?php include ('head.php');?>

<body>
<div id="wrapper">
        <?php include ('side_bar.php');?>
<div id="page-wrapper">
    <div class="row">
      <?php
          $count1 =  $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Voted' and department='BSIT' and status1=''")->fetch_array();
          $count2 =  $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Unvoted'and department='BSIT' and status1=''")->fetch_array();
      ?> <br><br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="modal-title" id="myModalLabel">         
                    <div class="panel panel-default">
                      <div class="panel-heading"><i class = "fa fa-users"></i>
                        BSIT Voters
                      </div>    
                    </div>
                  </h4>
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="bsit.php">Voted <?php echo $count1['total']?></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="bsit_unvoted.php">Unvoted <?php echo $count2['total']?></a>
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
                                      <th>Status</th>
                                      <th>School Year</th>
  
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    require 'dbcon.php';
                                    $bool = false;
                                    $query = $conn->query("SELECT * FROM voters WHERE department='BSIT' and status = 'Voted' and status1='' and status1=''");
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
                                        <td><?php echo $row['status'];?></td>
                                        <td><?php echo $row['school_year'];?></td>                                        
  
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

