<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phptutorial</title>
</head>

<body>
    <?php echo "Hello World"; ?>

    <?php
    // this is a single line comment

    /* 
    this is mitiline comment
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, tenetur!
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, tenetur!
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, tenetur!
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, tenetur!
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, tenetur!      
    */

    // declare a variable
    $myVar = 42;

    // camelcase
    $firstName = "John";


    // underscore separation
    $last_name = "Doe";

    // start with underscore
    $_myVar = 42;

    echo "<br>";
    echo "the value of the variable is: $myVar";

    echo "<br><br>";
    // concatenate variable with the string
    echo "the number is:" .   $myVar;

    echo "<br><br>";
    // interpolate variable with {}
    echo "the number is: {$_myVar} in words, forty two";

    $myVar = "Hello";
    $myvar = "World";

    echo "<br><br>";
    echo $myVar;
    echo "<br><br>";
    echo $myvar;

    // global variable

    $globalVariable = "I'm a global variable";

    function testFunction()
    {
        $localVariable = "I'm a local variable";

        echo "<br><br>";
        echo $localVariable;
        echo "<br><br>";

        global $globalVariable;
        echo $globalVariable;
    }

    testFunction();

    echo "<br><br>";
    echo $localVariable;

    echo "<br><br>";
    // static variable
    function incrementCounter()
    {
        static $counter  = 0;
        $counter++;
        echo "Counter value: $counter ";
        echo "<br><br>";
    }

    incrementCounter();
    incrementCounter();
    incrementCounter();

    echo "<br><br>";
    // constant
    define("SITE_NAME", "My web-application");

    echo SITE_NAME;

    echo "<br><br>";
    // 01. RETUN THE LINE NUMBER
    echo "The Line Number is :" . __LINE__;

    echo "<br><br>";

    // 02. return full path of the executed file
    echo "the file name is: " . __FILE__;
    echo "<br><br>";

    // 03. retur the directory of the executed file

    echo "the directory is: " . __DIR__;
    echo "<br><br>";

    // 04. return the name of the function
    function exampleFunction()
    {
        echo "name of the function: " . __FUNCTION__;
    }
    exampleFunction();
    echo "<br><br>";
    ?>
    <footer>
        <p style="margin-top: 20rem; text-align:center">&copy; codeStraight</p>
    </footer>
</body>

</html>
