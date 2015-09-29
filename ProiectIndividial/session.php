<?php
	include 'connect.php'; 

	// Storing Session
	$user_email = $_SESSION['user_email'];
	// SQL Query To Fetch Complete Information Of User
	$ses_sql=mysqli_query($db,"select email from clienti where email='$user_email'",$db);
	$row = mysqli_fetch_assoc($ses_sql);
	$login_session =$row['email'];
	if(!isset($login_session)){
		mysqli_close($db); // Closing Connection
		header('Location: index.php'); // Redirecting To Home Page
	}
	
?>