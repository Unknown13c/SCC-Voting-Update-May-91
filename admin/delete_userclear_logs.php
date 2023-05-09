<?php
require_once '../dbconnector/dbcon.php';
	$logs = "DELETE FROM tbl_activitylogs";
	$results = $conn->query($logs);
	header('location: login_times.php?error=emptyLogs');
	exit();

	
?>