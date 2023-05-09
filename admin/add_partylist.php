<?php
include 'dbcon.php';
		
		if (isset($_POST['save'])){
				$party=$_POST['party'];
				$year = $_POST['year'];					
				$date = date("Y-m-d H:i:s");

			include 'dbcon.php';
			$query = $conn->query("SELECT * FROM tbl_partylist WHERE party = '$party'");
			$ress = $query->fetch_array();
			if($ress == 0){
				$conn->query("INSERT INTO tbl_partylist(party,year,date) VALUES('$party','$year','$date')");

				$conn->query("INSERT INTO tbl_activitylogs(username, action) values ('$_SESSION[username]','New partylist added')")or die($conn->error);
				header('Location:dashboard.php?error=partylistAdded');
				exit();

			}else{
				
			header('Location:dashboard.php?error=partylistexist');
				exit();
				
			}
		}

		?> 

