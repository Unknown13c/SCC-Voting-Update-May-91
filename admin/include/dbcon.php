<?php
	$conn = new mysqli('localhost', 'root', '', 'scc_votingsystem');
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>	