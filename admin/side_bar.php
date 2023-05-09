<nav class="dashboardsecretary" class="navbar navbar-default navbar-static-top" role="navigation" style=" background-color:rgb(237, 23, 23); ">
     <a class="navbar-brand" href="#" style = "color:white; font-weight:bold; letter-spacing:5px; ">VOTING SYSTEM</a>
   <?php require '../dbconnector/dbcon.php';
   
   $query = $conn->query("SELECT * from tbl_admin where username ='$_SESSION[username]'")or die (mysql_error ());     
   $msgCount = $conn->query("SELECT *, COUNT(*) as totalMsg FROM tbl_messages")->fetch_array();

    while ($row = $query->fetch_array()){ 
      
      if ($msgCount['totalMsg'] >= 1) {
            $message = $msgCount['totalMsg'];
      }else{
            $message = $msgCount['0'];
      }

   ?>
<?php }?>
<ul class="nav navbar-top-links navbar-right">       
    <li class="dropdown">
        <p style = "color: white">
          <button style="border: none; background-color: transparent;" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i class="fa fa-envelope"></i><span style="color: blue; position: absolute; top: -0.2em; left: 1.5%; font-weight: bold;"><?php echo $message ?></span></button>  |  
          <i class="fa fa-user"></i> | Hello! <?php echo $user_username = $user_row['firstname'];?> | </p>
      
    </li>

</ul>

<div class="sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse" style="margin-top: 0; text-align: left; ">
          <div class="sidebar-nav navbar-collapse">
            <div class="home-logo">
              <center>
              <img src="logo/scclogo.png"  style="width: 7pc; cursor:pointer;">
              </center>
            </div>
        <ul class="nav" id="side-menu">
            <li><a href="new_dashboard.php?page=Dashboard"><i class="fa fa-home fa-home"></i>Home</a></li>			
            <li><a href="new_canvassing.php?page=canvassingReports"><i class="fa fa-download fa-fw"></i>Election Reports</a></li>
            <li><a href="user.php?page=usersAccount"><i class="fa fa-user fa-fw"></i>Account</a></li>
            <li><a href="archives_candidate.php?page=archives"><i class="fa fa-user fa-archive"></i>Archives</a></li>
            <li><a href="Candidates_realtime.php?page=Realtime-Vote"><i class="fa fa-bar-chart-o" aria-hidden="true"></i>Realtime Vote</a></li>
            <li><a href="Candidate_pres.php?page=Registered"><i class="fa fa-users fa-fw"></i>Candidates</a></li>
            <li><a href="login_times.php?page=logs"><i class="fa fa-history fa-fw"></i>Activity logs</a></li>
            <li><a href="backup_index.php?page=backupDatabase"><i class="fa fa-hdd-o fas-fw"></i>Back-up</a></li>          
            <li><a href="" data-toggle="modal" data-target="#exampleModalCenter"> <i class = "fa fa-sign-out" ></i>Logout</a></li> 
          
           <!--    <div class="closeMenu"><i class="fa fa-times"></i></div> -->
        </ul>

         </nav>
    </div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <center>
        Are you sure you want to logout?
        </center>
      </div>
      <div class="modal-footer">
        <a href="logout.php" type="button" class="btn btn-danger">Yes</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

<!-- modal contace admin -->


<div id="id01" class="modal">
  <div class="modal-content animate" style="  top:0.9em;
    background-color:white;
    margin: 4% auto 14% auto; /* 5% from the top, 15% from the bottom and centered */
    left: 730px;
    width: 15%;
    max-height: 100%;
    height: 30%; -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s;overflow: auto;">
        <h3 style="padding-bottom: 0; display: flex; justify-content: center;">Message Inbox</h3>
<!--   <form action="action_page.php" method="post" enctype="multipart/form-data"> -->
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal" style=" position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;">&times;</span>
    </div>

    <div class="messageContent" style="padding-top: 2em; margin: 1em;">
  <?php require '../dbconnector/dbcon.php';
   $query1 = $conn->query("SELECT * from tbl_messages ")or die (mysql_error ());       
    while ($row = $query1->fetch_array()){ 

   ?>
      <h5 style="color: black; margin-top: 1px;
    margin-bottom: 0px;">
        <i class="fa fa-user"></i> <?php echo $row['v_name'] ?>
      </h5>
     <!--  <p style="color: black;"><i class="fa fa-envelope"></i> <?php echo $row['v_message'] ?> -->

      </p>
      <?php }?>


      <i><a href="inbox_message.php?page=Inbox" style="text-decoration: none;">View all messages</a></i> 
    </div>
  </div>

</div>

<?php





?>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
