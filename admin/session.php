<?php
	require '../dbconnector/dbcon.php';
	session_start();
		if(!isset($_SESSION['username']) || (trim($_SESSION['username'])=='')){ ?>
		<script>
			window.location = "index.php";
		</script>
<?php 
	}
		$session_username=$_SESSION['username'];
		$user_query = $conn->query("SELECT * FROM tbl_admin WHERE username = '$session_username'") or die(mysqli_errno());
		$user_row = $user_query->fetch_array();
		$user_username = $user_row['firstname']." ".$user_row['lastname'];
		$user_id = $user_row['user_id'];
?>