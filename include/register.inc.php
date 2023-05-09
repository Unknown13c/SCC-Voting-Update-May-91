<?php

if(isset($_POST["submit"])){

		$platform = $_POST['platform'];
		// new entry
		$position= $_POST["position"];
		$partylist_id= $_POST["partylist_id"];
		$firstname= $_POST["firstname"];
		$lastname= $_POST["lastname"];
		$email = $_POST["email"];
		$department = $_POST["department"];
		$year_level = $_POST["year_level"];
		$gender = $_POST["gender"];
		// $platform = $_POST['platform'];
		$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name= addslashes($_FILES['image']['name']);
		$image_size= getimagesize($_FILES['image']['tmp_name']);

		move_uploaded_file($_FILES["image"]["tmp_name"],"../admin/uploads/" . $_FILES["image"]["name"]);			
		$location="../admin/uploads/" . $_FILES["image"]["name"];

		// $image_grade= addslashes(file_get_contents($_FILES['image_grade']['tmp_name']));
		// $image_name= addslashes($_FILES['image_grade']['name']);
		// $image_size= getimagesize($_FILES['image_grade']['tmp_name']);

		// move_uploaded_file($_FILES["image_grade"]["tmp_name"],"../admin/uploads/" . $_FILES["image_grade"]["name"]);			
		// $location1="../admin/uploads/" . $_FILES["image_grade"]["name"];
		
		

		require_once 'dbcon.inc.php';
		require_once 'functions.inc.php';
		
		// if(emptyImage($image)  !== false){
		// 	header("Location:../registercandidate.php?error=emptyImage");
		// 	exit();
		// }

		// if(emptyInput($platform,$image,$position,$partylist_id,$firstname,$lastname, $email, $department, $year_level, $gender) !== false){
		// 	header("Location: ../registercandidate.php?error=emptyInput");
		// 	exit();
		// }

		if(invalidEmail($email) !== false){
			header("Location: ../registercandidate.php?error=invalidEmail");
			exit();
		}

		if(emailExist($conn, $email)){
			header("Location: ../registercandidate.php?error=emailExist");
			exit();
		}

		$conn->query("INSERT INTO tbl_candidate(platform,position,partylist_id,firstname,lastname,email,department,year_level,gender,img, status)values('$platform','$position','$partylist_id','$firstname','$lastname','$email','$department','$year_level','$gender','$location','pending')")or die($conn->error);

		header("Location: ../registercandidate.php?error=none");

	}else{
	header("Location: ../registercandidate.php");
	exit();
}