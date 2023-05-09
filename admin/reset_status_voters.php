
<?php
include ('session.php');
require '../dbconnector/dbcon.php';
	
	// $voter = "DELETE FROM voters WHERE voters_id = '$voters_id'";
	$voter = "UPDATE voters SET status = 'Unvoted'";
	$results = $conn->query($voter);
	$conn->query("INSERT INTO tbl_activitylogs(username, action) values ('$_SESSION[username]','Status reset to Unvoted')")or die($conn->error);


	header('location: voters.php?error=statusReset');
	exit();
?>