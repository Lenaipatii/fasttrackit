<!DOCTYPE html>
<html>
<head>
	<title>Course 2 PHP- Homework </title>
</head>

<body bgcolor="ffffff" style="margin-left: 5em">

	<h1> I.HomeWork! </h1>

	<?php
		echo '<p>1. Sum of two numbers is 5. What is the mean of two numbers ?</p>';
			
			$sum = 5; //suma a doua numere este 5
			$Average=( $sum ) / 2 ;
		
		echo ("<p>The average of two numbers is: $Average </p>");
	?>

	<br><hr>	

	<?php
		echo '<br> 2. Let X, Y be two numbers. X = 14. Their mean is 11. Find Y ! <br>';
			
			$x = 14;
			$average = 11;
			$y = ( 2 * $average) - $x;

		echo ("<br> The Y is: $y <br> ");
	?>

	<br><hr>	

	<?php 
		echo '<br> 3. My book has 80 pages. Yesterday I read 3 / 4 of it. Today I read 1 / 5 of the remaining. How many pages do I still have to read ? <br>';
		$book_pages = 80;
		define ("READ1", 0.75);
		define ("READ2", 0.20);
		$yesterday_read = READ1 * $book_pages;
		$remaining_pages = $book_pages - $yesterday_read; 
		$today_read = READ2 * $remaining_pages;
		$total_read = $yesterday_read + $today_read;
		$still_have = $book_pages - $total_read;

		echo "<br> I still have to read $still_have pages . <br> ";
	?>

	<br><hr>

	<?php
		echo '<br> 4. I am thinking of a number X, devide it by 7, to the result I add 4 and then multiply everything by 8. After that I substract 12, obtaining the final result 60. Find value X ! <br>';
		$seven = 7;
		$four = 4;
		$eight = 8;
		$twelve = 12;
		$result = 60;

		// $x = 7*((60+12)/8-4); ==> Varianta 1
		$x = $seven * (($result + $twelve) / $eight - $four );

		echo "<br> The X value is $x <br> " ;

	?>	

	<br><hr>

	<?php
		echo '<br> 5. Let the equation be: 300 - [ 27 + 542 * ( 35 - 7 * X) + 13 ] * 5 - 99 = 1 . Find value X ! <br>'; 

		$x = (((1 + 99 - 300)/5 + 13 + 27)/542 - 35)/(-7);

		echo "<br> The X value is $x <br> ";

	?>

	<br><hr>

	<?php

		echo '<br> Sum of 4 consecutive numbers is 50 . Find the numbers ! <br>';

		$sum = 50;
		$nr_consecutive = 4;
		
		$x = ($sum - 1 - 2 - 3)/ $nr_consecutive;
		$x1 = $x + 1;
		$x2 = $x + 2;
		$x3 = $x + 3;

		//echo "<br> The numbers are: $x, $x + 1, $x + 2, $x + 3 ; <br>";
		echo "<br> The numbers are: $x " . " $x1" . " $x2" . " $x3"; 
	?>

	<br><hr>

	<?php
		echo "<br> The diference between the dad's age and son's age is 25. Knowing that the dad is 6 times older the son, find out their age. <br>";

		$son = 25/5;
		$dad = 6*$son;

		echo "<br> The son has $son years and his father has $dad years ; <br> ";
	?>

	<br><hr>
	<br>
	<br>

</body>
</html>