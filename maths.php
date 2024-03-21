<?php
// return absolute value
$number = -15;
echo "absolute value is: " . abs($number);
echo "<br><br>";

// calculate the square root of a number
$number = 25;
echo "square root of 25 is: " . sqrt($number);
echo "<br><br>";

// raise a number to a specific power
$base = 2;
$exponent = 3;
echo "the answer is: " . pow($base, $exponent);
echo "<br><br>";

// round a floating point number to the nearest integer
$floatNumber = 4.6;
echo "the answer is: " . round($floatNumber);
echo "<br><br>";

// round a floating point number down to the nearest integer (towards negative-infinity)

$floatNumber = 7.9;
echo "the answer is: " . floor($floatNumber);
echo "<br><br>";

// round a floating-point-number upto the nearest integer (towards positive-infinity)
$floatNumber = 3.2;
echo "the answer is: " . ceil($floatNumber);
echo "<br><br>";

// return the value of mathematical constant pi
$piValue = pi();
echo "the value of Pi is approx: " . $piValue;
echo "<br><br>";

// generate a random-integer within a specified range
$randNumber = rand(1, 10);
echo "the random number from the range 1-10 is: " . $randNumber;
echo "<br><br>";

// return the smallest value among a set of numbers
$minValue = min(10, 5, 8, 12);
echo "the smallest value is from the set: " . $minValue;
echo "<br><br>";

// min() with an array
$arrayName = array(20, 15, 25, 18);
$minFromArray = min($arrayName);
echo "the smallest value from the array is: " . $minFromArray;
echo "<br><br>";

// return the largest value 
$maxValue = max(10, 5, 8, 12);
echo "the largest number is: " . $maxValue;
echo "<br><br>";

// use max() with an array
$arrayName = array(20, 15, 25, 18);
$maxFromArray = max($arrayName);
echo "the alrgest number from the array is: " . $maxFromArray;
echo "<br><br>";

?>

<?php
echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>

