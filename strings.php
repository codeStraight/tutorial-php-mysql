<?php

// String
$singleQuoted = 'This is a "single Quoted string".';

$doubleQuotedString = "This is a 'double quoted string'";

echo $singleQuoted;
echo "<br><br>";
echo $doubleQuotedString;

echo "<br><br>";

// varibles within double quotes
$name = "Alice";
$greeting = "Hello, $name";
echo $greeting;
echo "<br><br>";


// 01. String functions
$str = "Hello, PHP!";
echo "Length of the string is: " . strlen($str);
echo "<br><br>";

// 02. count the number of words 
$str = "Hello, PHP! Welcome to the world of Programming";

$wordCount = str_word_count($str);
echo "Number of words in a string: " . $wordCount;
echo "<br><br>";

// 03. to find the position of the forst occurence
$position = strpos($str, "PHP!");
echo "Position of 'PHP' in the string: " . $position;
echo "<br><br>";

// 04. extract a part of a string
$subString = substr($str, 7, 5);
echo "Extracted substring: " . $subString;
echo "<br><br>";

// 05. replace all occurences
$newStr = str_replace("PHP", "Python", $str);
echo "Modified string: " . $newStr;
echo "<br><br>";

// 06. if u wana change the case of a string
echo "Lowercase string: " . strtolower($str);
echo "<br><br>";

echo "UpperCase string: " . strtoupper($str);
echo "<br><br>";

// 07. if u wana reverse a string
$reversedString = strrev($str);
echo "Reversed string: " . $reversedString;
echo "<br><br>";


// 08. if u wana capitalize the first character of each word
$string = "hello world";
$capitalized = ucwords($string);
echo "Capitalized string: " . $capitalized;
echo "<br><br>";

// 09. if u wana split  
$fruitString = "Apple,Orange,Banan";
$fruitsArray = explode(",", $fruitString);
print_r($fruitsArray);
echo "<br><br>";
?>



<?php
    echo '<a href="https://youtu.be/n7qNbSldhSI">TUTORIAL LINK</a>';
    echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>
