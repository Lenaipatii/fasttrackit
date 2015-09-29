<!DOCTYPE html>
<html>
<head>
	<title>Course 2 PHP </title>
</head>
<body bgcolor="#FFE9FF" style="margin-left: 5em">
	<h1> I. Defining and outputting a variable ! </h1>
	<p>
	<?php
		echo "1. This is My first PHP script!";
	?>
	</p>
	<p>
	<?php
		$var_name1="2. Hello";
		$var_name2="World !";
		print  $var_name1 . " " . $var_name2;//exempplu de concatenare
	?>
	</p>
	<?php
		$var_name1="3. Today is ";
		$var_name2="20-06-2015. ";
		print  $var_name1 . " " . $var_name2;//exempplu de concatenare
	?>
	<p>
	<?php
		 $studentfasttrickit=10;
		 $intro_text="4. The number of students attending today is:";
		 print ($intro_text. " " . $studentfasttrickit);//exempplu de concatenare. Afisarea unui text concatenat cu cifre.
	?>
	</p>
	<p>
	<?php
		 $studentfasttrickit=10;
		 $intro_text="5. The number of students attending today is:";
		 print ( "5. $studentfasttrickit");//Afiseaza valoarea variabilei
	?>
	</p>
	<h2> II. Concatenation ! </h2>
	<?php
		$studentfasttrickit=10;
		$intro_text="1. The number of students attending today is:";
		print ($intro_text ." " . $studentfasttrickit );//exempplu de concatenare.
		print ("<br><br> 2. The number of students attenging today is: ". $studentfasttrickit);

		print ('<br><br> 3. The number of students attenging today is: $studentfasttrickit');//Varianta cu ghilimele simple. Acestea nu interpreateaza valoarea variabilei
		print ("<br><br> 4. The number of students attenging today is: $studentfasttrickit");//Varianta cu ghilimele duble.Acestea interpreteaza valoarea variabilei
		$studentfasttrickit=10;
		$trainers_fasttrickit=1;
		$people_in_the_room=$studentfasttrickit + $trainers_fasttrickit;
		$people_in_the_other_room=14;
		$people_in_the_building=$people_in_the_other_room + $people_in_the_room;
		print ("<br><br> 5. Number of the people in the room is $people_in_the_room .");
		print ("<br><br> 6. Number of the people in the building is $people_in_the_building .");

		$studentfasttrickit= $people_in_the_room - $trainers_fasttrickit;
		$hands_in_the_room = $people_in_the_room * 2; 
		print ("<br><br> 7. Number of the students in the Fasttrackit is $studentfasttrickit");
		print ("<br><br> 8. Number of the hands in the room $hands_in_the_room");
	?>
	<h4> II-A. Addition - Advanced </h4>
	<?php
		print ("Variabila initiala este = 1 <br><br>");
		$trainers_fasttrickit=1;

		$trainers_fasttrickit = $trainers_fasttrickit + 1; //Incrementare.Varianta 1
		// $trainers_fasttrickit += 1; 
		print ("A. Incrementing a variable trainers_fasttrickit by 1: $trainers_fasttrickit");

		$trainers_fasttrickit = $trainers_fasttrickit + 2; 
		//$trainers_fasttrickit += 2; 
		print ("<br> B. Incrementing a variable trainers_fasttrickit by 2: $trainers_fasttrickit");
		
		$trainers_fasttrickit = $trainers_fasttrickit + $trainers_fasttrickit; 
		//$trainers_fasttrickit += $trainers_fasttrickit; 
		print ("<br> C. Incrementing a variable trainers_fasttrickit by itself: $trainers_fasttrickit");
	?>
	<h2> III. Substraction, Multiplication, Division.  </h2>
	<p>  ! Let's play around with basic operation.<p>
	<?php
		print ("Determine and print the results in the form: <u> Rezultatul calcului [calcului aici] este [Rezultatul aici] si este corect.</u>");
		$two="2";
		$three="3";
		$one="1";
		$four="4";
		$six="6";
		$seven="7";

		$results= $two + $three;
		$results1= $two + $three - $one;
		//$results1= $two + $three - 1;
		$results2= $two + $three * $four;
		//$results2= $two + $three - 4;
		$results3= ($two + $one) * $four;
		//$results3= ($two + $one) * 4;
		$results4= $three - ($two / $two);
		//$results4= 3 - ($two / $two);
		$results5= ($six - $two) / $two;
		//$results5= ($six - $two) / 2;
		$results6= $two + $two + $two + $two;
		$results7= ($one - $two) * $three;
		$results8= $seven / $four;


		print ("<br><br>-> Rezultatul calcului $two + $three este $results si este corect.");
		print ("<br><br>-> Rezultatul calcului $two + $three - $one este $results1 si este corect.");
		print ("<br><br>-> Rezultatul calcului $two + $three * $four este $results2 si este corect.");
		print ("<br><br>-> Rezultatul calcului ($two + $one) * $four este $results3 si este corect.");
		print ("<br><br>-> Rezultatul calcului $three - ($two / $two) este $results4 si este corect.");
		print ("<br><br>-> Rezultatul calcului ($six - $two) / $two este $results5 si este corect.");
		print ("<br><br>-> Rezultatul calcului $two + $two + $two + $two este $results6 si este corect.");
		print ("<br><br>-> Rezultatul calcului ($one - $two) * $three este $results7 si este corect.");
		print ("<br><br>-> Rezultatul calcului $seven / $four este $results8 si este corect.");

		print ("<br><u><h4>III-A. Floating Points </h4></u>");
		print ("<br>Primul numar este 1.75 ");
		print ("<br>Al doilea numar este 1.25 ");

		$floating_number1="1.75";
		$floating_number2="1.25";
		$sum = $floating_number1 + $floating_number2; 
		$difference = $floating_number1 - $floating_number2;
		$multiplication = $floating_number1 * $floating_number2;
		$division = $floating_number1 / $floating_number2;

		print ("<br><br>- Suma celor doua numere este  $sum ");
		print ("<br>- Diferenta dintre cele doua numere este $difference ");
		print ("<br>- Produsul celor doua numere este $multiplication ");
		print ("<br>- Rezultatul impartii celor doua numere este $division ");

		print ("<h3> Course Finale Exercise ! </h3>");

		define ("MY_NAME","Lena Ipatii ");
		define ("NAME_COURSE", "Web Development (PHP)");
		$course_location="Fasttrickit";
		$student_number="10";
		$course_number="2";
		$total_course_number="12";
		$course_duration="3";
		$today= "20-06-2015";
		$total_hours = ($course_number * $course_duration);
		$still_have=($total_course_number - $course_number );
		$leaving_hours=(($total_course_number-$course_number) * $course_duration);

		print ("<p>Hello, my name is ". MY_NAME . " and I am attending " . NAME_COURSE . " Course @ $course_location. So far, we are $student_number collegues eager to discover and mastre PHP. Today is $today and we are attending course number $course_number out  of $total_course_number courses, which meens we still have $still_have interesting session to go.</p>
				<p> So far he have a total of  $total_hours hours of PHP training, leaving as $leaving_hours more hours to complete out training.</p>");
			
	?>

</body>
</html>