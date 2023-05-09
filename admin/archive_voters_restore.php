<?php
	require_once '../dbconnector/dbcon.php';

	$voters_id=$_GET['voters_id'];

	$query = "UPDATE voters SET status1 = '' WHERE voters_id = '$voters_id'";
	$result = mysqli_query($conn, $query);

	$sql = $conn->query("SELECT * FROM tbl_activitylogs");
	$result = $sql->fetch_assoc();
	$conn->query("INSERT INTO tbl_activitylogs(username, action) values ('$result[username]','Restored voters')")or die($conn->error);
	// require ('sendmail/approve_email.php');

	header('location: archives_candidate.php?error=successfulyrestored');