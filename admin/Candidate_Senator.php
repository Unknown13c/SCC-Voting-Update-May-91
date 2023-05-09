<?php include ('head.php');?>
<body >

    <?php include ('side_bar.php');?>

        <div id="wrapper">
            <div id="page-wrapper">
        <br><br>                  
          <div class="chart-content3">
            <h2 style="font-size:2em; color:red;">Registered Candidates</h2>

            <center>
                                <div class="select">
                                <select onchange = "page(this.value)">
                                <option disabled selected>Select Candidate Group</option>
                                <option value="Candidate_pres.php">President</option>
                                <option value = "Candidate_vp.php">Vice President</option>
                                <option value = "Candidate_secretary.php">Secretary</option>
                                <option value = "Candidate_treasurer.php">Treasurer</option>
                                <option value = "Candidate_auditor.php">Auditor</option>
                                <option value = "Candidate_massmedia.php" >Mass Media Officer</option>
                                <!-- <option  value = "Candidate_peaceOficer.php">Peace Officer</option>
                                <option value="Candidate_activitycoor.php">Activity Coordinator</option> -->
                                <option disabled selected>Senator</option>                                  
                                </select>
                                </div>
                            </center>

                    <script>
                        function page (src){
                            window.location=src;
                    }
                    </script>
                        <div class="panel-body">
                    <div class="table-responsive">
                       <table class="table table-striped table-bordered table-hover" border="0">
                                        <thead class="thead">
                                            <tr>
                                                <th>Image</th>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <!-- <th>Email Add</th> -->
                                                <th>Party</th>
                                                <th>Department</th>
                                                <th>Year Level</th>
                                                <th>Gender</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                            <tr>
                                            <?php 
                                                require '../dbconnector/dbcon.php';
                                                $bool = false;
                                                 $query = $conn->query("SELECT tbl_candidate.candidate_id, tbl_candidate.img, tbl_candidate.position,tbl_partylist.partylist_id, tbl_partylist.party, tbl_candidate.firstname, tbl_candidate.lastname, tbl_candidate.email, tbl_candidate.department, tbl_candidate.year_level, tbl_candidate.gender FROM tbl_candidate INNER JOIN tbl_partylist ON tbl_candidate.partylist_id = tbl_partylist.partylist_id WHERE status = 'approved' and position = 'Senator' ORDER BY candidate_id");
                                                    while($row = $query->fetch_array()){
                                                        $candidate_id=$row['candidate_id'];
                                            ?>
                                                
                                                <td width="50"><img src="../admin/<?php echo $row['img']; ?>" width="50" height="50" class="img-rounded"></td>
                                                <td><?php echo $row ['firstname'];?></td>
                                                <td><?php echo $row ['lastname'];?></td>
                                                <!-- <td><?php echo $row ['email'];?></td> -->
                                                <td><?php echo $row ['party'];?></td>
                                                <td><?php echo $row ['department'];?></td>
                                                <td><?php echo $row ['year_level'];?></td>
                                                <td><?php echo $row ['gender'];?></td>
                                            </tr>
                                            
                                           <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>                            
                                   
                        </div>

                </div>
            
            </div>


                  
        <?php 
            include ('script.php');
            
        ?>                     
</body>
</html>