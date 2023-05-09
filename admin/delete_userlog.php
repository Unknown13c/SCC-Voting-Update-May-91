<?php
require_once '../dbconnector/dbcon.php';
	
	if(isset($_GET['user_id'])){
	$logs_id = $_GET['user_id'];
	$logs = "DELETE FROM tbl_activitylogs WHERE logs_id = '$logs_id'";
	$results = $conn->query($logs);
	header('location: login_times.php');
	exit();

	}
?>