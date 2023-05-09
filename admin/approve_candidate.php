<?php
	// require_once '../dbconnector/dbcon.php';
	require_once 'session.php';

	$candidate_id=$_GET['candidate_id'];

	$query = "UPDATE tbl_candidate SET status='approved' WHERE candidate_id = '$candidate_id'";
	$result = mysqli_query($conn, $query);

	$conn->query("INSERT INTO tbl_activitylogs(username, action) values ('$_SESSION[username]','Approved')")or die($conn->error);
	// require ('sendmail/approve_email.php');

	header('location: candidate.php?error=successfulyapproved');
?>
