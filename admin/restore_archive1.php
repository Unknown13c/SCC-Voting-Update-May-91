<?php
	require '../dbconnector/dbcon.php';

	$candidate_id=$_GET['candidate_id'];

	$query = "UPDATE tbl_candidate SET status = 'approved' WHERE candidate_id = '$candidate_id'";
	$result = mysqli_query($conn, $query);

	$sql = $conn->query("SELECT * FROM tbl_activitylogs");
	$result = $sql->fetch_assoc();
	$conn->query("INSERT INTO tbl_activitylogs(username, action) values ('$result[username]','Restored candidate')")or die($conn->error);
	// require ('sendmail/approve_email.php');

	header('location: archives_candidate.php?error=successfulyrestored');
?>