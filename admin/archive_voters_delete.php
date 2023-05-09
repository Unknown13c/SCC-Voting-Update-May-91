<?php
include ('session.php');
// require_once '../dbconnector/dbcon.php';
	
	if(isset($_GET['voters_id'])){
	$voters_id = $_GET['voters_id'];
	$voter = "DELETE FROM voters WHERE voters_id = '$voters_id'";
	// $voter = "UPDATE voters SET status1 = 'delete' WHERE voters_id = '$voters_id'";
	$results = $conn->query($voter);
	$conn->query("INSERT INTO tbl_activitylogs(username, action) values ('$_SESSION[username]','Voters deleted')")or die($conn->error);
	header('location: archive_voters.php?error=votersDeleted');
	exit();

	}



?>