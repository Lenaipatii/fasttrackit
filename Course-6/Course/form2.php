<html>
<head>
	<title>Course 6 </title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<form id = "form2" name = "form2" method = "POST" action = "post.php">
		<input type="text" name="firstname" value = " Your name is:">
		<br><br>
		<label for = "option"> Option form: </label>
		<select id = "method" name = "option">
		    <option value="post">POST</option>
		  	<option value="get">GET</option>
		</select>
		<br><br>
		<input type="submit" name = " Submit " value="Send">

	</form>

</body>
</html>