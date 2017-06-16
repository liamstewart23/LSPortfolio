<?php 
	//Set up connection creds
	$user = "root";
	$password = ""; //PC
	//$password = "root"; //MAC
	$url = "localhost";
	//$db = "db_lsportfolio"; //MAC
	$db = "db_LSPortfolio"; //PC
	//Everything below does not need to change
	$link = mysqli_connect($url, $user, $password, $db); //PC VERSION
	//$link = mysqli_connect($url, $user, $password, $db, "8889"); //MAC VERSION
	//Check Connection
	if(mysqli_connect_errno()) {
		printf("Connection failed: %\n", mysqli_connect_error());
		exit();
	}	
?>