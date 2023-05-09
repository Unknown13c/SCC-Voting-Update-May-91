<?php

	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];	

		require_once 'dbcon.php';
		require_once 'functions.inc.php';	

		if(emptyInputLogin($username, $password) !== false){
			header("Location: ../index.php?error=emptyField");
			exit();
		}

		if(loginUsers($conn, $username, $password)){
			header("Location: ../index.php?error=Wronglogin");
			exit();
		}

		loginUsers($conn, $username, $password);

		// $result = $conn->query("SELECT * FROM tbl_admin WHERE username = '$username' and password = '$password'") or die(mysqli_errno());
		// $row = $result->fetch_array();
		// if(!$row){
		// 	header("Location: ../index.php?error=Wronglogin");
		// 	exit();
		// }
		// if ($row > 0){
		// $conn->query("INSERT INTO tbl_activitylogs (username, action) VALUES ('$username', 'Admin login')");

		// session_start();
		// $_SESSION['username'] = $row['username'];
		// $_SESSION['password'] = $row['password'];
		
		// header('location: ../dashboard.php?error=none');
		// exit();
		// }else{
		// header("Location: index.php?error=Youmustentercredentials");
		// exit();
		// }
		
	}else{
		header("Location: index.php");
		exit();
	}



?>
