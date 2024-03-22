<?php
//   arithmetic operators
$a = 10;
$b = 5;

// addition operator
$sum = $a + $b;
echo "Sum: " . $sum;
echo "<br><br>";

// calculate a difference
$difference = $a - $b;
echo "Difference is: " . $difference;
echo "<br><br>";

// find a product of two variables

$product = $a * $b;
echo "Product: " . $product;
echo "<br><br>";

// divide 
$quotient = $a / $b;
echo "Quotient: " . $quotient;
echo "<br><br>";

// Assignment operators
$c = 15;
$c += 5; // same as c=c+5
echo "addition assignment Answer is : " . $c;
echo "<br><br>";

// subtraction assignment
$c -= 3; // same as c=c-3
echo "Subtraction Assignment Answer is : " . $c;
echo "<br><br>";

// Multiplication Assignment operator
$c *= 2; // same as c=c*2
echo "Multiplication Assingment Answer is: " . $c;
echo "<br><br>";

// Division Assignment Operator
$c /= 4; // same as c=c/4
echo "Division Assignment Operator Answer is: " . $c;
echo "<br><br>";

// Increment & Decrement Operator
$counter = 5;
$counter++; // same as $counter = $counter + 1
echo "Increment Operator Answer is: " . $counter;
echo "<br><br>";

// Decrement Operator
$counter--; // same as $counter = $counter -1
echo "Decrement Operator Answer is: " . $counter;
echo "<br><br>";

// compaison operator
$a = 10;
$b = 5;

// equal operator
if ($a == $b) {
    # code...
    echo "\$a is equal to \$b";
    echo "<br><br>";
} else {
    # code...
    echo "\$a is not equal to \$b";
    echo "<br><br>";
}


// not equal to operator 
if ($a != $b) {
    # code...
    echo "\$a is not equal to \$b";
    echo "<br><br>";
} else {
    # code...
    echo "\$a is equal to \$b";
    echo "<br><br>";
}


// greater than (>) Operator
if ($a > $b) {
    # code...
    echo "\$a is greater than \$b";
    echo "<br><br>";
} else {
    # code...
    echo "\$a is not greater than \$b";
    echo "<br><br>";
}


// less than (<) Operator
if ($a > $b) {
    # code...
    echo "\$a is less than \$b";
    echo "<br><br>";
} else {
    # code...
    echo "\$a is not less than \$b";
    echo "<br><br>";
}

// greater than or equal to operator
if ($a >= $b) {
    # code...
    echo "\$a is greater than or equal to \$b";
    echo "<br><br>";
} else {
    # code...
    echo "\$a is not greater than or equal to  \$b";
    echo "<br><br>";
}

// less than or equal to operator
if ($a <= $b) {
    # code...
    echo "\$a is less than or equal to \$b";
    echo "<br><br>";
} else {
    # code...
    echo "\$a is not less than or equal to  \$b";
    echo "<br><br>";
}

// logical operators
$isTrue = true;
$isFalse = false;

// Logical "And (&&)" Operator
if ($isTrue && $isFalse) {
    # code...
    echo " Logical And operator: Both conditions are true";
    echo "<br><br>";
} else {
    # code...
    echo " Logical And operator: atleast one condition is false ";
    echo "<br><br>";
}

// Logical Or (||) operator
if ($isTrue || $isFalse) {
    # code...
    echo "Logical Or operator: Atleast one condition is true";
    echo "<br><br>";
} else {
    # code...
    echo "Logical Or operator: Both conditions are false";
    echo "<br><br>";
}

// Logical Not (!) operator
if (!$isFalse) {
    # code...
    echo "Logical Not operator: The condition is true";
    echo "<br><br>";
} else {
    # code...
    echo "Logical Not operator: The condition is false";
    echo "<br><br>";
}

?>


<?php
echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>
