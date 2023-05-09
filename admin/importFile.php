
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
								<div class="panel	">
									<div class="panel-heading">
										<i class="fa fa-file"></i> Import CSV File
									</div>    
								</div>
							</h4>
							<div class="panel-body">
                            <div class="table-responsive">
		                        <div class="span6" id="form-login">
									<form class="form-horizontal well" action="import.php" method="post" name="upload_excel" enctype="multipart/form-data">
										<fieldset>
											<?php
												if(isset($_GET['error'])){
													if($_GET['error']=="uploaded"){
														 echo "<p style='color: red'>File Successfuly Upload</p>";
														}elseif($_GET['error']=="fileInvalid"){
														 echo "<p style='color: red'>File contain many exist id's</p>";
														}elseif ($_GET['error'] == "UploadFile") {
														 echo "<p style='color: red'>Please Select File</p>";
														}
												}
											?>
											<div class="control-group">
												<div class="controls">
													<input type="hidden" name="voters_id" value="<?php echo $firstname ?>">
													<input type="file" multiple name="filename" id="file" class="input-large" >
												</div>
											</div>
											<br/>	
											<div class="control-group">
												<div class="controls">
													<button type="submit" id="submit" name="submit" class="btn btn-primary button-loading" data-loading-text="Loading..."><i class="fa fa-upload"></i> Upload</button>
												</div>
											</div>
										</fieldset>
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

