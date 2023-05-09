<?php
	require_once '../dbconnector/dbcon.php';
	require_once 'session.php';
	if (isset($_GET['partylist_id'])) {
	$partylist_id = $_GET['partylist_id'];
	$sql = "DELETE FROM `tbl_partylist` WHERE `partylist_id`= '$partylist_id'";
	$conn->query("INSERT INTO tbl_activitylogs(username, action) values ('$_SESSION[username]','Deleted partylist')")or die($conn->error);
	$result = $conn->query($sql);
	header("Location: dashboard.php?error=remove");
	
}
?>