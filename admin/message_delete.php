<?php
	require_once '../dbconnector/dbcon.php';
	include('session.php');

	if(isset($_GET['message_id'])){
	$message_id = $_GET['message_id'];
	$vMessages = "DELETE FROM tbl_messages WHERE m_id = '$message_id'";
	$results = $conn->query($vMessages);
	$conn->query("INSERT INTO tbl_activitylogs(username, action) values ('$_SESSION[username]','Deleted')")or die($conn->error);
	// require ('rejectmail/approve_email.php');
	header('location:inbox_message.php?error=messageDelete');
	exit();

	}
?>
