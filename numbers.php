<?php

// 01. if u wana check a value of an integer
$number = "42";
if (is_int($number)) {
    # code...
    echo "the variable is an integer";
    echo "<br><br>";
} else {
    # code...
    echo "the variable is not an integer";
    echo "<br><br>";
}

// to check a value is a float / double
$floatNumber = 3.14;
if (is_float($floatNumber)) {
    # code...
    echo "the variable is a floating point number";
    echo "<br><br>";
} else {
    # code...
    echo "the variable is not a floating point number";
    echo "<br><br>";
}


// check a value is a finite
$finiteNumber = 10;
if (is_finite($finiteNumber)) {
    # code...
    echo "the value of the variable is finite";
    echo "<br><br>";
} else {
    # code...
    echo "the value of the variable is not finite";
    echo "<br><br>";
}


// check infinite value
$infiniteNumber = INF;
if (is_infinite($infiniteNumber)) {
    # code...
    echo "the value of the variable is infinite";
    echo "<br><br>";
} else {
    # code...
    echo "the value of the variable is not infinite";
    echo "<br><br>";
}

// check if a value if not a number (NAN)
$notANumber = acos(8);
if (is_nan($notANumber)) {
    # code...
    echo "the value of the variable is (not a number)";
    echo "<br><br>";
} else {
    # code...
    echo "the value of the variable is not (not a number)";
    echo "<br><br>";
}


// check if a value is numeric
$numericValue = "123";
if (is_numeric($numericValue)) {
    # code...
    echo "the value of the variable is numeric";
    echo "<br><br>";
} else {
    # code...
    echo "the value of the variable is not numeric";
    echo "<br><br>";
}

// tyecasting
// using (int) function
$stringNumber = "abc";
$intNumber = (int)$stringNumber;
echo gettype($intNumber);
echo "<br><br>";

// using intval()
$stringNumber = "456Hello";
$intNumber = intval($stringNumber);
echo gettype($intNumber);
echo "<br><br>";

// if u have float / double
// using (int) function
$stringNumber = "5.99";
$intNumber = (int)$stringNumber;
echo gettype($intNumber);
echo "<br><br>";

// using intval()
$stringNumber = "5.99";
$intNumber = intval($stringNumber);
echo gettype($intNumber);
echo "<br><br>";

?>

<?php
echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>
