# 1. VARIABLES
index.php
```php
// php slide
// first of all let's talk about PHP-SYNTAX
  <?php echo 'Hello codeStraight'; ?>

// php Code starts with "left-angle, question, php" and ends with "question-mark, and right-angle"
// echo is used to display or output content to the web browser "  
// php statement always ends with a semicolon ;

// secondly, of all we are gonna jump into "php-comments":
    // comments are very helpful to take notes or documentation
// This is a single-line comment in PHP

/* 
This is a multiline-line comment in PHP
Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, temporibus.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, temporibus.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, temporibus.
*/

// add html-template
// add footer
```
```php
// after that let's move on to VARIABLES:

// In PHP, a variable is a placeholder or a container that holds a value. It's a fundamental concept used to store and manipulate various types of data within a script.

// declaring a variable
$myVar = 42;
// naming conventions for variables enhance code-readability and maintainability.

// things to consider while declarig a variable:
    // Start variable names with a dollar sign $.
    // Use descriptive names that reflect the variable's purpose.
    // Use camelCase or underscores to separate words.
    // You can name variables using letters, numbers, and underscores, 
    // must start with a letter or an underscore.eg

$firstName = "John"; // camelCase
$last_name = "Doe"; // Underscore separation

$_myVar1 = 42; //start with underscore

// now if you wana output the variable, you can use "echo" keyword followed by variable or string:
echo $_myVar1;

// you can also embed HTML tags within PHP
echo "<br>";

// if double quotes, output both the string and variable
echo "the number is: $_myVar1 inwords, forty two";

// or you can also concatenate string and variable with period "."
echo "the number is: " . $_myVar1 . " inwords, forty two";

// or you can interpolate variable with {}
echo "the number is: {$_myVar1}  inwords, forty two";


/*
turn on php errors
stop xampp:
    sudo /opt/lampp/lampp stop

edit the folowing:
    sudo nano /opt/lampp/etc/php.ini
        display_errors = on
to launch xampp:
    sudo /opt/lampp/./manager-linux-x64.run
*/


// for styling: css / bootstrap series

// data-type = not needed, supports = strings, integers, floats(double), arrays, e.g:

$myVarStr = "42";

// to check type of string:
echo "type: ".gettype($myVar);

echo "<br> type: ".gettype($myVarSt);

// variables are case-sensitive e.g:
$myVar = "Hello";
$myvar = "World";

echo $myVar;
echo "<br>";
echo $myvar;

// In this code, we have two variables: $myVar and $myvar. Even though the variable names are similar, PHP treats them as distinct due to the difference in their case.

// Variable scope
// in PHP Variable scope refers to where a variable is accessible or visible in your code . There are primarily two types of variable scope: global and local.

// Global Scope: Variables declared outside of functions 
//    The global keyword is used to access a global variable.

// Local Scope: Variables declared within a function e.g:

$globalVar = "I'm a global variable"; // Global variable

function testFunction() {
    $localVar = "I'm a local variable"; // Local variable
    echo $localVar; // Output: I'm a local variable
    echo "<br>"; // HTML line break for better readability

    // global $globalVar;
    echo $globalVar; // Output: I'm a global variable
}

testFunction(); // Calling the function

// Trying to access the local variable outside the function
// This will cause an error because $localVar is not accessible here
echo $localVar; // Error: Undefined variable: localVar

// static variable
// In PHP, a static variable within a function maintains its value between function calls.e.g:

function incrementCounter() {
    static $counter = 0;

    // ++ increment operator
    $counter++;
    echo "Counter value: $counter<br>";
}

incrementCounter();
incrementCounter();
incrementCounter();

// constants
// constants are like variables, but their values cannot be changed or redefined.e.g:
// define() function is used to create a constant.
// Constants are typically defined using uppercase letters.
// They are accessed without the leading dollar sign ($) unlike variables.e.g:

define("SITE_NAME", "My web-application"); // Define a constant named SITE_NAME with value "My web-application"

echo SITE_NAME; // Output: My web-application

// magic constants
// magic constants are predefined constants that change based on their usage. These constants begin with two underscores (__) and provide valuable information about the current environment, file, or code-execution-context

// 01. first of all, if you wana return the line number, you can use __LINE__
echo "The Line number is : " . __LINE__; 
echo "<br><br>";

// 02. if you wana return the full path of the executed file, you can use __FILE__
echo "The file name is : " . __FILE__; 
echo "<br><br>";


// 03. next, if you wana return the directory of the executed file, you can use __DIR__
echo "The directory is : " . __DIR__; 
echo "<br><br>";


// 04. moving on, if you wana return the name of the function, you can use __FUNCTION__

function exampleFunction() {
    echo "name of the function is: " . __FUNCTION__; // Outputs the function name
}
exampleFunction();
echo "<br><br>";


// n That was all about "Intro of php & variables"

// if you have any question, you just feel free to comment below.and Do not forget to like, share and subscribe.

// hope you enjoyed the episode, thnx for watching n see you next time.
```
