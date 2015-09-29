<html>
<head>
	<title> Homework Course 4.</title>
</head>
<body>
<h1>Homework</h1>
<p><b>Exercise 1. </b> <br> Write a program that prints the numbers from 1 to 100. But for multiples of three print "Fast" instead of the number and for the multiples of five print "Track". For numbers which are multiples of both three and five print "FastTrack".</p>

<p><u><i>1.1. All numbers from 1 to 100 .</i></u></p>
<?php
	for($i = 1; $i <= 100; $i++){
		print($i);
		if ($i < 100){
			print ", ";
		}
	}
?>

<p><u><i>1.2. But for multiples of three print "Fast" instead of the number and for the multiples of five print "Track". For numbers which are multiples of both three and five print "FastTrack".</i></u></p>
<?php
	for($i = 1; $i <= 100; $i++){
		if ($i % 3 == 0 && $i % 5 == 0 ){
			print "FastTrack";
		} elseif ($i % 3 == 0){
			print "Fast";
		} elseif ($i % 5 == 0){
			print "Track";
		} else {
			print $i;
		}
		if ($i < 100){
			print ", ";
		}
	}	
?>

<p><b>Exercise 2.<br></b><u><i>2.1.Write a program that orders ascendingly the following array. Selection Sort.</i></u></p>
<?php
$array = array(2, 3, 1, 5, 4);
$arrlength = count($array);

	for($i = 0; $i < $arrlength; $i++){
		$poz = $i;
		for ($j = $i + 1; $j < $arrlength; $j++){
			if($array[$j] < $array[$poz])
				$poz = $j;
				$aux = $array[$i];
				$array[$i] = $array[$poz];
				$array[$poz] = $aux;
		}
	}
			print "<pre>";
			print_r($array);
			print "</pre>";
?>

<p><u><i>2.2.Solve the problem with DO....WHILE. Write a program that orders ascendingly the following array. Bubble sort.</i></u></p>
<?php
$array = array(2, 3, 1, 5, 4);
$arrlength = count($array); //count the numbers of array

	do {
		$ok = 1;
		for($i = 0; $i < $arrlength-1; $i++){ 
			if ($array[$i] > $array[$i + 1]){
				$aux = $array[$i];
				$array[$i] = $array[$i + 1];
				$array [$i + 1] = $aux;
				$ok = 0;
			}
		}
	}while ($ok == 0);
	
	for ($i = 0; $i < $arrlength; $i++){
		print $array[$i]." " ;
	}
?>

<p><b> Exercise 3.<br></b>Define two arrays with the same number of elements, just numbers. Create programmatically a third array, which holds on each position the sum of two numbers from the same position in the first two arrays. For example, the first element in the third array is the sum of first element of first array and the first element of second array.</p>

<p><u><i>3.1. Define two arrays with the same number of elements, just numbers.</i></u></p>
<?php
$array_1 = array(9, 8, 7, 6, 5, 4, 3, 2, 1);
$array_2 = array(9, 8, 7, 6, 5, 4, 3, 2, 1);
	print "<pre>";
	print_r($array_1);
	print_r($array_2);
	print "</pre>";

?>

<p><u><i> Create programmatically a third array, which holds on each position the sum of two numbers from the same position in the first two arrays. </i></u></p>
<?php
$x = array(9, 8, 7, 6, 5, 4, 3, 2, 1);
$y = array(9, 8, 7, 6, 5, 4, 3, 2, 1);
$x_length = count($x);
$y_length = count($y);

	for ($i = 0; $i < $x_length; $i++){
		for($j = 0; $j < $y_length; $j++){
			$z[$i][$j] = $x[$i] + $y[$j];
		} 
	}
			print $z[0][0]. " ".$z[1][1]." ".$z[2][2]." ".$z[3][3]." ".$z[4][4]." ".$z[5][5]." ".$z[6][6]." ".$z[7][7]." ".$z[8][8];

?>
</body>
</html>