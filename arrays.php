<?php

// index array
$colors = array("Red", "Green", "Blue");
print_r($colors);
echo "<br><br>";

// individually accessing an element 
echo "second element of the array: " . $colors[1];
echo "<br><br>";

// associative array
$person = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York",
    "email" => "john@example.com"
);

// access an element of an associative array
echo "Name: " . $person["name"];
echo "<br><br>";
echo "Age: " . $person["age"];
echo "<br><br>";
echo "City: " . $person["city"];
echo "<br><br>";
echo "Email: " . $person["email"];
echo "<br><br>";

// multidimensional array
$students = array(
    array("John", 22, "Male"),
    array("Emily", 16, "Female"),
    array("David", 21, "Male")
);

// accesing an element of multidimensional array
echo "Name: " . $students[0][0];
echo "<br><br>";
echo "Gender of a second element: " . $students[1][2];
echo "<br><br>";
echo "age of a third element: " . $students[2][1];

echo "<br><br>";

// array functions
$fruits = array("Apple", "Orange", "Banana");

// print_r()
print_r($fruits);
echo "<br><br>";

// var_dump()
var_dump($fruits);

echo "<br><br>";
// loop through an array
// using foreach
foreach ($fruits as $key => $value) {
    # code...
    echo "the key of the current element is: " . $key;
    echo "<br><br>";
    echo "the value of the current element is: " . $value;
    echo "<br><br>";
}

echo "<br><br>";
// array_push
array_push($fruits, "Kiwi");
print_r($fruits);
echo "<br><br>";

// array_pop()
$lastElement = array_pop($fruits);
echo "The last element: " . $lastElement;
echo "<br><br>";

// array_pop()
$lastElement = array_pop($fruits);
echo "Last element from the array: " . $lastElement;
echo "<br><br>";

// merge arrays
$array1 = array("a" => "red", "b" => "green");
$array2 = array("c" => "blue", "d" => "yellow");
$mergedArray = array_merge($array1, $array2);
echo "merged array: ";
echo "<br><br>";
print_r($mergedArray);
echo "<br><br>";

// retrieve keys n values form an array
$array1 = array("a" => "red", "b" => "green");
// access keys
$keys = array_keys($array1);
print_r($keys);
echo "<br><br>";

// access values of an array
$values = array_values($array1);
print_r($values);
echo "<br><br>";

// sort an array
// an ascending order
$numbers = array(4, 2, 8, 5, 1);
sort($numbers);
print_r($numbers);
echo "<br><br>";

// descending order
rsort($numbers);
print_r($numbers);
echo "<br><br>";

// assciative array in an ascending order
$person = array(
    "name" => "John",
    "email" => "john@example.com",
    "city" => "New York",
    "age" => 30,
);

ksort($person);
print_r($person);
echo "<br><br>";

// sort it in descending order
krsort($person);
print_r($person);
echo "<br><br>";


// sort associative array's values in ascending order
$numbers = array("b" => 4, "a" => 7, "d" => 2, "c" => 9);
asort($numbers);
print_r($numbers);
echo "<br><br>";

// descending order
$numbers = array("b" => 4, "a" => 7, "d" => 2, "c" => 9);
arsort($numbers);
print_r($numbers);
echo "<br><br>";

// JSON (javascript object notation)
$sampleArray = array(
    "name" => "John",
    "age" => 30,
    "email" => "john@example.com",
    "skills" => array("PHP", "Javascript", "HTML", "CSS"),
);

// encode php-array to json format
$jsondata = json_encode($sampleArray);
echo "Encoded JSON data: ";
echo "<br><br>";
echo $jsondata;
echo "<br><br>";

// decode json data to php-array
$decodedArray = json_decode($jsondata, true);
echo "Decoded php-array: ";
echo "<br><br>";
print_r($decodedArray);
echo "<br><br>";

// regular expressions aka regex
$pattern = "/^hello\d{2,4}$/";
$string1 = "hello123";
$string2 = "hello12345";
$string3 = "hi123";

if (preg_match($pattern, $string3)) {
    # code...
    echo "Match found for " . $string3;
} else {
    # code...
    echo "No match found for " . $string3;
}

?>

<?php
echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>
