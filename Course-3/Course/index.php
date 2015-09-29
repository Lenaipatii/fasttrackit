<html>
<head>
	<title>PHP Course</title>
</head>
<body>
<h1> PHP COURSE 3 </h1><hr>
<h2> I. PHP Course Conditional - Booleans </h2>

<?php
print "Hello World <br>";
?>

<h3> Exemple 1.</h3>

<?php

//true(1); 
//false(2);
//&true_value = 1;
//$true_value = true;
//&false_value = 0;
//$false_value = false;

$true_value = true;

	if ($true_value){
		print "That's true <br>";//exemplul 1 verifica daca valoarea true este egala cu 1;
	}
?>

<h3> Exemple 2.</h3>
<p>Negation can be accomplished by adding "!" before the test:</p>

<?php
$true_value = true;

	if (!$true_value){
		print "That's not true <br>";//exemplul 2 verifica daca valoarea true nu este egala cu 1;
	}
?>

<br>

<?php
$true_value = " ";

	if ($true_value){
		print "That's not true. <br>";// check if the variable has vaalue ( is empty)
	}
?>

<?php
$true_value = "1";

	if ($true_value){
		print "That's true. <br>";// check if the variable has value (is not empty)
	}
?>

<h3> Exemple 3.</h3> 

<?php
$user_name = "authentic";

	if ($user_name == "authentic"){
		print "You are allowed to see this. <br>";//check if the variable $user_name has a value (string), and print the message
	}
?>

<?php
$grade1 = "7";
$grade2 = "3";
$sum = $grade1 + $grade2;

	if ($sum == 10){
		print "Congratulations! The sum is 10. <br>";//verify if the sum is 10, and dispaly the message.
	}
?>

<h3> Exemple 4.</h3>

<?php
$user_name = "authentic";

	if ($user_name == "Not_authentic"){
		print "You are allowed to see this. <br>";
	}
	else {
		print "You are not allowed to see this. <br>";//verify if the variable is equal with the value,and print a message,if the variable it's not equal with the variable, the program will print the second message
	}
?>

<?php
$grade1 = "5";
$grade2 = "3";
$sum = $grade1 + $grade2;

	if ($sum == 10){
		print "Congratulations! The sum is 10. <br>";
	}
	else{
		print "You could've done better. <br> ";
	}
?>

<h3> Exercise 5.</h3>

<?php
$user_name = "master";

	if ($user_name == "authentic"){
		print "You are allowed to see this";
	}
	else if ($user_name == "master"){
		print "Master is always allowed to see this";
	} 
	else {
		print "You are not allowed to see this";
	}
?>
 
<br>

<?php
$grade1 = "6";
$grade2 = "3";
$sum = $grade1 + $grade2;

	if ($sum == 10){
		print "Congratulations! The sum is 10. <br>";
	}
	else if ($sum == 9){
		print "Still Good! The sum is 9. <br> ";
	}
	else {
		print "You could've done better.<br> ";
	}
?>

<h3> Exercise 6. </h3>

<?php
$shoes_color = "Blue";

	if ($shoes_color == "Blue"){
		$shirt_color = "Green";
	}
	else if ($shoes_color == "Yellow"){ //problem with statement IF..ELSE IF 
		$shirt_color = "Red";
	}
	else if ($shoes_color == "Black"){
		$shirt_color = "White";
	}
	else if ($shoes_color == "Pink"){
		$shirt_color = "Grey";
	}
	print " The color of shoes are $shirt_color";
?>

<br>

<?php
$shoes_color = "yellow";////problem with statement SWICH....CASE

	switch ($shoes_color){
		case 'blue': $short_color="Green";
		break;
		case 'yellow': $short_color="Red";
		break;
		case 'black': $short_color="wWite";
		break;
		case 'green': $short_color="Pink";
		break;
		default: $short_color = "Grey";
		break;
	}
	print "The color of short is $short_color";
?>

<br>
<h3> Exercise 7. </h3>

<?php
$number = 3; // verify if the variables are the same
$text = "3";

	if ($number == $text){
		print "The variables are the Same";
	}
	else {
		print "The variables are the Not the same ";
	}
?>
<br>
<?php
$number = 3;// verify if the variables are the same
$text = "3";

	if ($number === $text){
		print "The variables are the Same";
	}
	else {
		print "The variables are the Not the same ";
	}
?>

<br>
<h3> Exercise 8. </h3>

<?php
	$contenstant_one = "true";
	$contenstant_two = "true";

	if ($contenstant_one AND $contenstant_one){
		print ("Both cant'n win");
	}
	else {
		print ("Only one winner!");
	}
?>
<br>
<?php
	$contenstant_one = "true";
	$contenstant_two = "true";

	if ($contenstant_one && $contenstant_one){
		print ("Both cant'n win");
	}
	else {
		print ("Only one winner!");
	}
?>
<br>
<?php
	$contenstant_one = "true";
	$contenstant_two = "false";

	if ($contenstant_one && $contenstant_one){
		print ("Both cant'n win");
	}
	else {
		print ("Only one winner!");
	}
?>
<br>
<?php
	$contenstant_one = "true";
	$contenstant_two = "false";

	if ($contenstant_one || $contenstant_one){
		print ("Both cant'n win");
	}
	else {
		print ("Only one winner!");
	}
?>
<br>
<h3> Exercise 9. </h3>
<p>Compute the following using appropiate conditional logic and statements. <br></p>
<?php
	$age_maria = "20";
	$age_ana = "25";
	$age_vlad = "17";
	$age_ionescu = "25";
	$age_george = "30"; 

//comparam varsta mariei cu cea a anei
	if ($age_maria < $age_ana) {
		print "Maria este mai mica decat Ana";
	}
	else {
		print "Maria este mai mare decat Ana";
	}
	print "<br>";

//comparam varsta lui ionescu cu a anei
	if ($age_ionescu < $age_ana) {
		print "Ionescu este mai mic decat Ana";
	}
	else if($age_ionescu == $age_ana){ 
		print "Ana si Ionescu au aceleasi varste!";//poate au aceleasi varste??
	}
	else{
		print "Ionescu este mai mare decat Ana";
	}
print "<br>";

//comparam varsta lui george cu cea a lui vlad
	if ($age_george < $age_vlad) {
		print "George este mai mic decat Vlad";
	} 
	else {
		print "George este mai mare decat Vlad";
	}
?>
<br>
<h3> Exercise 10. </h3>

<?php
$a = true;
$b = false;
$c = 1;
$d = 0;

//not($a) and $b ";
	var_dump(!$a && $b);//trebuie sa afiseze booleana false
	
	if  (!$a && $b == false){
		print "TRUE";
	}
	else {
		print "FALSE";
	}
	print "<br>";

// $a OR $b
	var_dump($a || $b);//trebuie sa afiseze booleana true
	
	if  ($a || $b == true){
		print "TRUE";
	}
	else {
		print "FALSE";
	}
	print "<br>";

// not($a or $b)
	var_dump (!$a || !$b);//trebuie sa afiseze booleana true
	
	if  (!$a || !$b == true){
		print "TRUE";
	}
	else {
		print "FALSE";
	}
	print "<br>";

// $a == $c
	var_dump ($a == $c);//trebuie sa afiseze booleana true
	
	if  ($a == $c){
		print "TRUE";
	}
	else {
		print "FALSE";
	}
	print "<br>";

// $a === $c
	var_dump ($a === $c);//trebuie sa afiseze booleana false
	
	if  ($a === $c){
		print "TRUE";
	}
	else {
		print "FALSE";
	}
	print "<br>";

// $a and $c or $d
	var_dump ($a && $c || $d);//trebuie sa afiseze booleana true
	
	if  ($a && $c || $d){
		print "TRUE";
	}
	else {
		print "FALSE";
	}
	print "<br>";

// not($c) == $b
	var_dump (!$c == $b );//trebuie sa afiseze booleana true
	
	if  (!$c == $b ){
		print "TRUE";
	}
	else {
		print "FALSE";
	}
	print "<br>";

// not($b) === $c
	var_dump (!$b === $c );//trebuie sa afiseze booleana false
	
	if  (!$b === $c){
		print "TRUE";
	}
	else {
		print "FALSE";
	}
	print "<br>";
?>


</body>
</html>


