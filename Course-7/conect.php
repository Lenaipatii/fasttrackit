<?php
	$server = 'localhost';
	$user = 'root';
	$pass = '';

	$db_conn = mysql_connect ($server, $user, $pass);


	$db_name  = 'fasttrackit';
		if (!(mysql_select_db($db_name, $db_conn))){
			die('Database not found');
		}
	$sql = "
		insert into courses
			(ID,courseName,trainer)
		values 
			('PHP','Web development with PHP','Sam Webby')
	";
	//mysql_query($sql, $db_conn);	

	$ID = 'mySQL';
	$sql = "
		update courses
		set	ID = '$ID'
		where ID ='mySQ'
		
	";

	$sql = "
		select * from courses
		
	";
	$result = mysql_query($sql, $db_conn);
	var_dump ($result);
	print '<br>';

	$courses = array();

	while ($row = mysql_fetch_assoc($result)){
		$courses[] = array(
			'id' => $row ['ID'],
			'name' => $row ['courseName'],
			'trainer' => $row ['trainer'],
			);
	}
		print_r ('<pre>');
		print_r ($courses);
		print_r ('</pre>');

		mysql_close($db_conn);

?>