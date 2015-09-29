<html>
<head>
	<title>Course 6 </title>
</head>
<body>
	<h1>PHP course 6 </h1>
	<p><b>1. HTML - Form Method </b></p>
	<p>$_GET</p>
	<form name = "form1" method = "get" action = "">
		<input type = "Text" Name = "Text1" value = "Username">
		<input type = "Submit" Name = "Submit1" value = "Login">
	</form>
	<p>$_POST</p>
	<form name = "form1" method = "post" action = "">
		<input type = "Text" Name = "Text1" value = "Username">
		<input type = "Submit" Name = "Submit1" value = "Login">
	</form>
	<p><b>2. HTML - Form Action </b></p>

	<form name = "form1" method = "POST" action = "output.php">
		<label for = "text"> Hello! My name is: </label>
		<input type = "Text" Name = "username" value = "Your name is: ">
		<input type = "Submit" Name = "login" value = "Login">
		<br><br>
		<textarea rows="5" cols="50" name = "addText">Add comment: </textarea>
		<br><br>
		<label for = "option"> Option: </label>
		<select name = "option">
		    <option value="yes">Yes</option>
		  	<option value="no">No</option>
		  	<option value="maybe">Maybe</option> 
		</select>
		<br><br>
		<input type="submit" id = "addText" value="Submit">
	</form>
	<?php
		if (isset($_GET['username'])){print $_GET['username'];};
		
	?>

</body>
</html>