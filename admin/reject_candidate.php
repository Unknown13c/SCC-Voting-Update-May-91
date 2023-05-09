<?php
	require '../dbconnector/dbcon.php';
	include('session.php');

	if(isset($_GET['candidate_id'])){
	$candidate_id = $_GET['candidate_id'];
	$candidate = "UPDATE tbl_candidate SET status = 'delete' WHERE candidate_id = '$candidate_id'";
	$results = $conn->query($candidate);
	$conn->query("INSERT INTO tbl_activitylogs(username, action) values ('$_SESSION[username]','Rejected candidate')")or die($conn->error);
	
	// require ('rejectmail/reject_email.php');

	header('location:candidate.php?error=Rejected');
	exit();

	}



?>
