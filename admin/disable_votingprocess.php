<?php
include ('session.php');
require '../dbconnector/dbcon.php';
include_once '../sess.php';
if (isset($_GET['voters_id'])){
	$voters_id = $_GET['voters_id'];
}
	// $voter = "DELETE FROM voters WHERE voters_id = '$voters_id'";
	session_start();
	unset($_SESSION['voters_id']);
	session_start();
	
	$voter = "UPDATE voters SET a_status = 'Deactivated'";
	$results = $conn->query($voter);
	$conn->query("INSERT INTO tbl_activitylogs(username, action) values ('$_SESSION[username]','Voting Disable')")or die($conn->error);
	header('location: new_dashboard.php?error=votingDisable');
	exit();


?>

