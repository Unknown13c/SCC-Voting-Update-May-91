<?php

	include 'dbconnector/dbcon.php';

	if(isset($_POST['login'])){
		$idno=$_POST['idno'];
		$password=$_POST['password'];	
		

		$result = $conn->query("SELECT * FROM voters WHERE id_number = '$idno' and password = '$password' and `status` = 'Unvoted' and a_status='Activated'") or die(mysqli_errno());
		$row = $result->fetch_array();

		$result1 = $conn->query("SELECT * FROM voters WHERE id_number = '$idno' and password = '$password' and `status` = 'Unvoted' and a_status='Deactivated'") or die(mysqli_errno());
		$row1 = $result1->fetch_array();

		$voted = $conn->query("SELECT * FROM `voters` WHERE id_number = '$idno' && password = '$password' && `status` = 'Voted'")->num_rows;

		$numberOfRows = $result->num_rows;

		if ($numberOfRows > 0){
			session_start();
			$_SESSION['voters_id'] = $row['voters_id'];
			header('location: vote.php?error=success');
			exit();
		}

		if ($row1 > 0){
			session_start();
			$_SESSION['voters_id'] = $row1['voters_id'];
			header('location: voteClose.php?error=success');
			exit();
		}

		if($voted == 1){
			header("Location: login.php?error=Voted");
			exit();
		}

		if(!$numberOfRows){
			header("Location: login.php?error=wronglogin");
			exit();
		}
		if (empty($id) || empty($password)) {
			header("Location: login.php?error=emptyInput");
			exit();
		}
		
	}

?>

