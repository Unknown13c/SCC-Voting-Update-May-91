<?php include ('head.php');?>

<body>
<div id="wrapper">
        <?php include ('side_bar.php');?>
<div id="page-wrapper">
    <div class="row">
      <?php
          $count1 =  $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Voted'")->fetch_array();
          $count2 =  $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Unvoted'")->fetch_array();
      ?> <br><br><br>
            <button class="btn btn-info" data-toggle="modal" data-target="#myModal"><i class=" fa fa-plus"></i>Add voters</button>

            <?php include 'add_voters_modals.php';?>
<!--             <button class="btn btn-info" data-toggle="modal" data-target="#resetStatus" ><i class="fa fa-refresh"> </i> Reset Status</button>
             <?php include 'reset_status_voters_modal.php';?> -->
          <!--   <a href="voted.php" class="btn btn-info" <i class = "fa fa-paw"></i> Voted(<?php echo $count1['total']?>)</a>          
            <a  href="unvoted.php" class="btn btn-info" <i class = "fa fa-paw"></i> Unvoted(<?php echo $count2['total']?>) </a> -->
            <a  href = "" data-toggle="modal" data-target="#generateModal" class = "btn btn-danger pull-right" name = "go"><i class = "fa fa-key"></i> Generate All Password</a>

            <a href="importFile.php" style="margin-right:1%;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i>Import Voters</a>

             <!-- <a href="" data-toggle="modal" data-target="#csvUPModal" style="margin-right:2%;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i>Import CSV</a> -->

            <a href="" data-toggle="modal" data-target="#exportModal" style="margin-right:2%;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i>Export Voters</a>

            <a href="" data-toggle="modal" data-target="#sendAll" style="margin-right:2%;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-envelope"></i>Send All user and Pass</a>

  
           

         
        <hr/>	
        <?php
        if(isset($_GET["error"])){
          if($_GET["error"] == "NoInternet"){
            echo "<p style='color: red'>*No Internet connection Coudn't email Voters!</p>";
          }else if($_GET["error"] == "successfulysent"){
            echo "<p style='color: green'>Successfuly notify voters</p>";
          }else if($_GET["error"] == "votersAdded"){
            echo "<p style='color: green'>Voters added succesfuly</p>";
          }else if($_GET["error"] == "idExist"){
            echo "<p style='color: red'>Voters ID already exist</p>";
          }else if($_GET["error"] == "deleteVoter"){
            echo "<p style='color: red'>Voters remove succesfuly</p>";
          }


        }


        ?>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="modal-title" id="myModalLabel">         
										<div class="panel panel-default">
											<div class="panel-heading"><i class = "fa fa-users"></i>
												Voters List 
											</div>    
										</div>
									</h4>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                    <th>Student ID</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                     <th>Email Add</th>
                                    <th>Gender</th>
                                    <th>Department</th>
                                    <th>Year Level</th>
                                     <th>Birthdate</th>
                                    <th>Status</th>
                                    <th>School Year</th>
                                    <th>Password</th>
                                     <th>Action</th>               
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    require '../dbconnector/dbcon.php';
                                    $bool = false;
                                    $query = $conn->query("SELECT * FROM voters WHERE status1 = ''");
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
                                        <td><?php echo $row['password'];?></td>  

                                        <td style="text-align: center;">

                                          <a id="<?php echo $voters_id; ?>" href="#delete_voters<?php echo $voters_id; ?>"<?php echo $voters_id?> data-toggle="modal"class="btn btn-danger "><i class="fa fa-trash-o "></i></a>

                                        <?php include("delete_voters_modal.php");?>

                                           <a id="<?php echo $voters_id; ?>" href="#send_email_voters<?php echo $voters_id; ?>"<?php echo $voters_id?> data-toggle="modal"class="btn btn-info "><i class="fa fa-envelope "></i></a>
                                                 <?php include ('send_email_voters1by1_modal.php')?>
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

<!--   send modal to voters -->
<div class="modal fade" id="sendAll" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <center>
      Are you sure you want to send their account?
      </center>
      </div>
      <div class="modal-footer">
        <a class="btn btn-info" href="send_email_voters.php">Yes</a>
        <button type="button" class="btn"  class="close" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>
<!-- export voters modal-->
<div class="modal fade" id="exportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <center>
      Are you sure you want to download data?
      </center>
      </div>
      <div class="modal-footer">
        <a class="btn btn-info" href="export_voters.php">Yes</a>
        <button type="button" class="btn"  class="close" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>
<!-- generate pass modal-->
<div class="modal fade" id="generateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <center>
      Are you sure you want to generate their password?
      </center>
      </div>
      <div class="modal-footer">
        <a class="btn btn-info" href="generate_password.php">Yes</a>
        <button type="button" class="btn"  class="close" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

<!-- form for upload csv file for voters -->

<!-- <div id="csvUPModal" class="modal fade">
    <div class="modal-dialog modal-sm modal-dialog-centered">
      <form method="post" id="upload_form">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="modal_title" style="font-weight: bold; font-size: 20px;">Upload CSV File</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <div id="upload_message"></div>
              <div class="row justify-content-center" id="upload_area">
                <div class="col-md-6">
                  <input type="file" name="file" id="csv_file" />
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="action" value="upload" />
            <input type="submit" name="upload_file" id="upload_file" class="btn btn-success" value="Upload" />
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </form>
    </div>
  </div> -->

 <!--  ajax for form validation -->
 <!-- <?php

  if($_POST["action"] == 'upload'){

    $error = '';
    $html = '';

    if($_FILES['file']['name'] != '')
    {
    $file_array = explode(".", $_FILES['file']['name']);

    $extension = end($file_array);

    if($extension == 'csv')
    {
    $file_data = fopen($_FILES['file']['tmp_name'], 'r');
    $file_header = fgetcsv($file_data);
    $html .= '<table class="table table-bordered" style="min-width: 200px;"><tr style="min-width: 200px;">';

    for($count = 0; $count < count($file_header); $count++)
    {
    $html .= '
    <th style="min-width: 200px;">
      <select name="set_column_data" class="form-control set_column_data" data-column_number="'.$count.'">
        <option value="">Set Count Data</option>
        // <option value="voters_id">Student ID No.</option>
        <option value="id_number">Student ID No.</option>
        <option value="firstname">First Name</option>
        <option value="lastname">Middle Name</option>
        <option value="gender">Gender</option>
        <option value="department">Department</option>
        <option value="year_level">Year Level</option>
        <option value="status">Unvoted</option>
        <option value="school_year">Date</option>
      </select>
    </th>
    ';
    }

    $html .= '</tr>';

    $limit = 0;

    while(($row = fgetcsv($file_data)) !== FALSE)
    {
    $limit++;

    if($limit < 2)
    {
      $html .= '<tr style="min-width: 200px;">';

      for($count = 0; $count < count($row); $count++)
      {
      $html .= '<td style="min-width: 200px;">'.$row[$count].'</td>';
      }

      $html .= '</tr>';
    }

    $temp_data[] = $row;
    }

    $_SESSION['file_data'] = $temp_data;

    }
    else
    {
      $error = '<div class="alert alert-danger">Only <b>.csv</b> file allowed</div>';
    }
    }
    else
    {
      $error = '<div class="alert alert-danger">Please Select CSV File</div>';
    }

    $output = array(
    'error'  => $error,
    'output' => $html
    );

    echo json_encode($output);

  }
  ?> -->
    <!-- /#wrapper -->
    <?php include ('script.php');?>

</body>

</html>

