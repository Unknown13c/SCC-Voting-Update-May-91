<?php
	require_once '../dbconnector/dbcon.php';
	if(isset($_GET['candidate_id'])){
			$candidate_id=$_GET['candidate_id'];
			$conn->query("DELETE FROM candidate WHERE candidate_id='$candidate_id'") or die($conn->error);

			$sql = $conn->query("SELECT * FROM logins");
			$result = $sql->fetch_assoc();
			$conn->query("INSERT INTO tbl_activitylogs(username, action) values ('$result[username]','Candidate Deleted')")or die($conn->error);
			header('location:candidate.php?error=delete');
	}

?>