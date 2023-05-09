

<?php
require_once '../dbconnector/dbcon.php';
	
	if(isset($_GET['user_id'])){
	$user_id = $_GET['user_id'];
	$users = "DELETE FROM tbl_admin WHERE user_id = '$user_id'";
	$results = $conn->query($users);
	header('location: user.php');
	exit();

	}
?>