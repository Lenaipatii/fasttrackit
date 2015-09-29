<html>
<head>
</head>
<body>
<h1>I. Course 4. Loops. Arrays. Some more Loops. Exercises. </h4>
<p><b>1. A sum Problem </b><p>
<p>Calculate the sum of numbers 1 to 3:</p>


<?php

$sum = 1 + 2 + 3;//calculeaza suma numerelor de la 1 la 3;
	print "The sum of 1 + 2 + 3 = $sum ";

?>


<p><b>How about the sum of numbers from 1 to 100 ?</b></p>

<?php
$sum = 0;

	for ($i = 1; $i <= 100; $i++){
		$sum = $sum + $i;
	}

		print "The total of 1 + 2 + 3 +....+ 98 + 99 + 100 = $sum";//calculeaza suma cifrelor de a 1 la 100;

?>

<p><b>2.Real Example </b></p>
<?php

	for ($var = 1; $var <= 11; $var++){  //scriptul afiseaza numere incepind de la 1 pina la 10 (pina la numarul < 11);
		print $var;
		print "<br>";
	}
?>

<p><b>3. Back to our sum problem.</b></p>
<?php
$start = 1;
$end = 3;
$sum = 0;

	for ($i = $start; $i <= $end; $i ++){
		$sum = $sum + $i;
	}
		print "The total will be $sum";// the result will print the sum of (1+2+3)	  
?>

<p><b> How about the sum of numbers from 1 to 1000 ?</b></p>
<p><u>Varianta 1</u></p>
<?php
$sum = 0;

	for ($i = 0; $i <= 1000; $i++){
		$sum = $sum + $i;
	}
		print "The total of 1 + 2 + 3 +....+ 98 + 99 + 1000 = $sum";//calculeaza suma cifrelor de a 1 la 100;
?>

<p><u> Varianta 2 </u></p>
<?php
$start = 1;
$end = 1000;
$sum = 0;

	for ($i = $start; $i <= $end; $i++){
		$sum = $sum + $i;
	}
		print "The total of 1 + 2 + 3 +....+ 98 + 99 + 1000 = $sum";//calculeaza suma cifrelor de a 1 la 100;
?>

<p><b>4. Some Exercises</b></p>
<p><i>4.1.The sum of all even numbers up to 10.</i></p>

<?php
$sum = 0;

	for ($i = 0; $i <= 10; $i += 2){
		/*if ($i%2 == 0)
			$sum = $sum + $i;
		}*/
		$sum = $sum + $i;
	}
		print "The total of 2 + 4 + 6 + 8 + 10 = $sum";//print the sum of all even numbers up to 10

?>

<p><i>4.2.The sum of all even numbers up to 1000.</i></p>

<?php
$sum = 0;

for ($i = 0; $i <= 1000; $i += 2){
	/*if ($i%2==0)
		$sum = $sum + $i;
	}*/
		$sum = $sum + $i;
	}
		print "The total of 2 + 4 + 6 +...+ 998 + 1000 = $sum";//print the sum of all even numbers up to 1000

?>
<p><i>4.3.The sum of add numbers up to 10.</i></p>

<?php
$sum = 0;

	for ($i = 1; $i <= 10; $i += 2){
		/*if ($i%2==1)
			$sum = $sum +$i;
	}*/
		$sum = $sum + $i;
	}
		print "The sum of 1 + 3 + 5 + 7 + 9 = $sum";//print the sum of add numbers up to 10
?>

<p><i>4.4.The sum of add numbers up to 1000.</i></p>

<?php
$sum = 0;

	for ($i = 1; $i <= 1000; $i += 2){
		/*if ($i%2==1)
			$sum = $sum +$i;
	}*/
		$sum = $sum + $i;
	}
		print "The sum of 1 + 3 + 5 + 7 +....+ 997 + 999 = $sum";//print the sum of add numbers up to 1000;
?>

<p><b>4.5. Start with 1000 and stop at 1.</b></p>
<p><i>4.5.1.The sum of all even numbers starting with 1000 and stop at 1.</i></p>
<?php
$sum = 0;

	for ($i = 1000; $i >= 1; $i -= 2){
		/*if ($i%2==0)
			$sum = $sum +$i;
	}*/
		$sum = $sum + $i;
	}
		print "The sum of 1000 + 998 +...+ 2 + 0 = $sum";//print the sum of all even numbers starting with 1000 and stop at 1;

?>
<p><i>4.5.2.The sum of add numbers starting with 1000 an stop at 1.</i></p>
<?php
$sum = 0;
		for ( $i = 999; $i >= 1; $i -= 2){
		/*if ($i%2==1)
			$sum = $sum +$i;
		}*/
			$sum = $sum + $i;
		}
			print "The sum of 999 + 997 +...+ 3 + 1 = $sum";//print the sum of add numbers starting with 1000 and stop at 1;
?>

<h2>II. Breaking out of loops</h2>
<p>In certain situations you may want to exit a loop sooner.<br>We can use the "break" statement.</p>

<?php
$i = 1;

	while ($i <= 100){//cat timp i este mai mic decat 100, 
		$i ++; // i va creste
		if ($i == 50){ //daca i ajunge la 50 se va opri
			break;
			print $i; // nu va ajunge la print
		}	
	}
?>

<p><b>1. Back to our sum problem.Let's redo it with a "while"loop:</b></p>
<?php
$i = 1;
$end = 1000;
$sum = 0;

	while ($i <= $end){
		$sum = $sum + $i;
		$i ++;
	}
	print "The total of 1 + 2 + 3 +...+ 999 + 1000 = $sum";

?>

<p><b>2. Some Exercises (change the code)</b></p>
<p><i>2.1. The sum of all even numbers up to 1000.</i></p>

<?php
$sum = 0;
$i = 0;

 while ($i <= 1000){
 // if ( $i % 2 == 0){
   	$sum = $sum + $i;
//}
  	$i += 2;
 }
 print "The total of 2 + 4 + 6 +...+ 998 + 1000 = $sum";

?>

<p><i>2.2. The sum of all add numbers up to 1000.</i></p>

<?php
$sum = 0;
$i = 1;

 while ($i <= 1000){
  //if ( $i % 2 == 1){
   $sum = $sum + $i;
  //}
 	$i += 2;
 }
 print "The total of 1 + 3 + 5 +...+ 997 + 999 = $sum";
?>

<p><i>2.3. The sum of all even numbers starting to 1000 and end to 1.</i></p>

<?php
$sum = 0;
$i = 1000;

 while ($i >= 1000){
  //if ( $i % 2 == 0){
   $sum = $sum + $i;
  //}
 	$i -= 2;
 }
 print "The total of 1000 - 998 - ....- 4 - 2 - 0 = $sum";
?>

<p><i>2.4. The sum of all add numbers starting to 1000 and end to 1.</i></p>

<?php
$sum = 0;
$i = 999;

 while ($i >= 1){
 // if ( $i %2 == 1 ){
   $sum = $sum + $i;
  //}
	 $i -= 2;
 }
 print "The total of 999 - 997 - ... - 3 - 1 = $sum";
?>
<h2>III. Arrays.</h2>
<p>- Special variables which cand hold multiple values at time.</p>
<p>$color = array ("red", "blue", "green");</p>
<p><i>- An array is defined by using the special "array"</i></p>
<p>$array_name = array(); </p>

<p><b>1.1. Exercises. Arrays Keys.</b></p>
<?php
$colors = array("Blue", "Red", "Green");
	print $colors[2];//print the element on position 2-green

?>
<h4>1.2. Exercises. Arrays Keys.</h4>
<?php
$colors = array(1=>"Blue", 2=>"Red", 3=>"Green");
	print $colors[1];//print the element on position 1

?>
<h2 style="color:red">We  use echo() and print() for variables, but it doesn't work for array!</h2>
<h4>1.3 Exercise whe I define and assign values later.Print with print_r();</h4>
<?php
print_r ($colors);

$colors = array();
	$colors[0] = "red"; 
	$colors[1] = "blue";
	$colors[2] = "green";
?>

<h4>1.4 Exercise whe I define and assign values later.Print with var_dump();</h4>
<?php
var_dump ($colors);

$colors = array();
	$colors[0] = "red"; 
	$colors[1] = "blue";
	$colors[2] = "green";
?>

<h4>1.5 Enclose your printed data in "pre" tags for formatted output.</h4>
<?php
echo "<pre>";
print_r ($colors);
echo "</pre>";

$colors = array();
	$colors[] = "red"; 
	$colors[] = "blue";
	$colors[] = "green";
?>

<h4>1.6.Complicating previous exercise</h4>
<?php
$colors = array();
	$colors["house"] = "red"; 
	$colors["car"] = "blue";
	$colors["tree"] = "green";

	foreach ($colors as $key => $value){
		print "<br> $key is $value";
	}
?>

<h4>1.7.Modifying arrays</h4>
<?php
$colors = array();
	$colors[] = "red"; 
	$colors[] = "blue";
	$colors[] = "green";
	$colors[] = "yellow";//I add new element

	echo "<pre>";
	print_r ($colors);
	echo "</pre>";// the result will be: red, blue,green, yellow
?>

<h4>1.8.Modifying arrays. Add value "Yellow" on position 1.</h4>
<?php
$colors = array();
	$colors[] = "red"; 
	$colors[] = "blue";
	$colors[] = "green";
	$colors[1] = "yellow";//this value will replace with value that exist in position 1

	echo "<pre>";
	print_r ($colors);
	echo "</pre>";// the result will be: red, yellow,green
?>

<h4>1.9.Modifying arrays. Delete an element.</h4>
<?php
$colors = array();
	$colors[] = "red"; 
	$colors[] = "blue";
	$colors[] = "green";
	$colors[] = "yellow";

	unset ($colors[1]);//delete an element
	echo "<pre>";
	print_r ($colors);
	echo "</pre>";
?>

<h4>1.10.Modifying arrays elements.</h4>
<?php
$colors = array(1, 2, 3);
$colors[1] = $colors[1] + 10; //edit element on position 2
	echo "<pre>";
	print_r ($colors);
	echo "</pre>";

?>

<h4>1.11.Modifying arrays. Return number of elements in an array.</h4>
<?php
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
	print count( $numbers);

?>

<h4>1.12.Modifying arrays. Search for a specific value.</h4>
<?php
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
	$value_exists = in_array (5, $numbers);// checkes if value 5 exists in the array
	print $value_exists;

?>

<h2>IV.Traversing arrays.</h2>
<h4>4.1. Display all elements.</h4>
<?php
$colors = array("red","blue","green");
		print_r ($colors);
	
?>

<h4>4.2. Display all elements using the "FOR" loop.</h4>
<?php
$colors = array("red","blue","green");
	for ($i = 0; $i < count($colors); $i++){
		echo "<pre>";
		print ($colors[$i]);//the result will be: red, blue, green
		echo "</pre>";
	}
?>

<h2>V. Nested Arrays</h2>
<p>5.1. An element can hold any variable. So -it can also be an array.</p>
<?php
$numbers = array();
$numbers [] = 1;
$numbers [] = 2;
$numbers [] = array(3, 1);//an array that is nested in other array
	print_r ($numbers);
?>

<h3>Associative arrays</h3>
<p>5.2.Arrays keys dont's have to be numeric.<br>They can be a text which describes the value. </p>
<?php
$team = array();
$team ['PM'] = 'John';
$team ['Developer'] = 'Jack';
$team ['Tester'] = 'Jake';
	echo "<pre>";
	print_r ($team);
	echo "</pre>";
?>

<p><b>5.3.Who's the tester? </b></p>
<?php
$team = array();
$team ['PM'] = 'John';
$team ['Developer'] = 'Jack';
$team ['Tester'] = 'Jake';
	print_r ($team ['Tester']);	
?>

<p><b>5.4. How to list all team members?  </b></p>
<p><font color = "red">We can't use the "FOR" instruction to loop through values, becouse the key is not an incremental value.</font></p>
<?php
$team = array();
$team ['PM'] = 'John';
$team ['Developer'] = 'Jack';
$team ['Tester'] = 'Jake';
	echo "<pre>";
	print_r (array_values ($team));//print all members of team
	echo "</pre>";
?>

<h2>VI. Instruction "FOREACH".</h2>
<p><b>6.1. Exercise with instruction "FOREACH".</b></p>
<?php
$team = array();
$team ['PM'] = 'John';
$team ['Developer'] = 'Jack';
$team ['Tester'] = 'Jake';
		// print all members with their role in the team
	foreach ($team as $key => $value){
		echo "<br> $key - ";
		echo $value;
	}
?>

<p><b>6.2.FOREACH syntax. We can display all team members like this: </b></p>
<?php
$team = array();
$team ['PM'] = 'John';
$team ['Developer'] = 'Jack';
$team ['Tester'] = 'Jake';

	foreach ($team as $role => $name){
		echo $role;
		echo ': ';
		echo $name;
		echo '<br>';
	}
?>

<h2> EXERCISES.</h2>
<p><b> 1. Define a nested a array to hold their first name, last name and the tichet with 6 numbers</b></p>
<?php
//1.Define a nested a array to hold their first name, last name and the tichet with 6 numbers
$friends = array(
  	array(
	    'first_name' => 'John',
	    'last_name' => 'Doe',
	    'ticket' => array(12, 44, 1, 8, 22, 6)
  		),
  	array(
  		'first_name' => 'Jane',
  		'last_name' => 'Foo',
  		'ticket' =>array(34, 23, 34, 12, 32, 10)
  		),
  	array(
  		'first_name' => 'Elvis',
  		'last_name' => 'Peanutbutter',
  		'ticket' =>array(13, 43, 24, 22, 32, 46)
  		)
  	);
	print "<pre>";
	print_r($friends);
	print "</pre>";
			
?>

<p><b>2. Elvis selects a 7th number, add it to his ticket.</b></p>
<?php
$friends = array(
  	array(
	    'first_name' => 'John',
	    'last_name' => 'Doe',
	    'ticket' => array(12, 44, 1, 8, 22, 6)
  		),
  	array(
  		'first_name' => 'Jane',
  		'last_name' => 'Foo',
  		'ticket' =>array(34, 23, 34, 12, 32, 10)
  		),
  	array(
  		'first_name' => 'Elvis',
  		'last_name' => 'Peanutbutter',
  		'ticket' =>array(13, 43, 24, 22, 32, 46)
  		)
  	);	
		$friends[2]['ticket'][6] = 7;
		print "<pre>";
		print_r ($friends[2]);
		print "</pre>";
		
?>

<p><b>3. Jane canceled her ticket, so remove her numbers array completely.</b></p>
<?php
$friends = array(
  	array(
	    'first_name' => 'John',
	    'last_name' => 'Doe',
	    'ticket' => array(12, 44, 1, 8, 22, 6)
  		),
  	array(
  		'first_name' => 'Jane',
  		'last_name' => 'Foo',
  		'ticket' =>array(34, 23, 34, 12, 32, 10)
  		),
  	array(
  		'first_name' => 'Elvis',
  		'last_name' => 'Peanutbutter',
  		'ticket' =>array(13, 43, 24, 22, 32, 46, 7)
  		)
  	);
		unset($friends[1]['ticket']);
		print "<pre>";
		print_r ($friends[1]);
		print  "</pre>";
		 
?>

<p><b>4. For each friend, display their first name and the number of numbers they have on the ticket.</b></p>
<?php
$friends = array(
  	array(
	    'first_name' => 'John',
	    'last_name' => 'Doe',
	    'ticket' => array(12, 44, 1, 8, 22, 6)
  		),
  	array(
  		'first_name' => 'Jane',
  		'last_name' => 'Foo',
  		'ticket' =>array(34, 23, 34, 12, 32, 10)
  		),
  	array(
  		'first_name' => 'Elvis',
  		'last_name' => 'Peanutbutter',
  		'ticket' =>array(13, 43, 24, 22, 32, 46, 7)
  		)
  	);

	foreach ($friends as $players){
		print_r ($players['first_name']);
		print " => &nbsp";
		print count($players['ticket']);
		print "<br>";
	}	
?>

<p><b>5. Calculate the sum of all numbers.</b></p>
<?php
$friends = array(
  	array(
	    'first_name' => 'John',
	    'last_name' => 'Doe',
	    'ticket' => array(12, 44, 1, 8, 22, 6)
  		),
  	array(
  		'first_name' => 'Jane',
  		'last_name' => 'Foo',
  		'ticket' =>array(34, 23, 34, 12, 32, 10)
  		),
  	array(
  		'first_name' => 'Elvis',
  		'last_name' => 'Peanutbutter',
  		'ticket' =>array(13, 43, 24, 22, 32, 46, 7)
  		)
  	);
			$sum = 0;
			foreach($friends as $friend){ //foreach in array level 0
				foreach ($friend as $key => $value){ //foreach in array level 1
					if ($key ==  'ticket'){
						foreach($value as $numbers){ // level 2
							$sum = $sum + $numbers;
						}
					}
				}
			}
			print $sum;
			
?>


<p><b>6. Display the biggest number from all tickets.</b></p>
<?php
$friends = array(
  	array(
	    'first_name' => 'John',
	    'last_name' => 'Doe',
	    'ticket' => array(12, 44, 1, 8, 22, 6)
  		),
  	array(
  		'first_name' => 'Jane',
  		'last_name' => 'Foo',
  		'ticket' =>array(34, 23, 34, 12, 32, 10)
  		),
  	array(
  		'first_name' => 'Elvis',
  		'last_name' => 'Peanutbutter',
  		'ticket' =>array(13, 43, 24, 22, 32, 46, 7)
  		)
  	);
			$max = 0;
			foreach($friends as $friend){
				foreach($friend as $key => $value){
					if ($key == 'ticket'){
						foreach($value as $numbers){
							if ($max < $numbers){
								$max = $numbers;
							}
						}
					}
				}
				
			}
			print ("The biggest number is $max");
?>

</body>
</html>
