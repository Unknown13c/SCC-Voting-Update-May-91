<?php
	require_once '../dbconnector/dbcon.php';
	if($_GET['candidate_id']){

	$candidate_id=$_GET['candidate_id'];
	$sql = "UPDATE`tbl_candidate` SET status = 'deletecandidate' WHERE `candidate_id`= '$candidate_id'";
	$result = $conn->query($sql);
	$sql = $conn->query("SELECT * FROM tbl_activitylogs");
	$result = $sql->fetch_assoc();
	$conn->query("INSERT INTO tbl_activitylogs(username, action) values ('$result[username]','Candidate Delete')")or die($conn->error);
	header('location:approvecandidatelist.php?error=delete');
}
?>


