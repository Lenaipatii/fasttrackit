<?php
	session_start();
	$_SESSION['name'] = 'Lena';
	//print $_SESSION['name'];
	//unset($SESSION['name']);//delte the session


	if(isset($_GET['name'])){
	($_SESSION['name'] = $_GET['name']);
	}
	
	if(isset($_SESSION['name'])){
		//print $_SESSION['name'];
	}
	print $_SESSION['name'];
?>
