<?php
	// require '../dbconnector/dbcon.php';
	include('session.php');

	if(isset($_GET['candidate_id'])){
	$candidate_id = $_GET['candidate_id'];
	$candidate = "DELETE FROM candidate WHERE candidate_id = '$candidate_id'";
	$results = $conn->query($candidate);
	$conn->query("INSERT INTO tbl_activitylogs(username, action) values ('$_SESSION[username]','Deleted')")or die($conn->error);
	// require ('rejectmail/approve_email.php');
	header('location:archives_candidate.php?error=Rejected');
	exit();

	}
?>
