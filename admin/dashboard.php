

<?php include ('head.php');
?>
    <body>
        <div id="wrapper">

            <?php include ('side_bar.php');?>

    <div id="page-wrapper">
    	
        <div class="row">
           
    		<?php 
    			$count =   $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE  status1=''")->fetch_array();
    			$count1 =  $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Voted' and status1=''")->fetch_array();
    			$count2 =  $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Unvoted' and status1=''")->fetch_array();
                $count3 =  $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `gender` = 'Male' ")->fetch_array();
                $count4 =  $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `gender` = 'Female'")->fetch_array();
                $count5 =  $conn->query("SELECT COUNT(*) as total FROM `tbl_candidate` WHERE `status` = 'pending'")->fetch_array();
                $count6 =  $conn->query("SELECT COUNT(*) as total FROM `tbl_candidate` WHERE `status` = 'approved'")->fetch_array();
    		?>
            <br>
        <div class="dashboard">
    		<div class="dash">
        		<a href="voters.php?page=allVoters" <i class = "fa-duotone fa fa-users"></i> All Voters (<?php echo $count['total']?>)</a>
        		</div>
        	<div class="dash">
                <a href="voted.php?page=Voted"  <i class = "fa-duotone fa fa-user"></i>Voted(<?php echo $count1['total']?>)</a> 
                </div>
                <div class="dash">
                <a href="unvoted.php?page=Unvoted" <i class = "fa fa-paw"></i>Unvoted(<?php echo $count2['total']?>)</a>
                </div>

            <div class="dash">
                <div class="dropdown">
                  <a class="dropbtn"><i class="fa fa-paw"></i>Departments(7)</a>
                  <div class="dropdown-content">
                    <a href="departments/bsit.php?page=bsitDept">BSIT</a>
                    <a href="departments/bsed.php?page=bsedDept">BSED</a>
                    <a href="departments/beed.php?page=beedDept">BeED</a>
                    <a href="departments/bshm.php?page=bshmDept">BSHM</a>
                    <a href="departments/bstm.php?page=bstmDept">BSTM</a>
                    <a href="departments/bsba.php?page=bsbaDept">BSBA</a>                    
                    <a href="departments/bscrim.php?page=bscrimDept">BSCRIM</a>
                  </div>
                </div>
            </div>

            <div class="dash">
                <a href="candidate.php?page=pendingRequest"<i class = "fa-duotone fa fa-users"></i> Candidates Request(<?php echo $count5['total']?>)</a>
            </div>
            <div class="dash">
                <a href="approvecandidatelist.php?page=approvedRequest" <i class = "fa-duotone fa fa-thumbs-up"></i> Approved Candidates(<?php echo $count6['total']?>)</a>
            </div>
            <div class="dash">
                <a href="voters_candidate_tracer.php?page=data"<i class = "fa fa-database"></i> Data's</a>
            </div>
        </div>


    	</div>
    <div>
        <div class="container-partylist">        
            <div class="add-election-year">
                <a href="" id="btn-party" class="btn btn-info" data-toggle="modal" data-target="#partylistModal"><i class="fa fa-plus"> Add PartyList</i></a>

                <?php
                    include_once('add_partylist_modal.php');
                ?> 
                <a href="" id="btn-party" class="btn btn-info" data-toggle="modal" data-target="#email_message"><i class="fa fa-envelope"> Notify Voters </i></a>
                <?php
                    include_once('notify_voters_email.php');
                ?>
                   <a href="" id="btn-party" class="btn btn-success" data-toggle="modal" data-target="#VotingProcess"><i class="fa fa"> Start Voting </i></a>

                <?php
                    include_once('activate_voting_process_modal.php');
                ?>
 
                <a href="" id="btn-party" class="btn btn-danger" data-toggle="modal" data-target="#processDisable"><i class="fa fa-toggle-off">Stop Voting </i></a>
                <?php
                    include_once('disable_process_modal.php');
                ?>   


            </div>
        </div>
    </div>
<br>
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "NoInternet"){
            echo "<p style='color: red'>*No Internet Connection. Coudn't notify Voters</p>";
        }else if($_GET["error"] == "successfulynotify"){
            echo "<p style='color: green'>*Successfuly notify Voters!</p>";
        }else if($_GET["error"] == "partylistAdded"){
            echo "<p style='color: green'>New party list successfuly added</p>";
        }else if($_GET["error"] == "partylistexist"){
            echo "<p style='color: red'>Party list already exist</p>";
        }else if($_GET["error"] == "remove"){
            echo "<p style='color: red'>Party list successfuly remove</p>";
        }else if($_GET["error"] == "updated"){
            echo "<p style='color: green'>New party list successfuly updated</p>";
        }


    }

    // if (isset($_GET["error"])) {
    //     if($_GET["error"] == "partylistAdded"){
    //         echo "<p style='color: green'>New party list successfuly added</p>";
    //     }else if($_GET["error"] == "partylistexist"){
    //         echo "<p style='color: red'>Party list already exist</p>";
    //     }else if($_GET["error"] == "remove"){
    //         echo "<p style='color: red'>Party list successfuly remove</p>";
    //     }else if($_GET["error"] == "updated"){
    //         echo "<p style='color: green'>New party list successfuly updated</p>";
    //     }
    // }

    ?>     
          <div >
          <?php 
               require '../dbconnector/dbcon.php';
                $bool = false;
                $query = $conn->query("SELECT a_status FROM voters");
                while($close = $query->fetch_array()){
                        $votingclose = $close['a_status'];
                    }
                ?>
            <h4 style="margin: 1em;">Voting is now <?php echo $votingclose; ?></h4>
          </div> 
 &nbsp;

          <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="modal-title" id="myModalLabel">         
                            <div class="panel panel-default">
                                <div class="panel-heading"><i class = "fa fa-users"></i>
                                Name | Partylist
                                </div>    
                             </div>
                        </h4>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                         <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                            <tr>
                                <th>Party Name</th>
                                <!-- <th>Year</th> -->
                                <th style="text-align: center;">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                <?php 
                                    require '../dbconnector/dbcon.php';
                                    $bool = false;
                                $query = $conn->query("SELECT * FROM tbl_partylist");
                                while($row = $query->fetch_array()){
                                $partylist_id = $row['partylist_id'];
                                ?>
                                <td><?php echo $row ['party'];?></td>

                                <td style="text-align: center;"> 
                                    <a id="<?php echo $partylist_id; ?>" href="#delete_partylist<?php echo $partylist_id; ?>"<?php echo $partylist_id?> data-toggle="modal"class="btn btn-danger "><i class="fa fa-trash-o"></i></a>
                                    <?php include ('delete_partylist_modal.php') ?> 

                                    <a id="<?php echo $partylist_id; ?>" href="#editPartylist<?php echo $partylist_id; ?>"<?php echo $partylist_id?> data-toggle="modal"class="btn btn-info "><i class="fa fa-pencil"></i></a>

                                </td>
                                 <?php include ('edit_partylist.php') ?> 
                                </tr>                       
                               <?php } ?>
                            </tbody>
                </table>
        </div>             
    </div>
</div>
</div>

<!-- done -->





<!-- /#wrapper -->
<?php include ('script.php');?>

</body>

</html>

<div class="toast" style="position: absolute; top: 5.5em; right: 10px; z-index: 100;">
    <div class="toast-header">
        <i class="fa fa-wifi"></i>&nbsp;&nbsp;&nbsp;
        <strong class="mr-auto"><span class="text-success">You're online now</span></strong>
    </div>
<!--     <div class="toast-body">
        Hurray! Internet is connected.
    </div> -->
</div>

<script>

var status = 'online';
var current_status = 'online';

function check_internet_connection()
{
    if(navigator.onLine)
    {
        status = 'online';
    }
    else
    {
        status = 'offline';
    }

    if(current_status != status)
    {
        if(status == 'online')
        {
            $('i.bi').addClass('bi-wifi');
            $('i.bi').removeClass('bi-wifi-off');
            $('.mr-auto').html("<span class='text-success'>You are online now</span>");
            // $('.toast-body').text('Hurray! Internet is connected.');
        }
        else
        {
            $('i.bi').addClass('bi-wifi-off');
            $('i.bi').removeClass('bi-wifi');
            $('.mr-auto').html("<span class='text-danger'>You are offline now</span>");
            // $('.toast-body').text('Opps! Internet is disconnected.')
        }

        current_status = status;

        $('.toast').toast({
            autohide:false
        });

        $('.toast').toast('show');
    }
}

check_internet_connection();

setInterval(function(){
    check_internet_connection();
}, 1000);

</script>