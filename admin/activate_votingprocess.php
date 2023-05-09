<?php
include ('session.php');
// require '../dbconnector/dbcon.php';
	
	$voter = "UPDATE voters SET a_status = 'Activated'";
	$results = $conn->query($voter);

	$conn->query("INSERT INTO tbl_activitylogs(username, action) values ('$session_username','Voting Enable')")or die($conn->error);

	header('location:new_dashboard.php?error=votingEnable');
	exit();



?>

