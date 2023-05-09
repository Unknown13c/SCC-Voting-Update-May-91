<?php

// function for candidate registration area

function emptyImage($image,$image_grade){
	$result;
	if(empty($image)){
		$result = true;
	}else{
		$result = false;
	}

	return $result;
}

function emptyInput($platform,$image, $position,$partylist_id,$firstname,$lastname, $email, $department, $year_level, $gender,$image_grade){
$result;
if(empty($platform) || empty($image) || empty($position) || empty($partylist_id)|| empty($firstname) || empty($lastname) || empty($email) || empty($department) || empty($year_level) || empty($gender) || empty($image_grade)){
	$result = true;
}else{
	$result = false;
}
 return $result;

}

function emailExist($conn, $email){
	$stmt = $conn->prepare("SELECT * FROM tbl_candidate WHERE email = :email");
	$stmt->bindParam(':email', $email);
	$stmt->execute();

	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

	if(!$data){
		$result = false;

	}else{
		$result = true;
	}
	return $result;
}



function invalidEmail($email) {
	$result;
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$result = true;
	}else{
		$result = false;
	}

	return $result;
}

// function createUser($conn, $position, $partylist_id, $firstname, $lastname, $email, $department, $year_level,$gender){

// 	$stmt = $conn->prepare("INSERT INTO candidate (position, partylist_id, firstname, lastname, email, department, year_level, gender, status) VALUES (:position, :partylist_id, :firstname, :lastname, :email, :department, :year_level, :gender, 'pending')");

// 	// $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

// 	$stmt->bindValue(':position', $position);
// 	$stmt->bindValue(':partylist_id', $partylist_id);
// 	$stmt->bindValue(':firstname', $firstname);
// 	$stmt->bindValue(':lastname', $lastname);
// 	$stmt->bindValue(':email', $email);
// 	$stmt->bindValue(':department', $department);
// 	$stmt->bindValue(':year_level', $year_level);
// 	$stmt->bindValue(':gender', $gender);

// 	$result = $stmt->execute();
// 	header("Location: ../registercandidate.php?error=none");
// 	exit();
// }



// =====================function for voters login area=========================







