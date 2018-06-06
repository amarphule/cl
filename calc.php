<?php 

include 'calc.inc.php';							// include class file

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$cal = $_POST['cal'];

$calculator = new calc($num1, $num2, $cal);		// Created Object
echo $calculator->calcMethod();

?>

<!--html code -->
<br><br>
<a href = "index.php">Back</a>