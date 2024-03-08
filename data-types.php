<?php

// to check type of a variable
$myVarStr = "42";
echo "type: " . gettype($myVarStr);
echo "<br><br>";


// integer
$number = 42;
echo "Integer: " . $number;
echo "<br><br>";

// float / double
$floatNumber = 3.14;
echo "float / double: " . $floatNumber;
echo "<br><br>";

// string
$stringVar = "Hello, codeStraight";
echo $stringVar;
echo "<br><br>";

// boolean    
$isTrue = true;
$isFalse = false;

echo "Boolean (True): " . $isTrue;
echo "<br><br>";

echo "Boolean (False): " . $isFalse;
echo "<br><br>";


// null
$nullVar = null;
echo "Null: " . $nullVar;
echo "<br><br>";


// Array
$myArray = array("apple", "banana", "orange");

echo "Array: " . $myArray[1];
echo "<br><br>";

print_r($myArray);
echo "<br><br>";

?>


<?php
echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>
