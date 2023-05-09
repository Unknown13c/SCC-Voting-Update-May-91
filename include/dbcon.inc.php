<?php


$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "scc_votingsystem";

try{
	$conn = new PDO("mysql:host=$servername; dbname=$dbname", $dbUsername, $dbPassword);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo "Connection Failed".$e->getMessage();
}
?>