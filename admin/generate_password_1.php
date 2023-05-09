<?php
	require '../dbconnector/dbcon.php';
	function passFunc($len, $set = "")
		{
			$gen = "";
			for($i = 0; $i < $len; $i++)
				{
					$set = str_shuffle($set);
					$gen.= $set[0]; 
				}
			return $gen;
		}
		
		$voters = $_GET['voters_id'];		
		$change =  passFunc(8, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890');	
		$conn->query("UPDATE voters SET password = '$change' WHERE voters_id = '$voters'");
	
	header("location:voters.php");
?>