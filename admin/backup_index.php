<?php include ('head.php');?>

<body>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row"><br><br>
                <div class="col-lg-12"></div>
                  <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="modal-title" id="myModalLabel">         
                <div class="panel ">
                  <div class="panel-heading">
                   <h3> <i class="fa fa-database"></i> Database Property</h3>
                  </div>    
                </div>
              </h4>
              <div class="panel-body">
                            <div class="table-responsive">
                            <div class="span6" id="form-login">
								<form action="database_backup.php" method="post" id="">
									<div class="form-group">
										<label class="control-label mb-10" >Host</label>
										<input type="text" class="form-control" Value="Localhost" name="server" id="server" required="" readonly autocomplete="on">
									</div>
									<div class="form-group">
										<label class="control-label mb-10" >Database Username</label>
										<input type="text" class="form-control" value="root" name="username" id="username" required="" readonly autocomplete="on">
									</div>
									<!-- <div class="form-group">
										<label class="pull-left control-label mb-10" >Database Password</label>
										<input type="password" class="form-control" placeholder="Enter Database Password" name="password" id="password" >
									</div> -->
									<div class="form-group">
										<label class="pull-left control-label mb-10">Database Name</label>
										<input type="text" class="form-control" value="scc_votingsystem" name="dbname" id="dbname" required="" readonly autocomplete="on">
									</div>
									<div class="form-group text-center">
										<button type="submit" name="backupnow" class="btn btn-info pull-left">Initiate Backup</button>
									</div>
								</form> 
       
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include ('script.php');?>

</body>

</html>

