<?php
include 'dbconnector/dbcon.php';
session_start();
session_destroy();

header('location: index.php'); 

?>