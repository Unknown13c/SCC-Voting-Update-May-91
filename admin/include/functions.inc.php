<?php

// =====================function for system user login area=========================

function emptyInputLogin($username, $password){
	$result;
	if (empty($username) || empty($password)) {
		$result = true;
	}else{
		$result = false;
	}

	return $result;
}

function loginUsers($conn, $username, $password){
		$result = $conn->query("SELECT * FROM tbl_admin WHERE username = '$username' and password = '$password'") or die(mysqli_errno());
		$row = $result->fetch_array();
		if(!$row){
			header("Location: ../index.php?error=Wronglogin");
			exit();
		}
		if ($row > 0){
		$conn->query("INSERT INTO tbl_activitylogs (username, action) VALUES ('$username', 'login')");

		session_start();
		$_SESSION['username'] = $row['username'];
		$_SESSION['password'] = $row['password'];
		
		header('location: ../new_dashboard.php?error=none');
		exit();
		}else{
		header("Location: index.php?error=Youmustentercredentials");
		exit();
		}



}

function emptyInput($currentpass, $newpass, $newpass1){
	$result;
	if(empty($currentpass) || empty($newpass) || empty($newpass1)){
		$result = true;

	}else{
		$result = false;
	}

	return $result;
}


