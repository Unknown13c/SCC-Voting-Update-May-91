
<?php

// include '../dbconnector/dbcon.php';
include('session.php');
$conn->query("INSERT INTO tbl_activitylogs(username, action) values ('$_SESSION[username]','logout')")or die($conn->error);
	session_start();
	session_destroy();
	
	header('location: index.php');
	exit();
	
?>

