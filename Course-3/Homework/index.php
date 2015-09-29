<html>
<head>
	<title>Homework</title>
<head>
<body>

<h2>Homework</h2>
<p><b>1. Assume variables $x = 5 and $y = 6. <br>Solve and explain the results for: </b></p>
<p> Exercise 1.1 ==> <b>!(x > 6)</b></p>

<?php
$x = 5;
$y = 6;

//Solve the first script
var_dump (!($x > 6));//Becouse (5 > 6) is False and !(False) is TRUE

	if (!($x > 6)) {
		print "The expresion is TRUE."; 
	}
	else {
		print "The expresion is FALSE";
	}
?>

<p> Exercise 1.2 ==> <b>(x == 6 && x == 5)</b></p>

<?php
$x = 5;
$y = 6;

var_dump ($x == 6 && $x == 5); // ($x == 6) is False AND ($x == 5) is True, then false && true = false

	if (($x == 6) && ($x == 5)){
		print "The expresion is TRUE ";
	}
	else {
		print "The expresion is FALSE ";
	}
?>


<p> Exercise 1.3 ==> <b>( x == 6 || x == 5)</b></p>

<?php
$x = 5;
$y = 6;

var_dump ($x == 6 || $x == 5); // false || true = true

	if (($x == 6) || ($x == 5)){
		print "The expresion is TRUE ";
	}
	else {
		print "The expresion is FALSE ";
	}
?>

<p> Exercise 1.3 ==> <b>( x == 6 || x == 5)</b></p>
 
<?php 
$x = 5;
$y = 6;

var_dump (( $x > -1) && ($y < 10));// true && true = true

	if (($x > (-1)) && ($y < 10)) {
		print "The expresion is TRUE ";
	}
	else{
		print "The expresion is FALSE";
	}
?>
<p> Exercise 1.4 ==> <b>(x > 10 && x < 5)</b></p>

<?php
$x = 5;
$y = 6;

var_dump ($x > 10 && $x < 5);// false && false = false
	
	if (($x > 10) && ($x < 5)) {
		print "The expresion is TRUE)";
	}
	else {
		print "The expresion is FALSE";
	}
?>

<br><hr><hr>
<p><b>2. Let be the following variables : $a = 3; $c = 21; $e = 1; defined in this order. <br> Write a script that, by comparing the 3 variables one to each other will print them in ASCENDING order.  </b></p>

<h4> Varianta 1.</h4>

<?php
$a = 3;
$c = 21;
$e = 1;

$numbers = array($a, $c, $e);// am facut un sir din variabilele de mai sus
sort($numbers);

$arrlength=count($numbers);//numara nr variabileleor din sir

for($x = 0; $x < $arrlength; $x++) 
   {
   echo $numbers[$x];
   echo ",";
	}
?>

<h4> Varianta 2.</h4>

<?php
$a = 3;
$c = 21;
$e = 1;
//$aux variabila ajutatoare

$numbers = array($a, $c, $e,5,6,2,4);// sirul $numbers (3,21,1);
$arrlength = count($numbers); //lungimea sirului 

do{
	$schimb = false;
	for($i = 0; $i < $arrlength-1; $i++){ 
		if ($numbers[$i] > $numbers[$i+1]){
			$aux = $numbers[$i];
			$numbers[$i] = $numbers[$i+1];
			$numbers [$i+1] = $aux;
			$schimb = true;
		}
	}
}while ($schimb == true);

//print_r ($numbers);
//var_dump ($numbers);

	for ($i = 0; $i < $arrlength; $i++){
		print $numbers[$i]." ";
	}
?>

<h4> Varianta 3.</h4>
<?php
$a = 3;
$c = 21;
$e = 1;

$numbers = array($a, $c, $e);// sirul $numbers (3,21,1);
$arrlength = count($numbers);

	for ($i = 0; $i < $arrlength; $i++){
		$poz = $i;
		for ($j = $i + 1; $j < $arrlength; $j++){
			if ($numbers[$j] < $numbers[$poz])
				$poz = $j;
			if ($i < $poz){
				$aux = $numbers[$i];
				$numbers[$i] = $numbers[$poz];
				$numbers[$poz] = $aux;
			}
		}
	}
			print "<pre>";
			print_r($numbers);
			print "</pre>";

?>

</body>
</html>