<!--
	http://php.net/manual/en/features.file-upload.errors.php==> validation error codes
	http://www.w3schools.com/tags/att_form_enctype.asp==> enctype attribut
	http://www.freeformatter.com/mime-types-list.html ==? validation type file
-->
<?php
	mysql_connect('localhost', 'root', '') or die (mysql_error());
	mysql_select_db('fasttrackit') or die (mysql_error());

	mysql_query('create table Files(
		ID int NOT NULL auto_increment,
		filename varchar(200) NOT NULL,
		location varchar(500) NOT NULL,
		PRIMARY KEY (ID));
		');

	print "<pre>";
	var_dump($_POST);
	print "<br/>";
	var_dump($_FILES);
	print "</pre>";

	/*
	//example validation error codes
	if ($_FILES['filePhoto']['error'] == UPLOAD_ERR_OK){
		$error ='There is no error, the file uploaded with success.';
	}
	//example with the validation file type
	if (($_FILES['filePhoto']['type'] !='image/gif') && ($_FILES['filePhoto']['type'] !='image/jpg')){
		$error ='You are only allowed to upload gif and jpg images';
		print $error;
	}
	//validation extension
	$path_parts = pathinfo ($_FILES['filePhoto']['type']);
	print "<pre>";
	var_dump($path_parts);
	print "</pre>";
	*/

	$errors = null;

	if ($_FILES['filePhoto']['error'] > 0){
		//$errors[] ='Sorry, there was an error in uploading the file';
	}
	if ($_FILES['filePhoto']['type'] != 'image/gif'){
		// $errors[] ='Only .gif files are allowed';
	}
	if ($_FILES['filePhoto']['size'] > 51200){//bigger than 50KB
		// $errors[] ='File size should be less than 50KB';
	}

	if (!$errors){
		print "Your file is ready for upload!";

		$ok = move_uploaded_file($_FILES['filePhoto']['tmp_name'],
			'D:/htdocs/fasttrackit_php/lena/Course-8/images/' . $_FILES['filePhoto']['name']);
	}

		//insert the file name and the location of this file
		$filename = $_FILES['filePhoto']['name'];
		$location = 'images/' . $_FILES['filePhoto']['name'];

		if($ok) {
			mysql_query("INSERT INTO files(
				filename, location) 
				VALUES ('$filename', '$location' )");
				}		

		else {
			print implode("</br>",$errors);
		}
?>

