<?php
	require_once '../dbconnector/dbcon.php';
	require_once 'session.php';

	$candidate_id=$_GET['candidate_id'];

	$query1 = "UPDATE tbl_candidate SET status = 'pending' WHERE candidate_id = '$candidate_id'";
	$result = mysqli_query($conn, $query1);

	$conn->query("INSERT INTO tbl_activitylogs(username, action) values ('$_SESSION[username]','Restored Candidate')")or die($conn->error);
	// require ('sendmail/approve_email.php');

	header('location: archives_candidate.php?error=successfulyrestored');
?>
